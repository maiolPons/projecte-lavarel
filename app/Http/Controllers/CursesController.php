<?php
namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Insurer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursesController extends Controller
{
    public function create(){
        return view("admin.curses.create");
    }
    public function store(){
        //valida el camps
        $data = request()->validate([
            'description' => 'required',
            'unevenness' => 'required',
            'map_url' => 'required',
            'max_people' => 'required',
            'kms' => 'required',
            'cost_price' => 'required',
            'promotion_img' => 'required','image',
            'time_start' => 'required',
            'date_start' => 'required',
        ]);
        //guarda la imatge 
        $imagePath = request('promotion_img')->store('uploads/raceBanner','public');
        //fa l'insert a la base de dades
        Race::create(
            [     
                'description' => $data['description'],
                'unevenness' => $data['unevenness'],
                'map_url' => $data['map_url'],
                'max_people' => $data['max_people'],
                'kms' => $data['kms'],
                'cost_price' => $data['cost_price'],
                'promotion_img' => $imagePath,
                'time_start' => $data['time_start'],
                'date_start' => $data['date_start'],
            ]
        );

        return redirect()->route('crearCurses');
    }
    public function show(){
        $curses = Race::get();
        return view('admin.curses.show',['curses' => $curses]);
    }
    public function update(){
        $curses = Race::find($_GET["id"]);
        return view('admin.curses.update',['curses' => $curses]);
    }
    
    public function updated(){
        
        $data = request()->validate([
            'description' => 'required',
            'unevenness' => 'required',
            'map_url' => 'required',
            'max_people' => 'required',
            'kms' => 'required',
            'cost_price' => 'required',
            'promotion_img' => 'image',
            'time_start' => 'required',
            'date_start' => 'required',
            'id' => '',
        ]);
        if(isset($data['promotion_img'])){
            $imagePath = request('promotion_img')->store('uploads/raceBanner','public');
            DB::table('races')->where('id', $data['id'])->update([
                'description' => $data['description'],
                'unevenness' => $data['unevenness'],
                'map_url' => $data['map_url'],
                'max_people' => $data['max_people'],
                'kms' => $data['kms'],
                'cost_price' => $data['cost_price'],
                'promotion_img' => $imagePath,
                'time_start' => $data['time_start'],
                'date_start' => $data['date_start'],
            ]);
        }
        else{
            DB::table('races')->where('id', $data['id'])->update($data);
        }

        return redirect()->route('llistarCurses');
         
    }
    public function updateState(Request $request){
        $curses = Race::find($request->id);
        if($curses->status==1){
            DB::table('races')->where('id', $request->id)->update([
                'status' => 0,
            ]);
        }else{
            DB::table('races')->where('id', $request->id)->update([
                'status' => 1,
            ]);
        }
        return redirect()->route('llistarCurses'); 
    }
}
