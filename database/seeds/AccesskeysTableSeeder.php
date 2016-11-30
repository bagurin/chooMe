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
            'key' => '6ac8ca22fe2db1141f252c3b1ec8ee355733c99ae5a6f8d279fcded467585526',
        ]);
    }
}
