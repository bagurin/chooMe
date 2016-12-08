<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class RankCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ranking';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ranking Update';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        //$this->info('テキスト');
        //取得してきたランキング情報を分解して返す
        function getiac($ans)
        {

            //オブジェクトで返却されるので配列に変換する。([0]なのは１件しか格納されていない為)
            $con = (array)$ans[0];

            $id = (int)$con["getgoods_id"];
            $average = (float)$con["ave"];
            $count = (int)$con["count"];

            //スコアメソッドでスコアを算出して格納する
            $result = score($average, $count);

            $info = array('id' => $id, 'score' => $result, 'ave' => $average);

            return $info;
        }

        //patternsテーブルからidを引数にt_idを取得する
        function gettid($patternid)
        {
            $tid = DB::table('patterns')
                ->select(DB::raw('t_id'))
                ->where([
                    ['id', '=', $patternid],
                ])
                ->get();

            //オブジェクト→配列へ変換
            $con = (array)$tid[0];
            //キー名:t_idの値を取得
            $id = $con["t_id"];

            return $id;
        }

        //平均と数からスコアを計算
        function score($ave, $count)
        {
            $ans = 0.0;

            if ($ave >= 3) {
                $ans = (($ave - 3) ** 2) * log($count);
            } else {
                $ans = -(($ave - 3) ** 2) * log($count);
            }

            //少数第四位を四捨五入する
            return round($ans, 3);
        }

        //配列→連想配列→値の降順 でソートする
        function sortArrayByKey(&$array, $sortKey, $sortType = SORT_DESC)
        {

            $tmpArray = array();
            foreach ($array as $key => $row) {
                $tmpArray[$key] = $row[$sortKey];
            }
            array_multisort($tmpArray, $sortType, $array);
            unset($tmpArray);
        }

        //ランクテーブルに格納する(降順された２０件の配列,パターンid)
        function sendranks($array, $pattern)
        {

            //ランキングNoを1~20まで変化させる変数
            $rank = 1;
            $sendarray = $array;

            //降順へソート
            sortArrayByKey($sendarray, 'score');

            //20件以上のデータを削除する。(ランキング20以内のみ残す)
            $sendarray = array_slice($sendarray, 0, 20, true);

            foreach ($sendarray as $value) {

                DB::table('ranks')
                    ->where([
                        ['ranking_no', '=', $rank],
                        ['patterns_id', '=', $pattern],
                    ])
                    ->update(['getgoods_id' => $value['id'], 'score' => $value['score'], 'average_rate' => $value['ave'], 'updated_at' => date("Y-m-d H:i:s")]);

                $rank += 1;
            }

        }

        //ユーザー情報ランキング（change = 性別:1 年代:2 趣味:3）
        function usersrank($allid, $change, $pattern, $goodstypes)
        {

            $array = array();

            //whereの値
            $val = "";

            //whereカラム名
            $com = "";

            //$changeが1なら$pattern値に応じて性別を$valへ格納する
            //$changeが1以外なら$valへ$patternを格納する
            if ($change == 1) {

                $com = 'users.sex';

                if ($pattern == 1) {
                    $val = '男';
                } else {
                    $val = '女';
                }

            } elseif ($change == 2) {

                $com = 'users.age';
                $val = gettid($pattern);

            } elseif ($change == 3) {

                $com = 'users.hobbies_id';
                $val = gettid($pattern);
            }

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            //ランキングを格納するメソッドを実行する
            sendranks($array, $pattern);

        }

        //ジャンルランキング
        function genresrank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $genre = gettid($pattern);

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('getgoods', 'getgoods.id', '=', 'reviews.getgoods_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        ['getgoods.genres_id', '=', $genre],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                $info = getiac($ans);

                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }


        //シーンランキング
        function scenesrank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $scene = gettid($pattern);

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('scenes', 'scenes.id', '=', 'reviews.scenes_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        ['scenes.id', '=', $scene],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                $info = getiac($ans);

                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //t_idを分解して各主キーを作る
        function two_convert_digi($tid)
        {

            $strtid = (string)$tid;
            $count = mb_strlen($strtid);
            $digiarray = array();

            if ($count == 2) {
                $digiarray = str_split($strtid);
            } elseif ($count == 3) {
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 0, 1)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 1, 2)));
            }

            $digiarray[0] = intval($digiarray[0]);
            $digiarray[1] = intval($digiarray[1]);

            return $digiarray;
        }

        //性別と年代ランキング
        function sex_age_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $parray = array();
            $tid = gettid($pattern);
            $parray = two_convert_digi($tid);
            $uinfo = $parray[0];
            $oinfo = $parray[1];

            $com = 'users.sex';
            if ($uinfo == 1) {
                $val = '男';
            } else {
                $val = '女';
            }

            $com2 = 'users.age';
            $val2 = $oinfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //性別とジャンルランキング
        function sex_genres_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $parray = array();
            $tid = gettid($pattern);
            $parray = two_convert_digi($tid);
            $uinfo = $parray[0];
            $oinfo = $parray[1];

            $com = 'users.sex';
            if ($uinfo == 1) {
                $val = '男';
            } else {
                $val = '女';
            }

            $com2 = 'getgoods.genres_id';
            $val2 = $oinfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->join('getgoods', 'getgoods.id', '=', 'reviews.getgoods_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //性別とシーンランキング（誕生日・Xmas）
        function sex_scene_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $parray = array();
            $tid = gettid($pattern);
            $parray = two_convert_digi($tid);
            $uinfo = $parray[0];
            $oinfo = $parray[1];

            $com = 'users.sex';
            if ($uinfo == 1) {
                $val = '男';
            } else {
                $val = '女';
            }

            $com2 = 'scenes.id';
            $val2 = $oinfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->join('scenes', 'scenes.id', '=', 'reviews.scenes_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //年代とシーン　ランキング（誕生日・Xmas）
        function age_scene_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $parray = array();
            $tid = gettid($pattern);
            $parray = two_convert_digi($tid);
            $uinfo = $parray[0];
            $oinfo = $parray[1];

            $com = 'users.age';
            $val = $uinfo;

            $com2 = 'scenes.id';
            $val2 = $oinfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->join('scenes', 'scenes.id', '=', 'reviews.scenes_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //patterns_idが296以下であればこちらを
        function three_convert_digi($tid)
        {

            $strtid = (string)$tid;
            $count = mb_strlen($strtid);
            $digiarray = array();

            if ($count == 3) {
                $digiarray = str_split($strtid);
            } elseif ($count == 4) {
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 0, 1)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 1, 2)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 2, 1)));
            }

            $digiarray[0] = intval($digiarray[0]);
            $digiarray[1] = intval($digiarray[1]);
            $digiarray[2] = intval($digiarray[2]);


            return $digiarray;
        }

        //patterns_idが297以上ではこちらを
        function three_convert_digi2($tid)
        {

            $strtid = (string)$tid;
            $count = mb_strlen($strtid);
            $digiarray = array();

            if ($count == 3) {
                $digiarray = str_split($strtid);
            } elseif ($count == 4) {
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 0, 1)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 1, 1)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 2, 2)));

            } elseif ($count == 5) {
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 0, 1)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 1, 2)));
                $digiarray = array_merge($digiarray, array(mb_substr($strtid, 2, 2)));
            }

            $digiarray[0] = intval($digiarray[0]);
            $digiarray[1] = intval($digiarray[1]);
            $digiarray[2] = intval($digiarray[2]);


            return $digiarray;
        }

        //性別と年代と誕生日・クリスマス　ランキング
        function sex_age_scene_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $parray = array();
            $tid = gettid($pattern);
            $parray = three_convert_digi($tid);
            $uinfo = $parray[0];
            $ainfo = $parray[1];
            $sinfo = $parray[2];


            $com = 'users.sex';
            if ($uinfo == 1) {
                $val = '男';
            } else {
                $val = '女';
            }

            $com2 = 'users.age';
            $val2 = $ainfo;

            $com3 = 'scenes.id';
            $val3 = $sinfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->join('scenes', 'scenes.id', '=', 'reviews.scenes_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        [$com3, '=', $val3],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }

        //性別と年代とジャンル　ランキング
        function sex_age_genre_rank($allid, $pattern, $goodstypes)
        {

            $array = array();

            $tid = gettid($pattern);
            if ($pattern <= 296) {
                $parray = three_convert_digi($tid);
            } else {
                $parray = three_convert_digi2($tid);
            }


            $uinfo = $parray[0];
            $ainfo = $parray[1];
            $ginfo = $parray[2];


            $com = 'users.sex';
            if ($uinfo == 1) {
                $val = '男';
            } else {
                $val = '女';
            }

            $com2 = 'users.age';
            $val2 = $ainfo;

            $com3 = 'getgoods.genres_id';
            $val3 = $ginfo;

            foreach ($allid as $value) {

                $ans = DB::table('reviews')
                    ->join('users', 'users.id', '=', 'reviews.users_id')
                    ->join('getgoods', 'getgoods.id', '=', 'reviews.getgoods_id')
                    ->select(DB::raw('reviews.getgoods_id as "getgoods_id",ROUND(AVG(reviews.rate),3) as "ave",COUNT(reviews.rate) as "count"'))
                    ->where([
                        [$com, '=', $val],
                        [$com2, '=', $val2],
                        [$com3, '=', $val3],
                        ['reviews.getgoods_id', '=', $value],
                        ['reviews.goodstypes_id', '=', $goodstypes],
                    ])
                    ->get();

                //取得した情報を分解するgetiacメソッドを実行する
                $info = getiac($ans);

                //配列へ情報を格納する
                if ($info['id'] != 0) {
                    //配列へ情報を格納する
                    $array = array_merge($array, array($info));
                }
            }

            sendranks($array, $pattern);
        }


        //商品id全件取得
        $all = DB::table('getgoods')
            ->select('id')->get();

        //オブジェクトのカウント
        $count = count($all);

        //全ての商品idを格納する配列の宣言
        $allid = array();

        //商品idの数だけオブジェクトを配列に変換して格納
        for ($i = 0; $i < $count; $i++) {

            $parts = (array)$all[$i];
            $parts = $parts['id'];

            array_push($allid, $parts);

        }


        //全処理
        for ($i = 1; $i <= 548; $i++) {
            if ($i <= 2) {
                usersrank($allid, 1, $i, 1);
                if($i == 2){
                    $this->info('性別(get)  :   Completed!!');
                }
            } elseif ($i >= 3 and $i <= 14) {
                usersrank($allid, 2, $i, 1);
                if($i == 14){
                    $this->info('年代(get)  :   Completed!!');
                }
            } elseif ($i >= 15 and $i <= 30) {
                usersrank($allid, 3, $i, 1);
                if($i == 30){
                    $this->info('趣味(get)  :   Completed!!');
                }
            } elseif ($i >= 31 and $i <= 43) {
                scenesrank($allid, $i, 1);
                if($i == 43){
                    $this->info('シーン(get) :   Completed!!');
                }
            } elseif ($i >= 44 and $i <= 58) {
                genresrank($allid, $i, 1);
                if($i == 58){
                    $this->info('ジャンル(get):   Completed!!');
                }
            } elseif ($i >= 59 and $i <= 82) {
                sex_age_rank($allid, $i, 1);
                if($i == 82){
                    $this->info('性別×年代(get) : Completed!!');
                }
            } elseif ($i >= 83 and $i <= 86) {
                sex_scene_rank($allid, $i, 1);
                if($i == 86){
                    $this->info('性別×誕生日･Xmas(get) : Completed!!');
                }
            } elseif ($i >= 87 and $i <= 110) {
                age_scene_rank($allid, $i, 1);
                if($i == 110){
                    $this->info('年代×誕生日･Xmas(get) :  Completed!!');
                }
            } elseif ($i >= 111 and $i <= 140) {
                sex_genres_rank($allid, $i, 1);
                if($i == 140){
                    $this->info('性別×ジャンル(get)   :   Completed!!');
                }
            } elseif ($i >= 141 and $i <= 188) {
                sex_age_scene_rank($allid, $i, 1);
                if($i == 188){
                    $this->info('性別×年代×誕生日･Xmas(get) : Completed!!');
                }
            } elseif ($i >= 189 and $i <= 548) {
                sex_age_genre_rank($allid, $i, 1);
                if($i == 548){
                    $this->info('性別×年代×ジャンル(get) :  Completed!!');
                }
            }
        }

        for ($i = 1; $i <= 548; $i++) {
            if ($i <= 2) {
                usersrank($allid, 1, $i, 2);
                if($i == 2){
                    $this->info('性別のみ(want) : Completed!!');
                }
            } elseif ($i >= 3 and $i <= 14) {
                usersrank($allid, 2, $i, 2);
                if($i == 14){
                    $this->info('年代のみ(want) : Completed!!');
                }
            } elseif ($i >= 15 and $i <= 30) {
                usersrank($allid, 3, $i, 2);
                if($i == 30){
                    $this->info('趣味のみ(want) : Completed!!');
                }
            } elseif ($i >= 31 and $i <= 43) {
                scenesrank($allid, $i, 2);
                if($i == 43){
                    $this->info('シーンのみ(want) : Completed!!');
                }
            } elseif ($i >= 44 and $i <= 58) {
                genresrank($allid, $i, 2);
                if($i == 58){
                    $this->info('ジャンルのみ(want) : Completed!!');
                }
            } elseif ($i >= 59 and $i <= 82) {
                sex_age_rank($allid, $i, 2);
                if($i == 82){
                    $this->info('性別×年代(want) : Completed!!');
                }
            } elseif ($i >= 83 and $i <= 86) {
                sex_scene_rank($allid, $i, 2);
                if($i == 86){
                    $this->info('性別×誕生日･Xmas(want) : Completed!!');
                }
            } elseif ($i >= 87 and $i <= 110) {
                age_scene_rank($allid, $i, 2);
                if($i == 110){
                    $this->info('年代×誕生日･Xmas(want) : Completed!!');
                }
            } elseif ($i >= 111 and $i <= 140) {
                sex_genres_rank($allid, $i, 2);
                if($i == 140){
                    $this->info('性別×ジャンル(want) : Completed!!');
                }
            } elseif ($i >= 141 and $i <= 188) {
                sex_age_scene_rank($allid, $i, 2);
                if($i == 188){
                    $this->info('性別×年代×誕生日･Xmas(want) : Completed!!');
                }
            } elseif ($i >= 189 and $i <= 548) {
                sex_age_genre_rank($allid, $i, 2);
                if($i == 548){
                    $this->info('性別×年代×ジャンル(want) : Completed!!');
                }
            }
        }

        //ユーザー全件のconnectをfalseにする
        DB::table('users')
            ->update(['connect' => false, 'updated_at' => date("Y-m-d H:i:s")]);

    }

}
