<?php

use Illuminate\Database\Seeder;

class AccesskeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accesskeys')->truncate();
        DB::table('accesskeys')->insert([
            'os' => 'android',
            'key' => 'choome',
        ]);
    }
}
