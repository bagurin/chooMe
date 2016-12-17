<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PatternController extends Controller
{
    //

    public function patterncheck($pattern){

        $age = $pattern['age'];
        $sex = $pattern['sex'];
        $hobbie = $pattern['hobbie'];
        $scene = $pattern['scene'];
        $genre = $pattern['genre'];

        $pid = 0;

        if($age > 0 and $sex==0 and $hobbie==0 and $scene==0 and $genre==0){
            //年代のみ
            $pid = $age+2;
        }elseif($age==0 and $sex > 0 and $hobbie==0 and $scene==0 and $genre==0){
            //性別のみ
            $pid = $sex;
        }elseif($age==0 and $sex==0 and $hobbie > 0 and $scene==0 and $genre==0){
            //趣味のみ
            $pid = $hobbie + 14;
        }elseif($age==0 and $sex==0 and $hobbie==0 and $scene > 0 and $genre==0){
            //シーンのみ
            $pid = $scene + 30;
        }elseif($age==0 and $sex==0 and $hobbie==0 and $scene==0 and $genre>0){
            //ジャンルのみ
            $pid = $genre + 43;
        }elseif($age > 0 and $sex > 0 and $hobbie==0 and $scene==0 and $genre==0){
            //性別と年代
            if($sex == 1){
                $pid = $age + 58;
            }elseif($sex == 2){
                $pid = $age + 70;
            }
        }elseif($age==0 and $sex > 0 and $hobbie==0 and $scene==1 and $genre==0){
            if($sex == 1){
                $pid = 83;
            }else{
                $pid = 85;
            }
        }elseif($age==0 and $sex > 0 and $hobbie==0 and $scene==3 and $genre==0){
            if($sex == 1){
                $pid = 84;
            }else{
                $pid = 86;
            }
        }elseif($age > 0 and $sex==0 and $hobbie==0 and $scene==1 and $genre==0){
            $pid = $age + 86;
        }elseif($age > 0 and $sex==0 and $hobbie==0 and $scene==3 and $genre==0){
            $pid = $age + 98;
        }elseif($age==0 and $sex > 0 and $hobbie==0 and $scene==0 and $genre > 0){
            if($sex == 1){
                $pid = $genre + 110;
            }else{
                $pid = $genre + 125;
            }
        }elseif($age > 0 and $sex > 0 and $hobbie==0 and $scene==1 and $genre==0){
            if($sex == 1) {
                $pid = $age + 140;
            }else{
                $pid = $age + 152;
            }
        }elseif($age > 0 and $sex > 0 and $hobbie==0 and $scene==3 and $genre==0){
            if($sex == 1){
                $pid = $age + 164;
            }else{
                $pid = $age + 176;
            }
        }elseif($age > 0 and $sex > 0 and $hobbie==0 and $scene==0 and $genre > 0){
            if($sex == 1){
                switch($genre){
                    case 1:
                        $pid = $age + 188;
                        break;
                    case 2:
                        $pid = $age + 200;
                        break;
                    case 3:
                        $pid = $age + 212;
                        break;
                    case 4:
                        $pid = $age + 224;
                        break;
                    case 5:
                        $pid = $age + 236;
                        break;
                    case 6:
                        $pid = $age + 248;
                        break;
                    case 7:
                        $pid = $age + 260;
                        break;
                    case 8:
                        $pid = $age + 272;
                        break;
                    case 9:
                        $pid = $age + 284;
                        break;
                    case 10:
                        $pid = $age + 296;
                        break;
                    case 11:
                        $pid = $age + 308;
                        break;
                    case 12:
                        $pid = $age + 320;
                        break;
                    case 13:
                        $pid = $age + 332;
                        break;
                    case 14:
                        $pid = $age + 344;
                        break;
                    case 15:
                        $pid = $age + 356;
                        break;
                }
            }else{
                switch($genre){
                    case 1:
                        $pid = $age + 368;
                        break;
                    case 2:
                        $pid = $age + 380;
                        break;
                    case 3:
                        $pid = $age + 392;
                        break;
                    case 4:
                        $pid = $age + 404;
                        break;
                    case 5:
                        $pid = $age + 416;
                        break;
                    case 6:
                        $pid = $age + 428;
                        break;
                    case 7:
                        $pid = $age + 440;
                        break;
                    case 8:
                        $pid = $age + 452;
                        break;
                    case 9:
                        $pid = $age + 464;
                        break;
                    case 10:
                        $pid = $age + 476;
                        break;
                    case 11:
                        $pid = $age + 488;
                        break;
                    case 12:
                        $pid = $age + 500;
                        break;
                    case 13:
                        $pid = $age + 512;
                        break;
                    case 14:
                        $pid = $age + 524;
                        break;
                    case 15:
                        $pid = $age + 536;
                        break;
                }
            }
        }else{
            return false;
        }

        return $pid;
    }
}
