<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->integer('ranking_no');
            $table->integer('getgoods_id');
            $table->double('score',5,3);
            $table->integer('goodstypes_id');
            $table->float('average_rate');
            $table->integer('patterns_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('ranks');
    }
}
