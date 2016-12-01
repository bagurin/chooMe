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

    public function show(){
        return view('welcome');
    }

    //ランダムにアクセストークンを生成
    public function makeRandStr($length = 32) {
        static $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';

        $str = '';

        //トークン重複チェックのフラグ
        $check = true;

        //トークンに重複がなければ抜ける
        while($check){

            $str = '';
            for ($i = 0; $i < $length; ++$i) {
                $str .= $chars[mt_rand(0, 61)];
            }

            $flag = DB::table('users')
                ->where([
                    ['access_token','=',$str],
                ])
                ->count();

            if($flag == 0){
                $check = false;
            }
        }

        return $str;
    }

    //登録してトークンを返す
    public function apiregister(){

        $key = $_POST['key'];
        if($this->keycheck($key,1)){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $hobbies_id = $_POST['hobbies_id'];

            $token = $this->makeRandStr();

            $flag = DB::table('users')
                ->where([
                    ['email','=',$email],
                ])
                ->count();

            if($flag == 0){
                DB::table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'age' => $age,
                    'sex' => $sex,
                    'hobbies_id' => $hobbies_id,
                    'connect' => false,
                    'access_token' => $token,
                    'created_at' => date("Y-m-d H:i:s"),
                ]);

                //トークンを返す
                return \Response::json($token);
            }else{

                //エラーメッセージを返す
                $error = '同じemailアドレスは登録できません';
                return json_encode($error,JSON_UNESCAPED_UNICODE);
            }
        }else{
            $error = 'キーが正しくありません';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }

    }

    //ユーザー情報でログインできれば、トークンを生成し、返す
    public function authcheck($userinfo){

        if (Auth::attempt($userinfo)) {

            //ユーザー情報を格納する
            $users =Auth::user();

            //トークンを生成
            $token = $this->makeRandStr();

            //トークンを登録
            DB::table('users')
                ->where([
                    ['email', '=', $users->email],
                ])
                ->update(['access_token' => $token, 'updated_at' => date("Y-m-d H:i:s")]);

            //ログアウト
            Auth::logout();

            //トークンを返す
            return $token;

        }else{
            //エラーメッセージを返す
            $error = "ユーザー情報が正しくありません";
            return $error;
        }

    }

    //POSTで受け取った端末キーを検証する。
    //受け取ったパラメータでログインできればトークンを発行、登録しトークンを返す
    public function gettoken(){

        $key = $_POST['key'];
        //$key = $_GET['key'];

        if($this->keycheck($key,1)){
            $email = $_POST['email'];
            //$email = $_GET['email'];
            $password = $_POST['password'];
            //$password = $_GET['password'];

            $userinfo = array('email'=>$email,'password'=>$password);
            return json_encode($this->authcheck($userinfo),JSON_UNESCAPED_UNICODE);
        }else{
            //エラーメッセージを返す
            $error = 'キーが正しくありません';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }

    }

    //端末キーを検証する
    //osid ( android:1 )
    public function keycheck($key,$osid){

        $hashkey = 'chihaya';

        $chkey = hash_hmac('sha256',$key,$hashkey);

        //DBにある端末キーを取得
        $dbkey = DB::table('accesskeys')
            ->select('key')
            ->where([
                ['id','=',$osid],
            ])
            ->get();

        $dbkey = (array)$dbkey[0];
        $dbkey = $dbkey['key'];

        //DBのキーと送信されたキーが一致すればTrueを返す
        if($chkey == $dbkey){
            return true;
        }else{
            return false;
        }

    }

}
