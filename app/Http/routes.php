<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('top');
});

Route::get('/about/', function () {
    return view('about');
});

Route::get('/scene/', function () {
    return view('scene');
});

Route::get('/product-register/', function () {
    return view('product-register');
});

Route::post('/product-register',array('uses'=>'UploadController@postIndex'));


Route::get('/ranking','RankController@ranking');

//管理者以外
Route::group(['middleware' => 'guest:admin'], function () { //←このグループで括る
    Route::get('/admin/login','AdminAuthController@showLoginForm');
    Route::post('/admin/login','AdminAuthController@login');
    Route::post('/admin/password/email', 'AdminPasswordController@sendResetLinkEmail');
    Route::post('/admin/password/reset', 'AdminPasswordController@reset');
    Route::get('/admin/password/reset/{token?}', 'AdminPasswordController@showResetForm');
});
//管理者グループ
Route::group(['middleware' => 'auth:admin'], function () { //←このグループで括る
    Route::get('/admin', 'AdminHomeController@index');
    Route::get('/admin/home','AdminHomeController@index');
    Route::get('/admin/register','AdminHomeController@showRegistrationForm');
    Route::post('/admin/register','AdminHomeController@register');
    Route::get('/admin/profile', 'AdminInfoController@getProfile');
    Route::post('/admin/profile', 'AdminInfoController@postProfile');
});
Route::get('/admin/logout','AdminAuthController@logout');

Route::group(['middleware' => 'guest:user'], function() {
    Route::get('/register','Auth\AuthController@showRegistrationForm');
    ROute::post('/register','Auth\AuthController@register');
    Route::get('/login', 'Auth\AuthController@showLoginForm');
    Route::post('/login', 'Auth\AuthController@login');
    Route::get('/logout', 'Auth\AuthController@logout');
    Route::post('/password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'Auth\PasswordController@reset');
    Route::get('/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
});
Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'UserInfoController@getProfile');
    Route::post('/profile', 'UserInfoController@postProfile');
    Route::group(['prefix' => 'api'], function () {
        // 試し
        Route::resource('userss', 'UsersController@index');
    });
});

Route::get('/home', 'HomeController@index');

//test
