<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //ユーザー情報用モデル
    protected $table = 'users'; //テーブル名指定

    protected $fillable = [
        'id', 'name', 'email', 'password','age','sex','hobbies_id','connect'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
