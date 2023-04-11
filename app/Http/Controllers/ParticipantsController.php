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
        $lastOnes=Race::latest()->limit(3)->get();
        $cursesNoExprire=DB::table('races')->whereDate('date_start', '>=', date("Y-m-d"))->where('status',1)->limit(3)->get();
        $cursesExprired=DB::table('races')->whereDate('date_start', '<=', date("Y-m-d"))->where('status',1)->limit(3)->get();
        $curses=DB::table('races')->whereYear('races.date_start', '=', date("Y"))->whereDate('date_start', '<=', date("Y-m-d"))->where('status',1)->get();
        //$participants = DB::table("participants")->join("races","races.id","=","participants.races_id")->whereYear('races.date_start', '=', date("Y"))->whereNotNull("finish_time")->get();
        $punts = ["1000","900","800","700","600","500","400","300","200","100"];
        $resultat = [];
        $sort_array = array();
        foreach($curses as $cursa){
            try{
                $participants = DB::table("participants")->where("races_id",$cursa->id)->whereNotNull("finish_time")->orderBy("finish_time")->limit(10)->get();
                foreach($participants as  $key => $participant){
                    if(in_array($participant->dni, $resultat)){
                        $resultat[$participant->dni][0] += $punts[$key];
                    }
                    else{
                        $resultat += [$participant->dni => [$punts[$key],$participant->dni,$participant->name_participant,$participant->date_birth]];
                    }
                }
                $sort_array = array();
                foreach ($resultat as $key => $value) {
                    $sort_array[$key] = $value[1];
                }
                array_multisort($sort_array, SORT_DESC, $resultat);
            }
            catch(Exception $e){
                var_dump($e->intl_get_error_message());
            }
        }
        return view("general.principal",['cursesNoExprire' => $cursesNoExprire,'cursesExprired' => $cursesExprired, 'lastOnes' => $lastOnes, 'resultat' => $resultat]);
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
if (!alert("Aquest Dni ja esta registrat en aquesta cursa!")) {
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