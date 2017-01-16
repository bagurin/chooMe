<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;

use Auth;
use Validator;

class UserInfoController extends Controller
{
    //
    protected $user;
    public function __construct()
    {
        $this->middleware('auth'); // 認証
        $this->user = Auth::user();
    }

    public function getProfile()
    {
        //変更して下さい
        return view('mypage')->with(['user' => $this->user]);
    }

    public function postProfile(Request $request)
    {

        //必要であれば変更して下さい
        $validator = Validator::make($request->all(), [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|max:4',
            'hobbies_id' => 'required|max:10',
        ]);

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }

        $this->user->update([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'hobbies_id' => $request->input('hobbies_id'),
        ]);

        //変更してください
        return redirect('/mypage');
    }
}
