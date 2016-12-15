<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->truncate();

        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '481',
            'comment' => 'おいしいです',
            'rate' => '4',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '482',
            'comment' => 'おいしい！',
            'rate' => '5',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '485',
            'comment' => 'Very Delicious',
            'rate' => '3',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '483',
            'comment' => '千早愛らしいよ',
            'rate' => '4',
            'scenes_id' => '2',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '481',
            'comment' => '空を飛べるような錯覚に陥るほどおいしいです',
            'rate' => '4',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '482',
            'comment' => 'ハイになれます',
            'rate' => '4',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '485',
            'comment' => 'すごく気分がよくなります',
            'rate' => '5',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '3',
            'users_id' => '481',
            'comment' => '京都の定番です。',
            'rate' => '3',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '3',
            'users_id' => '482',
            'comment' => '抹茶がおいしいです！',
            'rate' => '3',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '3',
            'users_id' => '485',
            'comment' => 'いちごもおいしいですね',
            'rate' => '4',
            'scenes_id' => '1',
            'goodstypes_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
