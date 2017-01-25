<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminAuthController extends Controller
{
    //
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $guard = 'admin';
    protected $redirectTo = '/admin/lapcheck';
    protected $loginView = 'adminlogin';
    protected $redirectAfterLogout = '/adminlogin';

    public function __construct()
    {
        //$this->middleware('guest:admin', ['except' => 'logout']);
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    public function showLoginForm()
    {
        if (view()->exists('admin.authenticate')) {
            return view('admin.authenticate');
        }
        return view('adminlogin');
    }
    public function showRegistrationForm(){
        return view('admin.register');
    }

    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
