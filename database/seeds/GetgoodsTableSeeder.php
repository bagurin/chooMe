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
            'name' => 'たこ昌：たこ焼き',
            'genres_id' => '7',
            'image' => '/images/たこ焼き.jpg',
            'url' => 'i',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('getgoods')->insert([
            'name' => 'だっさい',
            'genres_id' => '7',
            'image' => '/images/dassai.jpg',
            'url' => 'a',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('getgoods')->insert([
            'name' => '八ツ橋',
            'genres_id' => '7',
            'image' => '/images/やつはし.jpg',
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
