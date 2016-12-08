<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Rank;
use Auth;
use Session;
use App\Genres;

class RankingViewController extends Controller
{

    //ランキング表示
    public function rankView(){

        // ランキング用idをセッションに
        if(isset($_GET['pattern'])){
            Session::put('pattern', (int)htmlspecialchars($_GET['pattern']));
        }

        // goodstypeをセッションに
        if(isset($_GET['getgoodstype'])){
            Session::put('goodstype', (int)htmlspecialchars($_GET['getgoodstype']));
        }

        // ゲストユーザーかつ商品登録をしていない or 登録ユーザーかつ１日１回商品登録をしていないなら商品登録
//        if(Auth::guest() && !Session::get('connect') || !Auth::guest() && !Auth::user()->connect) {
//            return redirect('/register-or-review/');
//        }

        // ランキングパターンid
        $pattern = Session::get('pattern');

        // goodstype
        $goodstype = Session::get('goodstype');

        $rankgoods = Rank::join_goods()->leftjoin_genres()->select_rank()
            ->where_rank($pattern, $goodstype)->orderBy_rank()->get();

        $ranking = array();

        foreach ($rankgoods as $key => $val) {

            //オブジェクトを連想配列へ変換
            $array = json_decode(json_encode($val), true);
            $ranking[] = $array;

        }

        //ゲスト用connectをfalseに
        Session::put('connect', false);

        return view('scene', compact('ranking'));
    }

}