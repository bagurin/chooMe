<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KanaController extends Controller
{
    var $charset   = 'UTF-8';

    function __construct($charset = 'UTF-8'){
        $this->charset  = $charset;
    }

    // ローマ字に変換
    function to_romaji($str){
        if(@strlen($str)){
            // 半角ｶﾀｶﾅ・全角カタカナ・を全角ひらがなに変換
            // 全角スペースを半角スペースに変換
            // 全角英数を半角英数に変換
            $str = mb_convert_kana($str, "asc", $this->charset);
            $romaji = $this->get_charlist_default();
            $num_arr = array();
            foreach(array_keys($romaji) as $i){
                $num_arr[] = $romaji[$i][4];
            }
            $num_arr = array_unique($num_arr);
            sort($num_arr);
            foreach($num_arr as $num){
                $be = array();
                $af = array();
                foreach($romaji as $x){
                    if($x[4] == $num && $x[0] != 'っ'){ //一旦「っ」を除外
                        $be[] = '/' . preg_quote($x[0],'/') . '/';
                        $af[] = $x[3];
                    }
                }
                if(!empty($be)){
                    $str = preg_replace($be, $af, $str, -1);
                }
            }
            //「っ」の処理
            if(preg_match_all('/([っ]+)([a-z])/',$str,$matches)){
                $keys = array();
                $sort_arr = array();
                foreach(array_keys($matches[0]) as $i){ // 重複を除外
                    if(array_search($matches[0][$i], $keys) === false){
                        $keys[$i]["k"] = $i;
                        $keys[$i]["v"] = $matches[0][$i];
                        $sort_arr[$i]  = strlen($matches[0][$i]);
                    }
                }
                array_multisort($sort_arr, SORT_DESC, $keys); //文字数の多い順でソート
                foreach(array_keys($keys) as $i){
                    $i = $keys[$i]["k"];
                    $tmp = "";
                    for($j=0; $j < mb_strlen($matches[1][$i],$this->charset); $j++){
                        $tmp .= $matches[2][$i];
                    }
                    $tmp .= $matches[2][$i];
                    $str = preg_replace('/'.$matches[0][$i].'/', $tmp, $str, -1);
                }
            }
            //処理から漏れた「っ」を変換
            $str = preg_replace('/っ/', 'xtu', $str, -1);
        }
        $str = $this->kigou_to_hankaku($str);
        return $str;
    }

// ローマ字をカタカナに変換
    function to_kana($str){
        if(@strlen($str)){
            // 全角英字を半角英字に変換
            $str = mb_convert_kana($str, "r", $this->charset);
            //$str = strtolower($str); //大文字を小文字に変換
            //「っ」の処理（母音以外の繰り返し）
            if(preg_match_all('/([bdfghjklmnpqrstvwxyz])\1+/i', $str, $matches)){
                $keys = array();
                $sort_arr = array();
                foreach(array_keys($matches[0]) as $i){ // 重複を除外
                    if(array_search($matches[0][$i], $keys) === false){
                        $keys[$i]["k"] = $i;
                        $keys[$i]["v"] = $matches[0][$i];
                        $sort_arr[$i]  = strlen($matches[0][$i]);
                    }
                }
                array_multisort($sort_arr, SORT_DESC, $keys); //文字数の多い順でソート
                foreach(array_keys($keys) as $i){
                    $i = $keys[$i]["k"];
                    $tmp = "";
                    if(strlen($matches[0][$i]) == 1){
                        $tmp .= "ッ";
                    }else{
                        for($j = 1; $j < strlen($matches[0][$i]); $j++){
                            $tmp .= "ッ";
                        }
                    }
                    $tmp .= $matches[1][$i];
                    $str = preg_replace('/'.$matches[0][$i].'/', $tmp, $str, -1);
                }
            }
            $romaji = $this->get_charlist_default();
            //ローマ字→かな用 変換順序 再設定（ゃゅょっつ優先）
            $romaji[] = array('っ', 'ッ' , 'ｯ', "xtu", 0);
            $romaji[] = array('っ', 'ッ' , 'ｯ', "ltu", 0);
            for($i=0; $i < count($romaji); $i++){
                $romaji[$i][4] = $romaji[$i][4] + 1;
                if(preg_match('/(ゃ|ゅ|ょ|っ|つ)/', $romaji[$i][0]) && $romaji[$i][3] != 'tu'){
                    $romaji[$i][4] = 0;
                }
                /*
                                if($romaji[$i][4] > 0){
                                    foreach($romaji as $x){
                                        if($x[4] == 0 && preg_match('/'.$x[3].'/', $romaji[$i][3])){
                                            $romaji[$i][5] = 0;
                                            break;
                                        }
                                    }
                                }
                */
            }
            $num_arr = array();
            foreach(array_keys($romaji) as $i){
                $num_arr[] = $romaji[$i][4];
            }
            $num_arr = array_unique($num_arr);
            sort($num_arr);
            foreach($num_arr as $num){
                $be = array();
                $af = array();
                foreach($romaji as $x){
                    if($x[4] == $num){
                        $be[] = '/' . preg_quote($x[3],'/') . '/';
                        $af[] = $x[1]; //ローマ字をカタカナに
                    }
                }
                if(!empty($be)){
                    $str = preg_replace($be, $af, $str, -1);
                }
            }
        }
        return $str;
    }

    //全角文字列を半角文字列に変換
    function to_hankaku($str){
        if(@strlen($str)){
            $str = mb_convert_kana($str,"khc",$this->charset);
            $str = $this->kigou_to_hankaku($str);
        }
        return $str;
    }

    //半角記号を全角記号に変換
    function to_zenkaku($str){
        if(@strlen($str)){
            $str = mb_convert_kana($str,"KV",$this->charset);
            $str = $this->kigou_to_zenkaku($str);
        }
        return $str;
    }

    //全角記号を半角記号に変換
    function kigou_to_hankaku($str){
        if(@strlen($str)){
            $str = mb_convert_kana($str,"as",$this->charset);
            $kigou = $this->get_kigoulist_default();
            $zen = array();
            $han = array();
            foreach(array_keys($kigou) as $i){
                if(@strlen($kigou[$i]["zen"])){
                    $zen[] = '/'.preg_quote($kigou[$i]["zen"],'/').'/';
                    $han[] = $kigou[$i]["han"];
                }
            }
            $str = preg_replace($zen, $han, $str, -1);
        }
        return $str;
    }

    //半角記号を全角記号に変換
    function kigou_to_zenkaku($str){
        if(@strlen($str)){
            $str = mb_convert_kana($str,"AS",$this->charset);
            $kigou = $this->get_kigoulist_default();
            $zen = array();
            $han = array();
            foreach(array_keys($kigou) as $i){
                if(@strlen($kigou[$i]["han"])){
                    $zen[] = '/'.preg_quote($kigou[$i]["han"],'/').'/';
                    $han[] = $kigou[$i]["zen"];
                }
            }
            $str = preg_replace($zen, $han, $str, -1);
        }
        return $str;
    }

    function get_charlist_default(){
        $charlist = array();

        $charlist[] = array('あ', 'ア' , 'ｱ', "a", 3);
        $charlist[] = array('い', 'イ' , 'ｲ', "i", 3);
        $charlist[] = array('う', 'ウ' , 'ｳ', "u", 3);
        $charlist[] = array('え', 'エ' , 'ｴ', "e", 3);
        $charlist[] = array('お', 'オ' , 'ｵ', "o", 3);

        $charlist[] = array('ヴぁ', 'ヴァ' , 'ｳﾞｧ', "va", 1);
        $charlist[] = array('ヴぃ', 'ヴィ' , 'ｳﾞｨ', "vi", 1);
        $charlist[] = array('ヴぃ', 'ヴィ' , 'ｳﾞｨﾞ', "vyi", 1);
        $charlist[] = array('ヴ', 'ヴ' , 'ｳﾞ', "vu", 1);
        $charlist[] = array('ヴぇ', 'ヴェ' , 'ｳﾞｪ', "ve", 1);
        $charlist[] = array('ヴぇ', 'ヴェ' , 'ｳﾞｪ', "vye", 1);
        $charlist[] = array('ヴぉ', 'ヴォ' , 'ｳﾞｫ', "vyo", 1);

        $charlist[] = array('ヴゃ', 'ヴャ' , 'ｳﾞｬ', "vya", 1);
        $charlist[] = array('ヴゅ', 'ヴュ' , 'ｳﾞｭ', "vyu", 1);
        $charlist[] = array('ヴょ', 'ヴョ' , 'ｳﾞｮ', "vyo", 1);

        $charlist[] = array('か', 'カ' , 'ｶ', "ka", 2);
        $charlist[] = array('か', 'カ' , 'ｶ', "ca", 2);
        $charlist[] = array('き', 'キ' , 'ｷ', "ki", 2);
        $charlist[] = array('く', 'ク' , 'ｸ', "ku", 2);
        $charlist[] = array('く', 'ク' , 'ｸ', "qu", 2);
        $charlist[] = array('け', 'ケ' , 'ｹ', "ke", 2);
        $charlist[] = array('こ', 'コ' , 'ｺ', "ko", 2);
        $charlist[] = array('こ', 'コ' , 'ｺ', "co", 2);

        $charlist[] = array('が', 'ガ' , 'ｶﾞ', "ga", 2);
        $charlist[] = array('ぎ', 'ギ' , 'ｷﾞ', "gi", 2);
        $charlist[] = array('ぐ', 'グ' , 'ｸﾞ', "gu", 2);
        $charlist[] = array('げ', 'ゲ' , 'ｹﾞ', "ge", 2);
        $charlist[] = array('ご', 'ゴ' , 'ｺﾞ', "go", 2);

        $charlist[] = array('きゃ', 'キャ' , 'ｷｬ', "kya", 1);
        $charlist[] = array('きぃ', 'キィ' , 'ｷｨ', "kyi", 1);
        $charlist[] = array('きゅ', 'キュ' , 'ｷｭ', "kyu", 1);
        $charlist[] = array('きぇ', 'キェ' , 'ｷｪ', "kye", 1);
        $charlist[] = array('きょ', 'キョ' , 'ｷｮ', "kyo", 1);

        $charlist[] = array('ぎゃ', 'ギャ' , 'ｷﾞｬ', "gya", 1);
        $charlist[] = array('ぎぃ', 'ギィ' , 'ｷﾞｨ', "gyi", 1);
        $charlist[] = array('ぎゅ', 'ギュ' , 'ｷﾞｭ', "gyu", 1);
        $charlist[] = array('ぎぇ', 'ギェ' , 'ｷﾞｪ', "gye", 1);
        $charlist[] = array('ぎょ', 'ギョ' , 'ｷﾞｮ', "gyo", 1);

        $charlist[] = array('くぁ', 'クァ' , 'ｸｧ', "qa", 1);
        $charlist[] = array('くぁ', 'クァ' , 'ｸｧ', "kwa", 1);
        $charlist[] = array('くぃ', 'クィ' , 'ｸｨ', "qi", 1);
        $charlist[] = array('くぃ', 'クィ' , 'ｸｨ', "qwi", 1);
        $charlist[] = array('くぃ', 'クィ' , 'ｸｨ', "kwi", 1);
        $charlist[] = array('くぅ', 'クゥ' , 'ｸｩ', "kwu", 1);
        $charlist[] = array('くぇ', 'クェ' , 'ｸｪ', "qe", 1);
        $charlist[] = array('くぇ', 'クェ' , 'ｸｪ', "qwe", 1);
        $charlist[] = array('くぉ', 'クォ' , 'ｸｫ', "qo", 1);
        $charlist[] = array('くぉ', 'クォ' , 'ｸｫ', "kwo", 1);

        $charlist[] = array('くゎ', 'クヮ' , 'ｸｧ', "qwa", 1); // ｧ?
        $charlist[] = array('くゎ', 'クヮ' , 'ｸｧ', "kwa", 1); // ｧ?

        $charlist[] = array('ぐゎ', 'グヮ' , 'ｸﾞｧ', "gwa", 1); // ｧ?
        $charlist[] = array('ぐぃ', 'グィ' , 'ｸﾞｨ', "gwi", 1);
        $charlist[] = array('ぐぅ', 'グゥ' , 'ｸﾞｩ', "gwu", 1);
        $charlist[] = array('ぐぇ', 'グェ' , 'ｸﾞｪ', "gwe", 1);
        $charlist[] = array('ぐぉ', 'グォ' , 'ｸﾞｫ', "gwo", 1);

        $charlist[] = array('さ', 'サ' , 'ｻ', "sa", 2);
        $charlist[] = array('し', 'シ' , 'ｼ', "shi", 2);
        $charlist[] = array('し', 'シ' , 'ｼ', "si", 2);
        $charlist[] = array('す', 'ス' , 'ｽ', "su", 2);
        $charlist[] = array('せ', 'セ' , 'ｾ', "se", 2);
        $charlist[] = array('そ', 'ソ' , 'ｿ', "so", 2);

        $charlist[] = array('しゃ', 'シャ' , 'ｼｬ', "sha", 1);
        $charlist[] = array('しゃ', 'シャ' , 'ｼｬ', "sya", 1);
        $charlist[] = array('しゅ', 'シュ' , 'ｼｭ', "shu", 1);
        $charlist[] = array('しゅ', 'シュ' , 'ｼｭ', "syu", 1);
        $charlist[] = array('しぇ', 'シェ' , 'ｼｪ', "she", 1);
        $charlist[] = array('しぇ', 'シェ' , 'ｼｪ', "sye", 1);
        $charlist[] = array('しょ', 'ショ' , 'ｼｮ', "sho", 1);
        $charlist[] = array('しょ', 'ショ' , 'ｼｮ', "syo", 1);

        $charlist[] = array('ざ', 'ザ' , 'ｻﾞ', "za", 2);
        $charlist[] = array('じ', 'ジ' , 'ｼﾞ', "zi", 2);
        $charlist[] = array('じ', 'ジ' , 'ｼﾞ', "ji", 2);
        $charlist[] = array('ず', 'ズ' , 'ｽﾞ', "zu", 2);
        $charlist[] = array('ぜ', 'ゼ' , 'ｾﾞ', "ze", 2);
        $charlist[] = array('ぞ', 'ゾ' , 'ｿﾞ', "zo", 2);

        $charlist[] = array('じゃ', 'ジャ' , 'ｼﾞｬ', "ja", 1);
        $charlist[] = array('じゃ', 'ジャ' , 'ｼﾞｬ', "zya", 1);
        $charlist[] = array('じゃ', 'ジャ' , 'ｼﾞｬ', "jya", 1);
        $charlist[] = array('じぃ', 'ジィ' , 'ｼﾞｨ', "zyi", 1);
        $charlist[] = array('じぃ', 'ジィ' , 'ｼﾞｨ', "jyi", 1);
        $charlist[] = array('じゅ', 'ジュ' , 'ｼﾞｭ', "ju", 1);
        $charlist[] = array('じゅ', 'ジュ' , 'ｼﾞｭ', "zyu", 1);
        $charlist[] = array('じゅ', 'ジュ' , 'ｼﾞｭ', "jyu", 1);
        $charlist[] = array('じぇ', 'ジェ' , 'ｼﾞｪ', "je", 1);
        $charlist[] = array('じぇ', 'ジェ' , 'ｼﾞｪ', "zye", 1);
        $charlist[] = array('じぇ', 'ジェ' , 'ｼﾞｪ', "jye", 1);
        $charlist[] = array('じょ', 'ジョ' , 'ｼﾞｮ', "jo", 1);
        $charlist[] = array('じょ', 'ジョ' , 'ｼﾞｮ', "zyo", 1);
        $charlist[] = array('じょ', 'ジョ' , 'ｼﾞｮ', "jyo", 1);

        $charlist[] = array('た', 'タ' , 'ﾀ', "ta", 2);
        $charlist[] = array('ち', 'チ' , 'ﾁ', "chi", 2);
        $charlist[] = array('ち', 'チ' , 'ﾁ', "ti", 2);
        $charlist[] = array('つ', 'ツ' , 'ﾂ', "tsu", 2);
        $charlist[] = array('つ', 'ツ' , 'ﾂ', "tu", 2);
        $charlist[] = array('て', 'テ' , 'ﾃ', "te", 2);
        $charlist[] = array('と', 'ト' , 'ﾄ', "to", 2);

        $charlist[] = array('ちゃ', 'チャ' , 'ﾁｬ', "cha", 1);
        $charlist[] = array('ちゃ', 'チャ' , 'ﾁｬ', "tya", 1);
        $charlist[] = array('ちゃ', 'チャ' , 'ﾁｬ', "cya", 1);
        $charlist[] = array('ちぃ', 'チィ' , 'ﾁｨ', "tyi", 1);
        $charlist[] = array('ちぃ', 'チィ' , 'ﾁｨ', "cyi", 1);
        $charlist[] = array('ちゅ', 'チュ' , 'ﾁｭ', "chu", 1);
        $charlist[] = array('ちゅ', 'チュ' , 'ﾁｭ', "tyu", 1);
        $charlist[] = array('ちゅ', 'チュ' , 'ﾁｭ', "cyu", 1);
        $charlist[] = array('ちぇ', 'チェ' , 'ﾁｪ', "che", 1);
        $charlist[] = array('ちぇ', 'チェ' , 'ﾁｪ', "tye", 1);
        $charlist[] = array('ちぇ', 'チェ' , 'ﾁｪ', "cye", 1);
        $charlist[] = array('ちょ', 'チョ' , 'ﾁｮ', "cho", 1);
        $charlist[] = array('ちょ', 'チョ' , 'ﾁｮ', "tyo", 1);
        $charlist[] = array('ちょ', 'チョ' , 'ﾁｮ', "cyo", 1);

        $charlist[] = array('つぁ', 'ツァ' , 'ﾂｧ', "tsa", 1);
        $charlist[] = array('つぃ', 'ツィ' , 'ﾂｨ', "tsi", 1);
        $charlist[] = array('つぇ', 'ツェ' , 'ﾂｪ', "tse", 1);
        $charlist[] = array('つぉ', 'ツォ' , 'ﾂｫ', "tso", 1);

        $charlist[] = array('てゃ', 'テャ' , 'ﾃｬ', "tha", 1);
        $charlist[] = array('てぃ', 'ティ' , 'ﾃｨ', "thi", 1);
        $charlist[] = array('てゅ', 'テュ' , 'ﾃｭ', "thu", 1);
        $charlist[] = array('てぇ', 'テェ' , 'ﾃｪ', "the", 1);
        $charlist[] = array('てょ', 'テョ' , 'ﾃｮ', "tho", 1);

        $charlist[] = array('とぉ', 'トォ' , 'ﾄｫ', "two", 1);
        $charlist[] = array('どぉ', 'ドォ' , 'ﾄﾞｫ', "dwo", 1);

        $charlist[] = array('だ', 'タ' , 'ﾀ', "da", 2);
        $charlist[] = array('ぢ', 'チ' , 'ﾁ', "di", 2);
        $charlist[] = array('づ', 'ヅ' , 'ﾁ', "zu", 2);
        $charlist[] = array('づ', 'ヅ' , 'ﾁ', "du", 2);
        $charlist[] = array('で', 'デ' , 'ﾂ', "de", 2);
        $charlist[] = array('ど', 'ド' , 'ﾃ', "do", 2);

        $charlist[] = array('ぢゃ', 'ヂャ' , 'ﾁﾞｬ', "dya", 1);
        $charlist[] = array('ぢぃ', 'ヂィ' , 'ﾁﾞｨ', "dyi", 1);
        $charlist[] = array('ぢゅ', 'ヂュ' , 'ﾁﾞｭ', "dyu", 1);
        $charlist[] = array('ぢぇ', 'ヂェ' , 'ﾁﾞｪ', "dye", 1);
        $charlist[] = array('ぢょ', 'ヂョ' , 'ﾁﾞｮ', "dyo", 1);

        $charlist[] = array('でゃ', 'デャ' , 'ﾃﾞｬ', "dha", 1);
        $charlist[] = array('でぃ', 'ディ' , 'ﾃﾞｨ', "dhi", 1);
        $charlist[] = array('でゅ', 'デュ' , 'ﾃﾞｭ', "dhu", 1);
        $charlist[] = array('でぇ', 'デェ' , 'ﾃﾞｪ', "dhe", 1);
        $charlist[] = array('でょ', 'デョ' , 'ﾃﾞｮ', "dho", 1);

        $charlist[] = array('な', 'ナ' , 'ﾅ', "na", 2);
        $charlist[] = array('に', 'ニ' , 'ﾆ', "ni", 2);
        $charlist[] = array('ぬ', 'ヌ' , 'ﾇ', "nu", 2);
        $charlist[] = array('ね', 'ネ' , 'ﾈ', "ne", 2);
        $charlist[] = array('の', 'ノ' , 'ﾉ', "no", 2);

        $charlist[] = array('にゃ', 'ニャ' , 'ﾆｬ', "nya", 1);
        $charlist[] = array('にぃ', 'ニィ' , 'ﾆｨ', "nyi", 1);
        $charlist[] = array('にゅ', 'ニュ' , 'ﾆｭ', "nyu", 1);
        $charlist[] = array('にぇ', 'ニェ' , 'ﾆｪ', "nye", 1);
        $charlist[] = array('にょ', 'ニョ' , 'ﾆｮ', "nyo", 1);

        $charlist[] = array('は', 'ハ' , 'ﾊ', "ha", 2);
        $charlist[] = array('ひ', 'ヒ' , 'ﾋ', "hi", 2);
        $charlist[] = array('ふ', 'フ' , 'ﾌ', "fu", 2);
        $charlist[] = array('ふ', 'フ' , 'ﾌ', "hu", 2);
        $charlist[] = array('へ', 'ヘ' , 'ﾍ', "he", 2);
        $charlist[] = array('ほ', 'ホ' , 'ﾎ', "ho", 2);

        $charlist[] = array('ひゃ', 'ヒャ' , 'ﾋｬ', "hya", 1);
        $charlist[] = array('ひぃ', 'ヒィ' , 'ﾋｨ', "hyi", 1);
        $charlist[] = array('ひゅ', 'ヒュ' , 'ﾋｭ', "hyu", 1);
        $charlist[] = array('ひぇ', 'ヒェ' , 'ﾋｪ', "hye", 1);
        $charlist[] = array('ひょ', 'ヒョ' , 'ﾋｮ', "hyo", 1);

        $charlist[] = array('ふぁ', 'ファ' , 'ﾌｧ', "fa", 1);
        $charlist[] = array('ふぃ', 'フィ' , 'ﾌｨ', "fi", 1);
        $charlist[] = array('ふぃ', 'フィ' , 'ﾌｨ', "fyi", 1);
        $charlist[] = array('ふぇ', 'フェ' , 'ﾌｪ', "fe", 1);
        $charlist[] = array('ふぇ', 'フェ' , 'ﾌｪ', "fye", 1);
        $charlist[] = array('ふぉ', 'フォ' , 'ﾌｫ', "fo", 1);

        $charlist[] = array('ふゃ', 'フャ' , 'ﾌｬ', "fya", 1);
        $charlist[] = array('ふゅ', 'フュ' , 'ﾌｭ', "fyu", 1);
        $charlist[] = array('ふょ', 'フョ' , 'ﾌｮ', "fyo", 1);

        $charlist[] = array('ば', 'バ' , 'ﾊﾞ', "ba", 2);
        $charlist[] = array('び', 'ビ' , 'ﾋﾞ', "bi", 2);
        $charlist[] = array('ぶ', 'ブ' , 'ﾌﾞ', "bu", 2);
        $charlist[] = array('べ', 'ベ' , 'ﾍﾞ', "be", 2);
        $charlist[] = array('ぼ', 'ボ' , 'ﾎﾞ', "bo", 2);

        $charlist[] = array('びゃ', 'ビャ' , 'ﾋﾞｬ', "bya", 1);
        $charlist[] = array('びぃ', 'ビィ' , 'ﾋﾞｨ', "byi", 1);
        $charlist[] = array('びゅ', 'ビュ' , 'ﾋﾞｭ', "byu", 1);
        $charlist[] = array('びぇ', 'ビェ' , 'ﾋﾞｪ', "bye", 1);
        $charlist[] = array('びょ', 'ビョ' , 'ﾋﾞｮ', "byo", 1);

        $charlist[] = array('ぶゃ', 'ブャ' , 'ﾌﾞｬ', "vya", 1);
        $charlist[] = array('ぶぃ', 'ブィ' , 'ﾌﾞｨ', "vyi", 1);
        $charlist[] = array('ぶゅ', 'ブュ' , 'ﾌﾞｭ', "vyu", 1);
        $charlist[] = array('ぶぇ', 'ブェ' , 'ﾌﾞｪ', "vye", 1);
        $charlist[] = array('ぶょ', 'ブョ' , 'ﾌﾞｮ', "vyo", 1);

        $charlist[] = array('ぱ', 'パ' , 'ﾊﾟ', "pa", 2);
        $charlist[] = array('ぴ', 'ピ' , 'ﾋﾟ', "pi", 2);
        $charlist[] = array('ぷ', 'プ' , 'ﾌﾟ', "pu", 2);
        $charlist[] = array('ぺ', 'ペ' , 'ﾍﾟ', "pe", 2);
        $charlist[] = array('ぽ', 'ポ' , 'ﾎﾟ', "po", 2);

        $charlist[] = array('ぴゃ', 'ピャ' , 'ﾋﾟｬ', "pya", 1);
        $charlist[] = array('ぴぃ', 'ピィ' , 'ﾋﾟｨ', "pyi", 1);
        $charlist[] = array('ぴゅ', 'ピュ' , 'ﾋﾟｭ', "pyu", 1);
        $charlist[] = array('ぴぇ', 'ピェ' , 'ﾋﾟｪ', "pye", 1);
        $charlist[] = array('ぴょ', 'ピョ' , 'ﾋﾟｮ', "pyo", 1);

        $charlist[] = array('ま', 'マ' , 'ﾏ', "ma", 2);
        $charlist[] = array('み', 'ミ' , 'ﾐ', "mi", 2);
        $charlist[] = array('む', 'ム' , 'ﾑ', "mu", 2);
        $charlist[] = array('め', 'メ' , 'ﾒ', "me", 2);
        $charlist[] = array('も', 'モ' , 'ﾓ', "mo", 2);

        $charlist[] = array('みゃ', 'ミャ' , 'ﾐｬ', "mya", 1);
        $charlist[] = array('みぃ', 'ミィ' , 'ﾐｨ', "myi", 1);
        $charlist[] = array('みゅ', 'ミュ' , 'ﾐｭ', "myu", 1);
        $charlist[] = array('みぇ', 'ミェ' , 'ﾐｪ', "mye", 1);
        $charlist[] = array('みょ', 'ミョ' , 'ﾐｮ', "myo", 1);

        $charlist[] = array('や', 'ヤ' , 'ﾔ', "ya", 2);
        $charlist[] = array('ゆ', 'ユ' , 'ﾕ', "yu", 2);
        $charlist[] = array('よ', 'ヨ' , 'ﾖ', "yo", 2);

        $charlist[] = array('ら', 'ラ' , 'ﾗ', "ra", 2);
        $charlist[] = array('り', 'リ' , 'ﾘ', "ri", 2);
        $charlist[] = array('る', 'ル' , 'ﾙ', "ru", 2);
        $charlist[] = array('れ', 'レ' , 'ﾚ', "re", 2);
        $charlist[] = array('ろ', 'ロ' , 'ﾛ', "ro", 2);

        $charlist[] = array('ら', 'ラ' , 'ﾗ', "la", 2);
        $charlist[] = array('り', 'リ' , 'ﾘ', "li", 2);
        $charlist[] = array('る', 'ル' , 'ﾙ', "lu", 2);
        $charlist[] = array('れ', 'レ' , 'ﾚ', "le", 2);
        $charlist[] = array('ろ', 'ロ' , 'ﾛ', "lo", 2);

        $charlist[] = array('りゃ', 'リャ' , 'ﾘｬ', "rya", 1);
        $charlist[] = array('りぃ', 'リィ' , 'ﾘｨ', "ryi", 1);
        $charlist[] = array('りゅ', 'リュ' , 'ﾘｭ', "ryu", 1);
        $charlist[] = array('りぇ', 'リェ' , 'ﾘｪ', "rye", 1);
        $charlist[] = array('りょ', 'リョ' , 'ﾘｮ', "ryo", 1);

        $charlist[] = array('わ', 'ワ' , 'ﾜ', "wa", 2);
        $charlist[] = array('を', 'ヲ' , 'ｦ', "wo", 2);
        $charlist[] = array('ん', 'ン' , 'ﾝ', "nn", 2);

        $charlist[] = array('いぇ', 'イェ' , 'ｲｪ', "ye", 2);
        $charlist[] = array('ゐ', 'イ' , 'ｲ', "i", 2);
        $charlist[] = array('ゑ', 'エ' , 'ｴ', "e", 2);

        $charlist[] = array('ん', 'ン' , 'ﾝ', "n", 3);

        $charlist[] = array('ぁ', 'ァ' , 'ｧ', "xa", 3);
        $charlist[] = array('ぁ', 'ァ' , 'ｧ', "la", 3);
        $charlist[] = array('ぃ', 'ィ' , 'ｨ', "xi", 3);
        $charlist[] = array('ぃ', 'ィ' , 'ｨ', "li", 3);
        $charlist[] = array('ぅ', 'ゥ' , 'ｩ', "xu", 3);
        $charlist[] = array('ぅ', 'ゥ' , 'ｩ', "lu", 3);
        $charlist[] = array('ぇ', 'ェ' , 'ｪ', "xe", 3);
        $charlist[] = array('ぇ', 'ェ' , 'ｪ', "le", 3);
        $charlist[] = array('ぉ', 'ォ' , 'ｫ', "xo", 3);
        $charlist[] = array('ぉ', 'ォ' , 'ｫ', "lo", 3);

        $charlist[] = array('ゃ', 'ャ' , 'ｬ', "xya", 3);
        $charlist[] = array('ゃ', 'ャ' , 'ｬ', "lya", 3);
        $charlist[] = array('ゅ', 'ュ' , 'ｭ', "xyu", 3);
        $charlist[] = array('ゅ', 'ュ' , 'ｭ', "lyu", 3);
        $charlist[] = array('ょ', 'ョ' , 'ｮ', "xyo", 3);
        $charlist[] = array('ょ', 'ョ' , 'ｮ', "lyo", 3);

        $charlist[] = array('ゎ', 'ヮ' , 'ｧ', "lwa", 3);
        $charlist[] = array('ゎ', 'ヮ' , 'ｧ', "xwa", 3);

        return $charlist;
    }

    function get_kigoulist_default(){
        $kigoulist = array(
            array("zen"=>'＆',"han"=>'&')
        ,array("zen"=>'＃',"han"=>'#')
        ,array("zen"=>'＄',"han"=>'$')
        ,array("zen"=>'；',"han"=>';')
        ,array("zen"=>'％',"han"=>'%')
        ,array("zen"=>'！',"han"=>'!')
        ,array("zen"=>'”',"han"=>'"')
        ,array("zen"=>'’',"han"=>'\'')
        ,array("zen"=>'（',"han"=>'(')
        ,array("zen"=>'）',"han"=>')')
        ,array("zen"=>'＊',"han"=>'*')
        ,array("zen"=>'＋',"han"=>'+')
        ,array("zen"=>'，',"han"=>',')
        ,array("zen"=>'－',"han"=>'-')
        ,array("zen"=>'．',"han"=>'.')
        ,array("zen"=>'／',"han"=>'/')
        ,array("zen"=>'：',"han"=>':')
        ,array("zen"=>'＜',"han"=>'<')
        ,array("zen"=>'＝',"han"=>'=')
        ,array("zen"=>'＞',"han"=>'>')
        ,array("zen"=>'？',"han"=>'?')
        ,array("zen"=>'＠',"han"=>'@')
        ,array("zen"=>'［',"han"=>'[')
        ,array("zen"=>'￥',"han"=>'\\')
        ,array("zen"=>'］',"han"=>']')
        ,array("zen"=>'＾',"han"=>'^')
        ,array("zen"=>'＿',"han"=>'_')
        ,array("zen"=>'｀',"han"=>'`')
        ,array("zen"=>'｛',"han"=>'{')
        ,array("zen"=>'｜',"han"=>'|')
        ,array("zen"=>'｝',"han"=>'}')
        ,array("zen"=>'～',"han"=>'~')

        ,array("zen"=>'、',"han"=>',')
        ,array("zen"=>'。',"han"=>'.')

        ,array("zen"=>'【',"han"=>'≪')
        ,array("zen"=>'】',"han"=>'≫')
        ,array("zen"=>'「',"han"=>'[')
        ,array("zen"=>'」',"han"=>']')
        ,array("zen"=>'→',"han"=>'->')
        ,array("zen"=>'←',"han"=>'<-')


        );
        return $kigoulist;
    }
}
