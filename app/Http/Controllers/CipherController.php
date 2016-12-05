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

    //トークンからユーザーidを返す
    public function token_getid($token){
        if($this->token_check($token)){
            $userinfo = DB::table('users')->select('id')
                ->where([['access_token','=',$token]])
                ->get();
            $userinfo = (array)$userinfo[0];
            $id = $userinfo['id'];

            return $id;
        }else{
            return false;
        }
    }

    //トークンが存在する検査する
    public function token_check($token){

        $flag = DB::table('users')->where([['access_token','=',$token]])
            ->count();

        if ($flag == 1) {
            return true;
        }else{
            //エラーメッセージを返す
            $error = "トークンが正しくありません";
            return false;
        }
    }

    //トークンからユーザー情報を返す
    public function token_profile(){

        if(!isset($_POST['key'])){
            $error = 'キーがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_POST['key'];

        if($this->keycheck($key,1)){
            if(!isset($_POST['token'])){
                $error = 'トークンがありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $token = $_POST['token'];

            if($this->token_check($token)){
                $userinfo = DB::table('users')->select('name','email','age','sex','hobbies_id')
                    ->where([['access_token','=',$token]])
                    ->get();
                $userinfo = (array)$userinfo[0];

                //JSON
                $return_array = array("Type"=>"Profile",);
                $items_array = array();

                $item_array = array("Item"=>$userinfo);

                $items_array = array_merge($items_array,array($item_array));

                $return_array = array_merge($return_array,array("Items"=>$items_array));

                //返却
                return json_encode($return_array,256);
            }else{
                $error = 'トークンが正しくありません';
                return json_encode($error,JSON_UNESCAPED_UNICODE);
            }
        }else{
            $error = 'キーが正しくありません';
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }

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

            //トークンの重複チェック
            $flag = DB::table('users')->where([['access_token','=',$str]])
                ->count();

            if($flag == 0){
                $check = false;
            }
        }

        return $str;
    }

    //登録してトークンを返す
    public function apiregister(){

        if(!isset($_POST['key'])){
            $error = 'キーがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }

        $key = $_POST['key'];
        if($this->keycheck($key,1)){
            if(!isset($_POST['name'])){
                $error = '名前がありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $name = $_POST['name'];

            if(!isset($_POST['email'])){
                $error = 'メールアドレスがありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $email = $_POST['email'];

            if(!isset($_POST['password'])){
                $error = 'パスワードがありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $password = $_POST['password'];

            if(!isset($_POST['age'])){
                $error = '年代がありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $age = $_POST['age'];

            if(!isset($_POST['sex'])){
                $error = '性別がありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $sex = $_POST['sex'];

            if(!isset($_POST['hobbies_id'])){
                $error = '趣味がありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $hobbies_id = $_POST['hobbies_id'];

            //ランダムなトークンを生成
            $token = $this->makeRandStr();

            //eメール重複チェック
            $flag = DB::table('users')->where([['email','=',$email]])
                ->count();

            //メールアドレスに重複がなければ登録を実行する
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
                return json_encode($token,JSON_UNESCAPED_UNICODE);
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
    public function authtoken_gen($userinfo){

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
            return json_encode($error,JSON_UNESCAPED_UNICODE);
        }

    }

    //POSTで受け取った端末キーを検証する。
    //受け取ったパラメータでログインできればトークンを発行、登録しトークンを返す
    public function gettoken(){

        if(!isset($_POST['key'])){
            $error = 'キーがありません';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }

        $key = $_POST['key'];

        if($this->keycheck($key,1)){
            if(!isset($_POST['email'])){
                $error = 'メールアドレスがありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $email = $_POST['email'];

            if(!isset($_POST['password'])){
                $error = 'パスワードがありません';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $password = $_POST['password'];

            $userinfo = array('email'=>$email,'password'=>$password);
            return json_encode($this->authtoken_gen($userinfo),JSON_UNESCAPED_UNICODE);
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
