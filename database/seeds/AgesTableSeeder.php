<?php

use Illuminate\Database\Seeder;

class AgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ages')->truncate();

        DB::table('ages')->insert([
            'id' => '1',
            'name' => '10歳未満',
        ]);
        DB::table('ages')->insert([
            'id' => '2',
            'name' => '10代前半',
        ]);
        DB::table('ages')->insert([
            'id' => '3',
            'name' => '10代後半',
        ]);
        DB::table('ages')->insert([
            'id' => '4',
            'name' => '20代前半',
        ]);
        DB::table('ages')->insert([
            'id' => '5',
            'name' => '20代後半',
        ]);
        DB::table('ages')->insert([
            'id' => '6',
            'name' => '30代前半',
        ]);
        DB::table('ages')->insert([
            'id' => '7',
            'name' => '30代後半',
        ]);
        DB::table('ages')->insert([
            'id' => '8',
            'name' => '40代前半',
        ]);
        DB::table('ages')->insert([
            'id' => '9',
            'name' => '40代後半',
        ]);
        DB::table('ages')->insert([
            'id' => '10',
            'name' => '50代',
        ]);
        DB::table('ages')->insert([
            'id' => '11',
            'name' => '60代',
        ]);
        DB::table('ages')->insert([
            'id' => '12',
            'name' => '70歳以上',
        ]);


    }
}
