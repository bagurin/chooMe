<?php

use Illuminate\Database\Seeder;

class ScenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scenes')->truncate();

        DB::table('scenes')->insert([
            'id' => '1',
            'name' => '誕生日',
        ]);
        DB::table('scenes')->insert([
            'id' => '2',
            'name' => '結婚記念日',
        ]);
        DB::table('scenes')->insert([
            'id' => '3',
            'name' => 'クリスマス',
        ]);
        DB::table('scenes')->insert([
            'id' => '4',
            'name' => '出産祝い',
        ]);
        DB::table('scenes')->insert([
            'id' => '5',
            'name' => '結婚祝い',
        ]);
        DB::table('scenes')->insert([
            'id' => '6',
            'name' => '手土産',
        ]);
        DB::table('scenes')->insert([
            'id' => '7',
            'name' => '引っ越し',
        ]);
        DB::table('scenes')->insert([
            'id' => '8',
            'name' => 'お中元&お歳暮',
        ]);
        DB::table('scenes')->insert([
            'id' => '9',
            'name' => '父の日',
        ]);
        DB::table('scenes')->insert([
            'id' => '10',
            'name' => '母の日',
        ]);
        DB::table('scenes')->insert([
            'id' => '11',
            'name' => '敬老の日',
        ]);
        DB::table('scenes')->insert([
            'id' => '12',
            'name' => '卒業&就職祝い',
        ]);
        DB::table('scenes')->insert([
            'id' => '13',
            'name' => '入学祝い',
        ]);
    }
}
