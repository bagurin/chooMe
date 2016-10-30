<?php

use Illuminate\Database\Seeder;

class PatternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patterns')->truncate();

        $array = array(
            '女'=>0,'男'=>0,

            '10歳以下'=>1,'10代前半'=>2,'10代後半'=>3,'20代前半'=>4,'20代後半'=>5,'30代前半'=>6,'30代後半'=>7,'40代前半'=>8,'40代後半'=>9,'50代'=>10,'60代'=>11,'70歳以上'=>12,

            'hobby1'=>1,'hobby2'=>2,'hobby3'=>3,'hobby4'=>4,'hobby5'=>5,'hobby6'=>6,'hobby7'=>7,'hobby8'=>8,'hobby9'=>9,
            'hobby10'=>10,'hobby11'=>11,'hobby12'=>12,'hobby13'=>13,'hobby14'=>14,'hobby15'=>15,'hobby16'=>16,

            'scene1'=>1,'scene2'=>2,'scene3'=>3,'scene4'=>4,'scene5'=>5,'scene6'=>6,'scene7'=>7,'scene8'=>8,
            'scene9'=>9,'scene10'=>10,'scene11'=>11,'scene12'=>12,'scene13'=>13,

            'genre1'=>1,'genre2'=>2,'genre3'=>3,'genre4'=>4,'genre5'=>5,'genre6'=>6,'genre7'=>7,'genre8'=>8,'genre9'=>9,
            'genre10'=>10,'genre11'=>11,'genre12'=>12,'genre13'=>13,'genre14'=>14,'genre15'=>15,

            'man_age1'=>0,'man_age2'=>0,'man_age3'=>0,'man_age4'=>0,'man_age5'=>0,'man_age6'=>0,'man_age7'=>0,'man_age8'=>0,
            'man_age9'=>0,'man_age10'=>0,'man_age11'=>0,'man_age12'=>0,

            'woman_age1'=>0,'woman_age2'=>0,'woman_age3'=>0,'woman_age4'=>0,'woman_age5'=>0,'woman_age6'=>0,
            'woman_age7'=>0,'woman_age8'=>0,'woman_age9'=>0,'woman_age10'=>0,'woman_age11'=>0,'woman_age12'=>0,

            'man_birth'=>0,'man_xmas'=>0,'woman_birth'=>0,'woman_xmas'=>0,

            'age1_birth'=>0,'age2_birth'=>0,'age3_birth'=>0,'age4_birth'=>0,'age5_birth'=>0,'age6_birth'=>0,
            'age7_birth'=>0,'age8_birth'=>0,'age9_birth'=>0,'age10_birth'=>0,'age11_birth'=>0,'age12_birth'=>0,

            'age1_xmas'=>0,'age2_xmas'=>0,'age3_xmas'=>0,'age4_xmas'=>0,'age5_xmas'=>0,'age6_xmas'=>0,
            'age7_xmas'=>0,'age8_xmas'=>0,'age9_xmas'=>0,'age10_xmas'=>0,'age11_xmas'=>0,'age12_xmas'=>0,

            'man_genre1'=>0,'man_genre2'=>0,'man_genre3'=>0,'man_genre4'=>0,'man_genre5'=>0,'man_genre6'=>0,'man_genre7'=>0,
            'man_genre8'=>0,'man_genre9'=>0,'man_genre10'=>0,'man_genre11'=>0,'man_genre12'=>0,'man_genre13'=>0,
            'man_genre14'=>0,'man_genre15'=>0,

            'woman_genre1'=>0,'woman_genre2'=>0,'woman_genre3'=>0,'woman_genre4'=>0,'woman_genre5'=>0,'woman_genre6'=>0,
            'woman_genre7'=>0,'woman_genre8'=>0,'woman_genre9'=>0,'woman_genre10'=>0,'woman_genre11'=>0,'woman_genre12'=>0,
            'woman_genre13'=>0,'woman_genre14'=>0,'woman_genre15'=>0
        );



        $c = 1;

        foreach($array as $key => $value){
            DB::table('patterns')->insert([
                'id' => $c,
                'name' => $key,
                't_id' => $value,
            ]);
            $c += 1;
        }

    }
}
