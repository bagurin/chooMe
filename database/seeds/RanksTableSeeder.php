<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ranks')->truncate();

        for($g=1;$g<=548;$g++){
            for($i=1;$i<=20;$i++){

                DB::table('ranks')->insert([
                    'ranking_no' => $i,
                    'getgoods_id' => 1,
                    'score' => 0.00,
                    'average_rate' => 0,
                    'patterns_id' => $g,
                    'created_at' => date("Y-m-d H:i:s"),
                ]);

            }
        }
    }
}
