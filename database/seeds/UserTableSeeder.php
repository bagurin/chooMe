<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'chihaya',
            'email' => 'chihaya@namco.com',
            'password' => bcrypt('chihaya'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '15',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'haruka',
            'email' => 'haruka@namco.com',
            'password' => bcrypt('haruka'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '15',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'プロデューサー',
            'email' => 'producer@namco.com',
            'password' => bcrypt('producer'),
            'age' => '5',
            'sex' => '男',
            'hobbies_id' => '15',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => '佐野清一郎',
            'email' => 'sano@namco.com',
            'password' => bcrypt('sano'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '4',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'azusa',
            'email' => 'azusa@namco.com',
            'password' => bcrypt('azusa'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '16',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'unko',
            'email' => 'unko@namco.com',
            'password' => bcrypt('unko'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '4',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'wanko',
            'email' => 'wanko@namco.com',
            'password' => bcrypt('wanko'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
