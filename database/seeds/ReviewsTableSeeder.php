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
            'comment' => '千早かわいいよね',
            'rate' => '4',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '482',
            'comment' => '千早かわいくね？',
            'rate' => '5',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '485',
            'comment' => '千早かわいい',
            'rate' => '3',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '1',
            'users_id' => '483',
            'comment' => '千早かかかわいいよ',
            'rate' => '4',
            'scenes_id' => '2',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '481',
            'comment' => '千早かわいいよ',
            'rate' => '4',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '482',
            'comment' => '千早かわいいべ',
            'rate' => '4',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('reviews')->insert([
            'getgoods_id' => '2',
            'users_id' => '485',
            'comment' => '千早かわいいんです',
            'rate' => '5',
            'scenes_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),

        ]);

    }
}
