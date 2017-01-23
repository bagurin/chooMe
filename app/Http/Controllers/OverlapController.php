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
use App\Overlap;

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

        //全商品ループ
        foreach($all as $val){

            //idとnameを格納
            $id = $val['id'];
            $name = $val['name'];
            //ジャンル名を格納
            $genres = $this->getgenrename($val['genres_id']);
            //イメージパスを格納
            $image = $val['image'];

            //各文字列に変換した結果を配列に格納
            $array = $this->multiconvert($name);
            //類似商品検索結果を格納する配列
            $checkarray = array();

            //検索元商品の重複でないリストを取得する
            $notlist = Overlap::select('not_overlap')
                ->where('goods_id','=',$id)->get()->toArray();

            if(!empty($notlist)){
                $notlist = $notlist[0]['not_overlap'];
                $notlist = explode(',',$notlist);
            }



            //各変換した文字列を一つずつ処理
            foreach($array as $val2){
                //変換した文字列と似た商品名があるか調べる
                $check = getGoods::select('getgoods.id','getgoods.name','genres.name as genres','getgoods.image')
                    ->join('genres', 'genres.id', '=', 'getgoods.genres_id')
                    ->where('getgoods.name', 'like', '%'. $val2 .'%')
                    ->get()
                    ->toArray();

                //元の商品名がある場合は削除する
                foreach($check as $key => $gg){
                    if($gg['name'] == $name){
                        unset($check[$key]);
                    }

                    if(!empty($notlist)){
                        $c_id = strval($gg['id']);
                        if(in_array($c_id,$notlist)){
                            unset($check[$key]);
                        }
                    }
                }

                //調べた結果があれば処理をする
                if(empty($check)){
                    //空
                }else{
                    //添字0に元の商品情報を格納する
                    $checkarray = array_merge($checkarray,array(array('id'=>$id,'name'=>$name,'genres'=>$genres,'image'=>$image)));
                    //検索した類似商品情報を格納
                    foreach($check as $valval){
                        $checkarray = array_merge($checkarray,array($valval));
                    }
                }
            }

            if(empty($checkarray)){
                //空
            }else{
                $checkarray = self::getUniqueArray($checkarray,'id');

                //return_arrayに追加する
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

        //商品画像を削除する
        $image = Getgoods::select('image')
            ->where('id','=',$subid)
            ->get()->toArray();
        $image = $image[0]['image'];
        $image = public_path().$image;
        File::delete($image);

        //商品情報を削除する
        Getgoods::where('id','=',$subid)->delete();

        //重複リストから消す
        Overlap::where('goods_id','=',$subid)->delete();

        return redirect('/test');
    }

    public function notoverlap(){
        if(!isset($_POST['checkid'])){
            $error = 'checkidがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        //base変換された配列が送られてくるので、配列に戻す
        $array = explode(",", base64_decode($_POST['checkid']));
        //配列の0番目がメインの商品なのでmainidに格納する
        $mainid = intval($array[0]);

        //0番目の商品情報を削除する
        array_splice($array, 0, 1);
        $str1 = implode($array, ",");

        $str2 = Overlap::select('not_overlap')
            ->where('goods_id','=',$mainid)->get()->toArray();

        if(!empty($str2)){
            $str2 = $str2[0]['not_overlap'];
            $re_str = $str2 . ',' .$str1;
        }else{
            $re_str = $str1;
        }


        Overlap::updateOrCreate(['goods_id' => $mainid],['not_overlap'=>$re_str]);

        return redirect('/test');
    }

}
