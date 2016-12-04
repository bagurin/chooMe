<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Getgoods;
use App\Pattern;
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
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $pattern = $_GET['pattern'];

        // goodstype
        if(!isset($_GET['goodstype'])){
            $error = 'goodsTypeがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $goodstype = $_GET['goodstype'];

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if($cipher->keycheck($key,$osid)){

            $rankgoods = Rank::join_goods()->leftjoin_genres()->select_rank()
            ->where_rank($pattern, $goodstype)->orderBy_rank()->get()->toArray();

            $pattern_name = Pattern::get_name($pattern)->get()->toArray();
            $pname = $pattern_name[0]['name'];


            $return_array = array("Type"=>"Ranking","Pattern"=>$pname);
            $items_array = array();

            foreach ($rankgoods as $val) {
                $item_array = array("Item"=>$val);

                $items_array = array_merge($items_array,array($item_array));
            }

            $return_array = array_merge($return_array,array("Items"=>$items_array));

            return json_encode($return_array, 256);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

}
