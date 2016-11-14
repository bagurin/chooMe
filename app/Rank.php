<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{

    protected $table = 'ranks';

    protected $fillable = [
        'ranking_no', 'getgoods_id', 'score', 'average_rate', 'patterns_id'
    ];

}
