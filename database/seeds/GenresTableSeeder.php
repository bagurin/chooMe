<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        DB::table('genres')->insert([
            'id' => '1',
            'name' => '本',
        ]);

        DB::table('genres')->insert([
            'id' => '2',
            'name' => 'DVD・音楽',
        ]);

        DB::table('genres')->insert([
            'id' => '3',
            'name' => 'ゲーム',
        ]);

        DB::table('genres')->insert([
            'id' => '4',
            'name' => '家電・カメラ・AV機器',
        ]);

        DB::table('genres')->insert([
            'id' => '5',
            'name' => 'パソコン・オフィス用品',
        ]);

        DB::table('genres')->insert([
            'id' => '6',
            'name' => 'ホーム&キッチン・DIY',
        ]);

        DB::table('genres')->insert([
            'id' => '7',
            'name' => '食品・飲料・お酒',
        ]);

        DB::table('genres')->insert([
            'id' => '8',
            'name' => 'ドラッグ&ビューティー',
        ]);

        DB::table('genres')->insert([
            'id' => '9',
            'name' => 'ベビー・おもちゃ',
        ]);

        DB::table('genres')->insert([
            'id' => '10',
            'name' => '服',
        ]);

        DB::table('genres')->insert([
            'id' => '11',
            'name' => 'シューズ',
        ]);

        DB::table('genres')->insert([
            'id' => '12',
            'name' => 'バッグ',
        ]);

        DB::table('genres')->insert([
            'id' => '13',
            'name' => '腕時計',
        ]);

        DB::table('genres')->insert([
            'id' => '14',
            'name' => 'スポーツ&アウトドア',
        ]);

        DB::table('genres')->insert([
            'id' => '15',
            'name' => '車&バイク',
        ]);
    }
}
