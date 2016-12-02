<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Getgoods;
use App\Rank;
use App\Http\Controllers\CipherController as Cipher;

class ApiController extends Controller
{

    //return json_encode($this->authcheck($userinfo),JSON_UNESCAPED_UNICODE);
    //これをつかって返す

    // apiプロフィール用
    public function apiProfile(){

//        $cipher = new Cipher();
//        $osid = 1;
//
//        // トークン
//        if(!isset($_GET['token'])){
//            $error = 'tokenがありません。';
//            return json_encode($error,JSON_UNESCAPED_UNICODE);
//        }
//        $pattern = $_GET['pattern'];
//
//        // キー
//        if(!isset($_GET['key'])){
//            $error = 'キーがありません。';
//            return json_encode($error,JSON_UNESCAPED_UNICODE);
//        }
//        $key = $_GET['key'];
//
//        if($cipher->keycheck($key,$osid)){
//            return json_encode($userInfo ,JSON_UNESCAPED_UNICODE);
//        }
//
//        $error = 'キーが正しくありません。';
//        return json_encode($error ,JSON_UNESCAPED_UNICODE);
    }

    // apiランキング用
    public function apiRanking(){

        $cipher = new Cipher();
        $osid = 1;

        // ランキングパターンid
        if(!isset($_GET['pattern'])){
            $error = 'patternIdがありません。';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }
        $pattern = $_GET['pattern'];

        // goodstype
        if(!isset($_GET['goodstype'])){
            $error = 'goodsTypeがありません。';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }
        $goodstype = $_GET['goodstype'];

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if($cipher->keycheck($key,$osid)){

            // 商品タイプid
//            if(isset($_GET['goodstype'])){
//                $error = 'goodstypeがありません。';
//                return json_encode($error,JSON_UNESCAPED_UNICODE);
//            }
//            $goodstype = $_GET['goodstype'];

            //ランキングテーブル全取得
            $rank_table = Rank::all();
            //商品テーブル全取得
            $getgoods_table = Getgoods::all();
            //ジャンルテーブル
            $genres_table = Genres::all();
            $genres_name = '';
            $ranking = array();

            // ぷーさんが書いたものに修正する

            foreach($rank_table as $rank){
                if($rank['patterns_id'] == $pattern) {
                    if($rank['goodstypes_id'] == $goodstype) {
                        foreach ($getgoods_table as $getgoods) {
                            if ($rank['getgoods_id'] == $getgoods['id']) {
                                foreach ($genres_table as $genres) {
                                    if ($genres['id'] == $getgoods['genres_id']) {
                                        $genres_name = $genres['name'];
                                        break;
                                    }
                                }
//                                $ranking[] = array('ranking_no' => $rank['ranking_no'], 'goods_id' => $getgoods['id'],
//                                    'name' => $getgoods['name'], 'image' => $getgoods['image'],
//                                    'genres' => $genres_name, 'rate' => $rank['average_rate']);
                                $ranking[] = array($rank['ranking_no'] => array('goods_id' => $getgoods['id'],
                                    'name' => $getgoods['name'], 'image' => $getgoods['image'],
                                    'genres' => $genres_name, 'rate' => $rank['average_rate']));
                                break;
                            }
                        }
                    }
                }
            }

            return json_encode($ranking ,JSON_UNESCAPED_UNICODE);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error ,JSON_UNESCAPED_UNICODE);

    }

}
