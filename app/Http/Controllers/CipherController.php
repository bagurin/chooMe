<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class CipherController extends Controller
{

    public function index(){
        $flag = $this->keycheck('pcdEhBroxNohtmKoek8iE34hQ6FZYbp','1');

        var_dump($flag);
    }

    //osid ( android:1 )
    public function keycheck($key,$osid){

        $hashkey = 'chihaya';

        $chkey = hash_hmac('sha256',$key,$hashkey);

        $dbkey = DB::table('accesskeys')
            ->select('key')
            ->where([
                ['id','=',$osid],
            ])
            ->get();

        $dbkey = (array)$dbkey[0];
        $dbkey = $dbkey['key'];

        if($chkey == $dbkey){
            return true;
        }else{
            return false;
        }

    }

}
