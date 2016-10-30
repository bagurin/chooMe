<?php

use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'テスト',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpass'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
