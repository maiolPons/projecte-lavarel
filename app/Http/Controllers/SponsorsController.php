<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;

class SponsorsController extends Controller
{
    public function create(){
        return view("admin.sponsors.create");
    }
    public function store(){
        //valida el camps
        $data = request()->validate([
            'name_sponsor' => 'required',
            'CIF_sponsor' => 'required',
            'sponsor_address' => 'required',
            'home_page' => 'required',
            'logo' => 'required','image',
        ]);
        //guarda la imatge 
        $imagePath = request('logo')->store('uploads/sponsorLogo','public');
        //fa l'insert a la base de dades
        Sponsor::create(
            [     
                'name_sponsor' => $data['name_sponsor'],
                'CIF_sponsor' => $data['CIF_sponsor'],
                'sponsor_address' => $data['sponsor_address'],
                'home_page' => $data['home_page'],
                'logo' => $imagePath,
            ]
        );

        return redirect()->route('crearSponsors');
    }
    public function show(){
        $sponsors = Sponsor::get();
        return view('admin.sponsors.show',['sponsors' => $sponsors]);
    }
    public function update(){
        $sponsors = Sponsor::find($_GET["id"]);
        return view('admin.sponsors.update',['sponsors' => $sponsors]);
    }
    public function updated(){
        
        $data = request()->validate([
            'name_sponsor' => 'required',
            'CIF_sponsor' => 'required',
            'sponsor_address' => 'required',
            'home_page' => 'required',
            'logo' => 'image',
            'id' => '',
        ]);
        if(isset($data['logo'])){
            $imagePath = request('logo')->store('uploads/sponsorLogo','public');
            DB::table('sponsors')->where('id', $data['id'])->update([
                'name_sponsor' => $data['name_sponsor'],
                'CIF_sponsor' => $data['CIF_sponsor'],
                'sponsor_address' => $data['sponsor_address'],
                'home_page' => $data['home_page'],
                'logo' => $imagePath,
            ]);
        }
        else{
            DB::table('sponsors')->where('id', $data['id'])->update($data);
        }

        return redirect()->route('llistarSponsors');
         
    }
    public function updateState(Request $request){
        $curses = Sponsor::find($request->id);
        if($curses->status==1){
            DB::table('sponsors')->where('id', $request->id)->update([
                'status' => 0,
            ]);
        }else{
            DB::table('sponsors')->where('id', $request->id)->update([
                'status' => 1,
            ]);
        }
        return redirect()->route('llistarSponsors');
    }
}
