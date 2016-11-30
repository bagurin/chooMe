<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class CipherController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function makeRandStr($length = 32) {
        static $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0; $i < $length; ++$i) {
            $str .= $chars[mt_rand(0, 61)];
        }
        return $str;
    }

    public function authcheck($userinfo){

        if (Auth::attempt($userinfo)) {

            $users =Auth::user();

            $token = $this->makeRandStr();

            $check = true;

            while($check){

                $flag = DB::table('users')
                    ->where([
                        ['access_token','=',$token],
                    ])
                    ->count();

                if($flag == 0){
                    $check = false;
                }

            }

            DB::table('users')
                ->where([
                    ['email', '=', $users->email],
                ])
                ->update(['access_token' => $token, 'updated_at' => date("Y-m-d H:i:s")]);

            Auth::logout();

            return $token;

        }else{
            return false;
        }

    }

    public function gettoken(){

        $key = $_POST['key'];

        if($this->keycheck($key,1)){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userinfo = array('email'=>$email,'password'=>$password);
            return \Response::json($this->authcheck($userinfo));
        }

        return false;
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
