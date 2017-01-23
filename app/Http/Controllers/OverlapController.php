<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\KanaController as kana;
use DB;
use App\Getgoods;
use App\Genres;
use App\Review;
use File;
class OverlapController extends Controller
{

    public function multiconvert($name){
        //kana変換インスタンス
        $kana = new kana();

        //半角文字に変換
        $han = $kana->to_hankaku($name);
        //全角文字に変換
        $zen = $kana->to_zenkaku($name);


        //英字以外をひらがなに変換
        $a = mb_convert_kana($name,'Hcr','UTF-8');
        //ローマ字に変換
        $roma = $kana->to_romaji($a);
        //大文字英文字を小文字に
        $komo = mb_strtolower($roma);
        //全角小文字に
        $zenkomo = mb_convert_kana($komo,'RN','UTF-8');

        $oo = mb_strtoupper($komo);
        //全角大文字
        $zenoo = mb_convert_kana($oo,'RN','UTF-8');
        //カタカナに変換
        $kata = $kana->to_kana($komo);
        //半角カタカナ
        $hankata = mb_convert_kana($kata,'hk','UTF-8');
        //ひらがな
        $hira = mb_convert_kana($kata,'HcN','UTF-8');

        $array = array($name,$han,$zen,$roma,$komo,$zenkomo,$oo,$zenoo,$kata,$hankata,$hira);

        return $array;
    }

    public static function getUniqueArray($array, $id)
    {
        $tmp = [];
        $uniqueArray = [];
        foreach ($array as $value){
            if (!in_array($value[$id], $tmp)) {
                $tmp[] = $value[$id];
                $uniqueArray[] = $value;
            }
        }
        return $uniqueArray;
    }

    public function getgenrename($id){
        $name = "";

        $namearray = Genres::select('name')
            ->where('id',$id)
            ->get()
            ->toArray();

        $name = $namearray[0]['name'];

        return $name;
    }

    public function lapcheck(){

        //全商品idを格納する処理
        $all = getGoods::select('id','name','genres_id','image')->get()->toArray();

        //返却する重複リストの配列
        $return_array = array();

        foreach($all as $val){

            $id = $val['id'];
            $name = $val['name'];

            $genres = $this->getgenrename($val['genres_id']);

            $image = $val['image'];

            $array = $this->multiconvert($name);

            $checkarray = array();

            foreach($array as $val2){
                $check = getGoods::select('getgoods.id','getgoods.name','genres.name as genres','getgoods.image')
                    ->join('genres', 'genres.id', '=', 'getgoods.genres_id')
                    ->where('getgoods.name', 'like', '%'. $val2 .'%')
                    ->get()
                    ->toArray();

                if(empty($check)){
                    //空
                }else{
                    if(count($check) > 1){
                        $checkarray = array_merge($checkarray,array(array('id'=>$id,'name'=>$name,'genres'=>$genres,'image'=>$image)));
                        foreach($check as $valval){
                            if($valval['id'] != $id){
                                $checkarray = array_merge($checkarray,array($valval));
                            }
                        }
                    }
                }
            }

            if(empty($checkarray)){
                //空
            }else{
                $checkarray = self::getUniqueArray($checkarray,'id');

                //return_arrayに追加する
                //$return_array = $return_array + array($id => $checkarray);
                $return_array = array_merge($return_array,array($checkarray));
            }
        }

        return view('check',compact('return_array'));
    }

    public function goods_combine(){
        if(!isset($_POST['mainid'])){
            $error = 'mainidがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $mainid = intval($_POST['mainid']);

        if(!isset($_POST['subid'])){
            $error = 'subidがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $subid = intval($_POST['subid']);

        Review::where('getgoods_id',$subid)
            ->update(['getgoods_id'=>$mainid]);

        $image = Getgoods::select('image')
            ->where('id','=',$subid)
            ->get()->toArray();
        $image = $image[0]['image'];
        $image = public_path().$image;

        File::delete($image);
        Getgoods::where('id','=',$subid)->delete();

        return redirect('/test');
    }

}
