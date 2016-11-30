<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AgesTableSeeder::class);
        $this->call(GetgoodsTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
        $this->call(PatternsTableSeeder::class);
        $this->call(ScenesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RanksTableSeeder::class);
        $this->call(GoodstypesTableSeeder::class);
        $this->call(AccesskeysTableSeeder::class);


    }
}
