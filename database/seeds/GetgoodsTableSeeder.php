<?php

use Illuminate\Database\Seeder;

class GetgoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('getgoods')->truncate();

        DB::table('getgoods')->insert([
            'name' => 'm4a1',
            'genres_id' => '1',
            'image' => '/image',
            'url' => 'i',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('getgoods')->insert([
            'name' => 'ak47',
            'genres_id' => '1',
            'image' => '/image',
            'url' => 'a',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

//        DB::table('getgoods')->insert([
//            'name' => 'scar',
//            'genres_id' => '1',
//            'image' => '/image',
//        ]);
//
//        DB::table('getgoods')->insert([
//            'name' => 'famas',
//            'genres_id' => '1',
//            'image' => '/image',
//        ]);
//
//        DB::table('getgoods')->insert([
//            'name' => 'f2000',
//            'genres_id' => '1',
//            'image' => '/image',
//        ]);
    }
}
