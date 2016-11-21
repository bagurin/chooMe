<?php

use Illuminate\Database\Seeder;

class GoodstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goodstypes')->truncate();
        DB::table('goodstypes')->insert([
            'name' => 'getgoods',
        ]);
        DB::table('goodstypes')->insert([
            'name' => 'wantgoods',
        ]);
    }
}
