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

        for($i=1;$i<=16;$i++) {
            for ($j=1;$j<=15;$j++){
                DB::table('users')->insert([
                    'name' => 'guest',
                    'email' => $i.'_'.$j.'woman@ecc.ac.jp',
                    'password' => bcrypt('guest'),
                    'age' => $j,
                    'sex' => '女',
                    'hobbies_id' => $i,
                    'connect' => false,
                    'created_at' => date("Y-m-d H:i:s"),
                ]);
                DB::table('users')->insert([
                    'name' => 'guest',
                    'email' => $i.'_'.$j.'man@ecc.ac.jp',
                    'password' => bcrypt('guest'),
                    'age' => $j,
                    'sex' => '男',
                    'hobbies_id' => $i,
                    'connect' => false,
                    'created_at' => date("Y-m-d H:i:s"),
                ]);
            }
        }

        DB::table('users')->insert([
            'name' => 'chihaya',
            'email' => 'chihaya@namco.com',
            'password' => bcrypt('chihaya'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '15',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'haruka',
            'email' => 'haruka@namco.com',
            'password' => bcrypt('haruka'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '15',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'プロデューサー',
            'email' => 'producer@namco.com',
            'password' => bcrypt('producer'),
            'age' => '5',
            'sex' => '男',
            'hobbies_id' => '15',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => '佐野清一郎',
            'email' => 'sano@namco.com',
            'password' => bcrypt('sano'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '4',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'azusa',
            'email' => 'azusa@namco.com',
            'password' => bcrypt('azusa'),
            'age' => '5',
            'sex' => '女',
            'hobbies_id' => '16',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'unko',
            'email' => 'unko@namco.com',
            'password' => bcrypt('unko'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '4',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'wanko',
            'email' => 'wanko@namco.com',
            'password' => bcrypt('wanko'),
            'age' => '7',
            'sex' => '男',
            'hobbies_id' => '1',
            'connect' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
