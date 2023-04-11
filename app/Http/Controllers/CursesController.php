<?php
namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Participant;
use App\Models\Gallery;
use App\Models\Insurer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Carbon\Carbon;

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
    public function show(Request $request){

        if($request["buscar"]==null){
            $curses = Race::get();
        }
        else{
            $curses = DB::table('races')->where('description', 'like', '%'.$request["buscar"].'%')->get();
        }
        
        $participants = DB::table('participants')->leftJoin('insurers','participants.insurers_id','insurers.id')->get();
        return view('admin.curses.show',['curses' => $curses,'participants' => $participants]);
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


    public function showResults($idRace){
        $race = Race::find($idRace);
        $currentDate = Carbon::now();
        $images = Gallery::select('*')->where('id_races', $idRace)->paginate(8);
        $data = Participant::select('*')->where('races_id', $idRace)->orderBy('finish_time', 'asc')->get();
        $dataJunior = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '<=', $currentDate->subYears(19)->toDateString())->orderBy('finish_time', 'asc')->get();
        $data20 = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '>=', $currentDate->subYears(20)->toDateString())->where('date_birth' , '<=', $currentDate->subYears(29)->toDateString())->orderBy('finish_time', 'asc')->get();
        $data30 = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '>=', $currentDate->subYears(30)->toDateString())->where('date_birth' , '<=', $currentDate->subYears(39)->toDateString())->orderBy('finish_time', 'asc')->get();
        $data40 = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '>=', $currentDate->subYears(40)->toDateString())->where('date_birth' , '<=', $currentDate->subYears(49)->toDateString())->orderBy('finish_time', 'asc')->get();
        $data50 = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '>=', $currentDate->subYears(50)->toDateString())->where('date_birth' , '<=', $currentDate->subYears(59)->toDateString())->orderBy('finish_time', 'asc')->get();
        $data60 = Participant::select('*')->where('races_id', $idRace)->where('date_birth' , '>=', $currentDate->subYears(60)->toDateString())->orderBy('finish_time', 'asc')->get();

        return view('general.races.showResults',
        [
            'race' => $race,
            'data' => $data,
            'dataJunior' => $dataJunior,
            'data20' => $data20,
            'data30' => $data30,
            'data40' => $data40,
            'data50' => $data50,
            'data60' => $data60,
            'images' => $images
        ]);
    }
    public function search(Request $request){
        $curses = DB::table('races')->where('description', 'like', '%'.$request["buscar"].'%')->orWhere('map_url', 'like', '%'.$request["buscar"].'%')->orWhere('time_start', 'like', '%'.$request["buscar"].'%')->where('status',1)->paginate(8);
        return view('general.search',['curses' => $curses]);
    }
    public function mesActiuFunction(Request $request){
        $curses=DB::table('races')->whereDate('date_start', '>=', date("Y-m-d"))->where('status',1)->paginate(8);
        return view('general.mesActiu',['curses' => $curses]);
    }
    public function mesInactiuFunction(Request $request){
        $curses=DB::table('races')->whereDate('date_start', '<=', date("Y-m-d"))->where('status',1)->paginate(8);
        return view('general.mesInactiu',['curses' => $curses]);
    }
}