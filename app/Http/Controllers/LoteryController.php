<?php

namespace App\Http\Controllers;

use App\Baziha;
use App\Footballevent;
use App\Premier_league_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoteryController extends Controller
{

    public function lottery(Request $request)
    {


        if (session()->has('eventKey')){
            $eventKey = session('eventKey');
            $rows = [];
            $eventUsers = DB::table('footballevents')
                ->select('userId')
                ->where('eventKey', $eventKey)
                ->get();
            foreach ($eventUsers as $eventUser => $team) {
                $rows[] = $team->userId;
            }

            $team = array();
            $pars = array();
            $count = count($rows);
            $week =0;
            $x=1;


            $c2 = $count/2;



            $hafteha = count($rows) - 1;
            foreach ($rows as $k => $item) {
                $team[$k + 1] = $item;
            }

            $all_team = count($team);
            $k = $all_team / 2;

            $days = range(7, 100, 2); // first halh of season
            $days2 = range(55, 100, 2); // second half


            // Next tours
            for ($i = 2; $i <= $all_team; $i++) {

                $team2 = $team[2];

                for ($y = 2; $y < $all_team; $y++) {
                    $team[$y] = $team[$y + 1];
                }
                $team[$all_team] = $team2;
                for ($j = 1; $j <= $k; $j++) {

                    if($week == $c2) {

                        $x/$c2;
                        $week=0;
                    }

                    $x++;
                    $week++;

                    //$pars[] = $team[$j].'|'.$team[($all_team-$j+1)];
                    $userId[] = $team[($all_team - $j + 1)];



                    $rivalId[] = $team[$j];
                    $pars[] = $team[($all_team - $j + 1)] . ' VS ' . $team[$j];




                    $gameKey = md5(rand(1000, 10000) . time());
                    DB::table('bazihas')->insert(
                        [
                            'id_mihman'=>$team[($all_team - $j + 1)],
                            'id_mizban'=>$team[$j],
                            'kole_hafteh'=>$hafteha,
                            'week'=>$x/$c2,
                            'parent'=> $eventKey,
                            'matchKey'=>$gameKey
                        ]
                    );


                }
            }



            // $hame_baziha = DB::table('baziha')->where('parent',$eventKey)->get();


            // return view('home', compact( 'count', 'hafteha','hame_baziha'));
//            return Redirect::to("home")->withSuccess('Great! Successfully store data in json format in datbase');

        }
    }



    public function ajax_get_hafte() {
        echo 2;
    }

    public function all ($week){

        $selectWeek = DB::table('bazihas')->where(['week',$week])->get();
        ddd($selectWeek);


    }

    public function me ($all,$userId) {
        $new = [];
        $i = 0;

        foreach ($all as $key => $val) {
            $new[$all[$i]] = $all;
            unset($new[$val][$i]);
            $i++;
        }

        $lig = [];
        $do = [];
        foreach ($new as $key => $val) {
            $do[$key] = $val;
        }

        $count = count($all);
        $c = 0;

        $me = [];
        $res = [];
        foreach ($do as $key => $val) {
            $c++;
            if($userId == $key){

                foreach ($val as $k => $v) { ?>

                        <?php $me[$key] = $v; ?>
                    <?php
                    $res[] = $me;
                }

            }
        }
        return $res;
    }
}

/*

 $new = [];
        $i = 0;
        foreach ($all as $key => $val) {
            $new[$i] = $all;
            $i++;
        }
        $b = 0;
        $html = '';
        foreach ($new as $key => $val) {$c = $b + 0; ?>
            <?php $count = count($val); ?>
            <?php if($b % 2 == 0){
                $html .= '<pre>';
                $html .= empty($val[$b]) ? $val[$count + 1 - $b] : $val[$b];
                $html .= ' - ';
                $html .= empty($val[$c]) ? $val[$count + 1 - $c] : $val[$c];
                $html .= '</pre>';
            } ?>

            <?php $b++; }
        return $html;

 */
