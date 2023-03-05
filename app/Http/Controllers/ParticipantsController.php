<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Insurer;
use App\Models\Participant;

class ParticipantsController extends Controller
{
    public function showMain(){
        //$reservation_id="ASD";
        //\QrCode::generate($reservation_id, base_path()."/public/storage/qr/".$reservation_id.'.svg');
        $cursesNoExprire=DB::table('races')->whereDate('date_start', '>=', date("Y-m-d"))->get();
        $cursesExprired=DB::table('races')->whereDate('date_start', '<=', date("Y-m-d"))->get();
        return view("general.principal",['cursesNoExprire' => $cursesNoExprire,'cursesExprired' => $cursesExprired]);
    }
    public function create(Request $request){
        $race = Race::find($request->id);
        $insurer = DB::table('insurers')->get()->where('status', true);
        return view('general.races.showNew',['race' => $race,'insurer' => $insurer]);
    }
    public function store(){
        $data = request()->validate([
            'dni' => 'required',
            'name_participant' => 'required',
            'address_home' => 'required',
            'date_birth' => 'required',
            'insurers_id' => 'required_if:profecional,==,false',
            'races_id' => 'required',
        ]);
        if (DB::table('participants')->where('dni', '=',$data["dni"])->where('races_id', '=',$data["races_id"])->exists()) {
            ?>
            <script>
                if(!alert("Aquest Dni ja esta registrat en aquesta cursa!")){
                    window.location = '/';              
                }
            </script>
            <?php
        }
        else{
            Participant::create($data);
            return redirect(route("PaginaPrincipal"));
        }
    }
    public function markTime(Request $request){
        $result = DB::table('participants')->where('id', $request["id"])->where('finish_time' , null);
        if($result->count() == 1){
            $affected = DB::table('participants')->where('id', $request["id"])->update(['finish_time' => date('Y-m-d H:i:s')]);
        }
        return redirect(route("PaginaPrincipal"));
    }
}
?>