<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Omnipay\Omnipay;
use App\Models\Participant;


class paymentController extends Controller
{
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

   
    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
        $data = request()->validate([
            'dni' => 'required',
            'name_participant' => 'required',
            'address_home' => 'required',
            'date_birth' => 'required',
            'insurers_id' => 'required_if:profecional,==,false',
            'races_id' => 'required',
        ]);
        $res = DB::table('participants')->where('dni', '=',$data["dni"])->where('races_id', '=',$data["races_id"])->first();
        $max = DB::table('races')->where('id', '=',$data["races_id"])->first();
        $resPart = DB::table('participants')->where('races_id', '=',$data["races_id"])->get();
        $count = count($resPart);

        if(is_null($res) && $max->max_people > $count)
        {
            try {
                session(['data' => $data]);
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
        else{
            $message = "La capacitat esta al limit";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '/'; }, 1000);</script>";
        }
    }
   
    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
           
                // Insert transaction data into the database
                $participant = new Participant;
                $participant->dni = session('data')["dni"];
                $participant->name_participant = session('data')["name_participant"];
                $participant->address_home = session('data')["address_home"];
                $participant->date_birth = session('data')["date_birth"];
                $participant->races_id  = session('data')["races_id"];
                if(isset(session('data')["insurers_id"])){
                    $participant->insurers_id  = session('data')["insurers_id"];
                }
                $data=session('data');
                $participant->save();
                session()->forget('data');
                return redirect(route("pagament"));
            } else {
                return $response->getMessage();
            }
        } else {
            return redirect(route("pagament"));
        }
    }
   
    /**
     * Error Handling.
     */
    public function error()
    {
        return redirect(route("PaginaPrincipal"));
    }
    public function pagament(Request $request){
        return view('general.races.paymentComplete');
    }
}
