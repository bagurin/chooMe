<?php

use Illuminate\Database\Seeder;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->truncate();

        DB::table('hobbies')->insert([
            'id' => '1',
            'name' => 'スポーツ',
        ]);
        DB::table('hobbies')->insert([
            'id' => '2',
            'name' => '読書',
        ]);
        DB::table('hobbies')->insert([
            'id' => '3',
            'name' => 'PC',
        ]);
        DB::table('hobbies')->insert([
            'id' => '4',
            'name' => '旅行',
        ]);
        DB::table('hobbies')->insert([
            'id' => '5',
            'name' => '音楽',
        ]);
        DB::table('hobbies')->insert([
            'id' => '6',
            'name' => '映画鑑賞',
        ]);
        DB::table('hobbies')->insert([
            'id' => '7',
            'name' => '車&バイク',
        ]);
        DB::table('hobbies')->insert([
            'id' => '8',
            'name' => 'ゲーム',
        ]);
        DB::table('hobbies')->insert([
            'id' => '9',
            'name' => '料理',
        ]);
        DB::table('hobbies')->insert([
            'id' => '10',
            'name' => 'お酒',
        ]);
        DB::table('hobbies')->insert([
            'id' => '11',
            'name' => 'ショッピング',
        ]);
        DB::table('hobbies')->insert([
            'id' => '12',
            'name' => '手芸&裁縫',
        ]);
        DB::table('hobbies')->insert([
            'id' => '13',
            'name' => 'グルメ',
        ]);
        DB::table('hobbies')->insert([
            'id' => '14',
            'name' => 'ガーデニング',
        ]);
        DB::table('hobbies')->insert([
            'id' => '15',
            'name' => 'アイドル',
        ]);
        DB::table('hobbies')->insert([
            'id' => '16',
            'name' => 'その他',
        ]);
    }
}
