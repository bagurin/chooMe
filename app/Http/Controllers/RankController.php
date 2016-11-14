<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;
use App\Rank;
use App\Getgoods;

class RankController extends Controller
{
    public function index(){
        return view('home');
    }

    //追加メソッド
    public function rankView(){

        //ランキングテーブル全取得
        $rank_table = Rank::all();
        //商品テーブル全取得
        $getgoods_table = Getgoods::all();

        foreach($rank_table as $rank){
            foreach ($getgoods_table as $getgoods) {
                if($rank['getgoods_id'] == $getgoods['id']){
                    $ranking[] = array('name' => $getgoods['name'], 'image' => $getgoods['image'], 'genres' => $getgoods['genres_id'], 'scenes' => 1, 'rate' => $rank['average_rate'], 'url' => $getgoods['url']);
                    break;
                }
            }
            if($rank['ranking_no'] == 20){
                break;
            }
        }

        dd($ranking);

        return view('scene', $ranking);

    }

    public function ranking()
    {

        //取得してきたランキング情報を分解して返す
        function getiac($ans){

            //オブジェクトで返却されるので配列に変換する。([0]なのは１件しか格納されていない為)
            $con = (array)$ans[0];

            $id = (int)$con["getgoods_id"];
            $average = (float)$con["ave"];
            $count = (int)$con["count"];

            //スコアメソッドでスコアを算出して格納する
            $result = score($average,$count);

            $info = array('id' => $id,'score' => $result,'ave' =>$average);

            return $info;
        }

        //patternsテーブルからage,hobbyのidを取得する
        function gettid($patternid){
            $tid = DB::table('patterns')
                ->select(DB::raw('t_id'))
                ->where([
                    ['id','=',$patternid],
                ])
                ->get();

            //オブジェクト→配列へ変換
            $con = (array)$tid[0];
            //キー名:t_idの値を取得
            $id = $con["t_id"];

            return $id;
        }

        //平均と数からスコアを計算
        function score($ave,$count){
            $ans = 0.0;

            if($ave >= 3){
                $ans = (($ave-3)**2) * log($count);
            }else{
                $ans = -(($ave-3)**2) * log($count);
            }

            //少数第四位を四捨五入する
            return round($ans,3);
        }

        //ランクテーブルに格納する(降順された２０件の配列,パターンid)
        function sendranks($array,$pattern){

            //ランキングNoを1~20まで変化させる変数
            $rank = 1;

            foreach($array as $value){

                DB::table('ranks')
                    ->where([
                        ['ranking_no','=',$rank],
                        ['patterns_id','=',$pattern],
                    ])
                    ->update(['getgoods_id' => $value['id'],'score' => $value['score'],'average_rate' => $value['ave'],'updated_at' => date("Y-m-d H:i:s")]);

                $rank += 1;
            }

        }

        //配列→連想配列→値の降順 でソートする
        function sortArrayByKey( &$array, $sortKey, $sortType = SORT_DESC ) {

            $tmpArray = array();
            foreach ( $array as $key => $row ) {
                $tmpArray[$key] = $row[$sortKey];
            }
            array_multisort( $tmpArray, $sortType, $array );
            unset( $tmpArray );
        }

        //ユーザー情報ランキング（change = 性別:1 年代:2 趣味:3）
        function usersrank($allid,$change,$pattern){

            $array = array();

            //whereの値
            $val = "";

            //whereカラム名
            $com = "";

            //$changeが1なら$pattern値に応じて性別を$valへ格納する
            //$changeが1以外なら$valへ$patternを格納する
            if($change == 1){

                $com = 'users.sex';

                if($pattern == 1){
                    $val = '男';
                }else{
                    $val = '女';
                }

            }elseif($change == 2){

                $com = 'users.age';
                $val = gettid($pattern);

            }elseif($change == 3){

                $com = 'users.hobbies_id';
                $val = gettid($pattern);
            }


            foreach($allid as $value){

                $ans = DB::table('reviews')
                    ->join('users','users.id','=','reviews.users_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com,'=',$val],
                        ['reviews.getgoods_id','=',$value],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                $array = array_merge($array,array($info));

            }

            //降順へソート
            sortArrayByKey($array,'score');

            //20件以上のデータを削除する。(ランキング20以内のみ残す)
            $array = array_slice($array,0,20,true);

            //ランキングを格納するメソッドを実行する
            sendranks($array,$pattern);

        }

        //ジャンルランキング
        function genresrank($allid,$pattern){

            $array = array();

            $genre = gettid($pattern);

            foreach($allid as $value){

                $ans = DB::table('reviews')
                    ->join('getgoods','getgoods.id','=','reviews.getgoods_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        ['getgoods.genres_id','=',$genre],
                        ['reviews.getgoods_id','=',$value],
                    ])
                    ->get();

                $info = getiac($ans);

                $array = array_merge($array,array($info));

            }

            sortArrayByKey($array,'score');

            $array = array_slice($array,0,20,true);

            sendranks($array,$pattern);
        }


        //シーンランキング
        function scenesrank($allid,$pattern){

            $array = array();

            $scene = gettid($pattern);

            foreach($allid as $value){

                $ans = DB::table('reviews')
                    ->join('scenes','scenes.id','=','reviews.scenes_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        ['scenes.id','=',$scene],
                        ['reviews.getgoods_id','=',$value],
                    ])
                    ->get();

                $info = getiac($ans);

                $array = array_merge($array,array($info));

            }

            sortArrayByKey($array,'score');

            $array = array_slice($array,0,20,true);

            sendranks($array,$pattern);
        }


        //商品id全件取得
        $all = DB::table('getgoods')
            ->select('id')->get();

        //オブジェクトのカウント
        $count = count($all);

        //全ての商品idを格納する配列の宣言
        $allid  = array();

        //商品idの数だけオブジェクトを配列に変換して格納
        for($i = 0;$i < $count;$i++){

            $parts = (array)$all[$i];
            $parts = $parts['id'];

            array_push($allid,$parts);

        }

        //ここから↓でusersrank,genresrank,scenesrankを実行する
        //引数は$allidとpatternsテーブルのidが必須である。










        //return \Response::json($ans);

//        $users =Auth::user();
//
//        return \Response::json($users);
//
//        $query = User::query();
//
//        $users = DB::table('users')->get();
//
//
//        return \Response::json($users);

    }


}
