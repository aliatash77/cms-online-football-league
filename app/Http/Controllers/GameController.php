<?php
namespace App\Http\Controllers;

use App\Baziha;
use App\EventCat;
use App\Footballcup;
use App\Footballevent;
use App\Post;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;

class GameController extends Controller
{
    public function show($id){
        $events = Footballcup::where('category_id',$id)->get();

        return view('client.GameList',compact('events'));
    }

    public function index($id){
        $event = Footballcup::find($id)->first();
        return view('client.GameName',compact('event'));
    }

    public function create(){
        $cats =EventCat::where('parent_id','!=',null)->get();
        return view('admin.events.football.event',compact('cats'));
    }

    public function store(Request $request){
        Footballcup::create($request->all());
        return redirect('/dashboard');
    }

    public function adminIndex(){
        $catNames =EventCat::where('parent_id','!=',null)->get();
        $events = Footballcup::all();
        return view('admin.events.football.EventList',compact('events','catNames'));
    }

    public function delete($id){
        Footballcup::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $cats =EventCat::where('parent_id','!=',null)->get();
        $event = Footballcup::find($id)->first();
        return view('admin.events.football.EditEvent',compact('event','cats'));

    }

    public function update($id,Request $request){
        Footballcup::find($id)->update($request->all());
        return redirect('dashboard/events/index');
    }

    public function grouping($id,$userId){
        $user = User::find($userId);
        $cupInfo = Footballcup::find($id);
        $check = Footballevent::where(['cupId'=>$id])->orderby('id','desc')->first();
        $middleware = Footballevent::where(['userId'=>$userId],['cupId'=>$id],['status','=','1'])->orderby('id','desc')->first();
        $newTicket = $user->tickets - $cupInfo->entryFee;

                if ( $newTicket > 0 || $newTicket == 0 ) {
                    DB::table('users')->where('id', $userId)->update(['tickets' => $newTicket]);
                    if ($middleware->status==1){
                        if ($check->endPoint == 1) {
                        $eventKey = md5(rand(1000, 10000) . time());

                        $number = 1;
                        $startPoint = 1;
                        $endPoint = 0;
                        $success = 1;
                        Footballevent::create(['userId' => $userId, 'userName' => $user->name, 'cupId' => $id,
                            'eventKey' => $eventKey, 'number' => $number, 'capacity' => $cupInfo->capacity,
                            'startPoint' => $startPoint, 'endPoint' => $endPoint
                        ]);

                    }
                        elseif ($check->endPoint == 0 && $check->number + 1 < $check->capacity) {
                        $number = $check->number + 1;
                        $startPoint = 0;
                        $endPoint = 0;
                        $success = 1;

                        Footballevent::create(['userId' => $userId, 'userName' => $user->name, 'cupId' => $id,
                            'eventKey' => $check->eventKey, 'number' => $number, 'capacity' => $cupInfo->capacity,
                            'startPoint' => $startPoint, 'endPoint' => $endPoint
                        ]);
                    }
                        elseif ($check->endPoint == 0 && $check->number + 1 == $check->capacity) {

                        $number = $check->number + 1;
                        $startPoint = 0;
                        $endPoint = 1;


                        Footballevent::create(['userId' => $userId, 'userName' => $user->name, 'cupId' => $id,
                            'eventKey' => $check->eventKey, 'number' => $number, 'capacity' => $cupInfo->capacity,
                            'startPoint' => $startPoint, 'endPoint' => $endPoint,
                        ]);
                        session(['eventKey' => $check->eventKey]);
                        $success = 1;
                        return redirect(action('loteryController@lottery'));


                    }
                } else{

                     echo $error='<script>alert("شما یک لیگ به اتمام نرسیده دارید!")</script>';
                   // return view('errors.403',compact('error'));
                }

                }else{
                    echo $error='<script>alert("اعتبار حساب شما کافی نیست!")</script>';
                    //return view('errors.403',compact('error'));
                }

    }

    public function activeGame($id){

        $activeCup = Footballevent::where('userId',$id)->orderby('id','desc')->first();
        $cupFull = Footballevent::where('eventKey',$activeCup->eventKey)->get();

        $cup = Footballcup::where('id',$activeCup->cupId)->first();



        return view('client.ActiveCompetitions',compact('cup','activeCup','cupFull'));
    }

    public function Mliga(){
        $activeLigaKey = DB::table('footballevents')
            ->select('*')
            ->where('eventKey',function ($query) {
                $query->select('eventKey')
                    ->from('footballevents')
                    ->where('endPoint','1')
                    ->get();
            })
            ->get();

        ddd($activeLigaKey);

        return view('admin.manage.manageLiga');
    }


    public function ajax_get_hafte(Request $request){
        $hafte = $request->all()['hafte'];

        $eventKey = Footballevent::where(['userId'=>Auth::user()->id])->orderby('id','desc')->first();
        $cups = DB::table('bazihas')->where(['parent'=>$eventKey->eventKey,'week'=>1])->get();
        return $cups;
        // view('client.leaguePlan',compact('cups'));

    }


    public function plan(){

        $eventKey = Footballevent::where(['userId'=>Auth::user()->id])->orderby('id','desc')->first();
        $cups = DB::table('bazihas')->where(['parent'=>$eventKey->eventKey,'week'=>1])->get();

        $jadvals = DB::table('footballevents')
            ->where(['eventKey'=>$eventKey->eventKey])
            ->orderBy('point','desc')
            ->orderBy('tafazol','desc')
            ->orderBy('g_zade','desc')
            ->orderBy('g_khorde')
            ->get();


        return view('client.leaguePlan',compact('jadvals','cups'));

    }

    public function resultRegister($id){

        $cups = DB::table('bazihas')->where(['id'=>$id])->first();

        $rival =DB::table('users')->where(['id'=>$cups->id_mihman])->first();

        return view('client.resultRegister',compact('cups','rival'));
    }

    public function StoreResult($id,Request $request){
        Baziha::find($id)->update($request->all());
        Baziha::find($id)->update(['sabt'=>1]);
        return redirect('/');

    }

    public function accept($id){
        Baziha::find($id)->update(['status'=>1]);
        return redirect()->back();
    }

    public function etraz($id){
        Baziha::find($id)->update(['status'=>2]);
        return redirect()->back();
    }

}
