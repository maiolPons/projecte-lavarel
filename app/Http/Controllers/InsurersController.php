<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insurer;
use Illuminate\Support\Facades\DB;

class InsurersController extends Controller
{
    public function create(){
        return view("admin.insurers.create");
    }
    public function store(){
        //valida el camps
        $data = request()->validate([
            'CIF' => 'required',
            'insurers_name' => 'required',
            'insurers_address' => 'required',
            'insurers_price' => 'required',
        ]);
        //fa l'insert a la base de dades
        Insurer::create($data);

        return redirect()->route('crearInsurers');
    }
    public function show(Request $request){
        if($request["buscar"]==null){
            $insurers = Insurer::get();
        }
        else{
            $insurers = DB::table('insurers')->where('CIF', 'like', '%'.$request["buscar"].'%')->orWhere('insurers_name', 'like', '%'.$request["buscar"].'%')->get();
        }
        return view('admin.insurers.show',['insurers' => $insurers]);
    }
    public function update(){
        $insurers = Insurer::find($_GET["id"]);
        return view('admin.insurers.update',['insurers' => $insurers]);
    }
    public function updated(){
        
        $data = request()->validate([
            'CIF' => 'required',
            'insurers_name' => 'required',
            'insurers_address' => 'required',
            'insurers_price' => 'required',
            'id' => '',
        ]);
        DB::table('insurers')->where('id', $data['id'])->update($data);
        

        return redirect()->route('llistarInsurers');
         
    }
    public function updateState(Request $request){
        $curses = Insurer::find($request->id);
        if($curses->status==1){
            DB::table('insurers')->where('id', $request->id)->update([
                'status' => 0,
            ]);
        }else{
            DB::table('insurers')->where('id', $request->id)->update([
                'status' => 1,
            ]);
        }
        return redirect()->route('llistarInsurers');
    }
}
