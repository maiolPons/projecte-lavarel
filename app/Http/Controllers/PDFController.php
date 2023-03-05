<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Race;
use Illuminate\Support\Facades\DB;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePdfDorsal()
    {
        $race = Race::find($_GET["id"]);
        $participants = DB::table('participants')->where('races_id',$_GET["id"])->get();
        $data = [
            'title' => 'Dorçals',
            'race' => $race,
            'participants' => $participants
        ]; 
            
        $pdf = PDF::loadView('admin.curses.pdfDorsal', $data);
        //return view('admin.curses.pdfDorsal',['data' => $data]);
        return $pdf->download('laraveltuts.pdf');
    }
}