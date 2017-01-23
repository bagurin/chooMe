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

Route::get('/ranking/', 'RankingViewController@rankView');

Route::group(['middleware' => 'guest:admin'], function () { //←このグループで括る
    Route::get('/admin/login','AdminAuthController@showLoginForm');
    Route::post('/admin/login','AdminAuthController@login');
    Route::post('/admin/password/email', 'AdminPasswordController@sendResetLinkEmail');
    Route::post('/admin/password/reset', 'AdminPasswordController@reset');
    Route::get('/admin/password/reset/{token?}', 'AdminPasswordController@showResetForm');
});
Route::group(['middleware' => 'auth:admin'], function () { //←このグループで括る
    Route::get('/admin', 'AdminHomeController@index');
    Route::get('/admin/home','AdminHomeController@index');
    Route::get('/admin/register','AdminHomeController@showRegistrationForm');
    Route::post('/admin/register','AdminHomeController@register');
    Route::get('/admin/profile', 'AdminInfoController@getProfile');
    Route::post('/admin/profile', 'AdminInfoController@postProfile');
    //未実装（管理者ログインが実装され次第実装）
    Route::get('/admin/lapcheck','OverlapController@lapcheck');
    Route::post('/admin/lapcheck','OverlapController@goods_combine');
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
});

Route::get('/home', 'HomeController@index');

// まーしー追加
Route::get('/register-and-review/', function(){
    return view('register-and-review');
});
Route::get('/register-or-review/', function(){
    return view('register-or-review');
});
Route::post('/register-and-review/', 'UploadController@postIndex');
Route::post('/register/', 'UploadController@postGoods');
Route::post('/review/', 'ReviewController@reviewRank');
Route::get('/review/{name}', 'ReviewController@viewReview');
Route::post('/register-or-review/', 'ReviewController@getData');
Route::get('/presearch/', 'ReviewController@searchWord');
Route::get('/search-result/', 'ReviewController@viewData');
Route::get('/search/', function(){
    return view('search');
});
Route::post('/check/', 'UploadController@nameCheck');
Route::post('/temp/', 'UploadController@imageTemp');
Route::get('/single/', 'RankingViewController@goodsView');
Route::post('/single', 'ReviewController@review');
Route::get('/imageDel/', 'UploadController@imageDel');
Route::get('/getgenres/', 'RankingViewController@getGenre');
Route::get('/bygenres/', 'RankingViewController@genreGoods');

//おでん追加
Route::get('/p-register/', function(){
    return view('p-register');
});
Route::get('/p-register2/', function(){
    return view('p-register2');
});
Route::get('/mypage', 'UserInfoController@getProfile');
Route::post('/mypage', 'UserInfoController@postProfile');
//api
Route::group(['prefix' => '/api/1.0/'], function () {
    //ランキング
    Route::get('ranking/', 'ApiController@apiRanking');
    //ユーザーログインによるトークン発行処理
    Route::post('/gettoken','CipherController@gettoken');
    //トークンからコネクトを返す
    Route::post('/getconnect','CipherController@token_connect');
    //ユーザー情報とトークンを登録し、トークンを返す
    Route::post('/apiregister','CipherController@apiregister');
    //トークンからユーザー情報を取得する
    Route::post('/profile','CipherController@token_profile');
    //トークンとユーザー情報でプロフィールを変更する
    Route::post('/changeprof','CipherController@token_changeprof');
    //商品レビュー取得
    Route::get('goodsdata/', 'ApiController@goodsData');
    //予測検索
    Route::get('preserch/', 'ApiController@preSerch');
    //検索結果
    Route::get('serchresult/', 'ApiController@serchResult');
    //商品レビュー投稿
    Route::get('review/', 'ApiController@apiReview');
    //ジャンル別商品
    Route::get('/bygenres/', 'apiController@byGenre');

});