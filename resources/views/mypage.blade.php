@extends('layouts.layout')

@section('content')


    <div class="modal video-modal fade" id="usrinfoModal" tabindex="-1" role="dialog" aria-labelledby="usrinfoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    ユーザー情報変更
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">


                                <div class="form">

                                    <form action="{{ url('/mypage') }}" method="post">


                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                                            <div class="col-md-12">
                                                <input id="name" type="text" class="form-control" name="name" placeholder="ユーザー名" required>

                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control" name="email" required placeholder="メールアドレス" value="{{ old('email') }}">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p>年齢</p>
                                            <select id="age" name="age">
                                                <option value="1">10歳未満</option>
                                                <option value="2">10代前半</option>
                                                <option value="3">10代後半</option>
                                                <option value="4">20代前半</option>
                                                <option value="5">20代後半</option>
                                                <option value="6">30代前半</option>
                                                <option value="7">30代後半</option>
                                                <option value="8">40代前半</option>
                                                <option value="9">40代後半</option>
                                                <option value="10">50代</option>
                                                <option value="11">60代</option>
                                                <option value="12">70歳以上</option>

                                            </select><br>
                                        </div>
                                        <div class="col-md-12">
                                            <p>趣味</p>
                                            <select id="hobbies_id" name="hobbies_id">
                                                <option value="1">スポーツ</option>
                                                <option value="2">読書</option>
                                                <option value="3">PC</option>
                                                <option value="4">旅行</option>
                                                <option value="5">音楽</option>
                                                <option value="6">映画鑑賞</option>
                                                <option value="7">車＆バイク</option>
                                                <option value="8">ゲーム</option>
                                                <option value="9">料理</option>
                                                <option value="10">お酒</option>
                                                <option value="11">ショッピング</option>
                                                <option value="12">手芸＆裁縫</option>
                                                <option value="13">グルメ</option>
                                                <option value="14">ガーデニング</option>
                                                <option value="15">アイドル</option>
                                                <option value="16">その他</option>
                                            </select><br>
                                        </div>

                                        <div class="form-group">
                                            {{ csrf_field() }}

                                            <input type="submit" value="登録">


                                        </div>


                                    </form>

                                </div>

                                </div>

                </section>
            </div>
        </div>
    </div>




    <div class="general_agileits_genres">
        <h4 class="latest-text w3_latest_text">マイページ</h4>
        <div class="container">
            <?php
            $uname = Auth::user()->name;
            $umail = Auth::user()->email;
            $usex = Auth::user()->sex;
            $uage = Auth::user()->age;
            $uhobby = Auth::user()->hobbies_id;

            ?>
                <div class="bs-docs-example">


            <p>ユーザー名:<?php print $uname; ?></p>
            <p>メールアドレス:<?php print $umail; ?></p>
            <p>性別:<?php print $usex; ?></p>
            <p>年代:<?php switch($uage){
                    case 1:
                        print "10歳未満";
                        break;
                    case 2:
                        print "10代前半";
                        break;
                    case 3:
                        print "10代後半";
                        break;
                    case 4:
                        print "20代前半";
                        break;
                    case 5:
                        print "20代後半";
                        break;
                    case 6:
                        print "30代前半";
                        break;
                    case 7:
                        print "30代後半";
                        break;
                    case 8:
                        print "40代前半";
                        break;
                    case 9:
                        print "40代後半";
                        break;
                    case 10:
                        print "50代";
                        break;
                    case 11:
                        print "60代";
                        break;
                    case 12:
                        print "70歳以上";
                        break;
                }?></p>

            <p>趣味:<?php switch($uhobby){
                    case 1:
                        print "スポーツ";
                        break;
                    case 2:
                        print "読書";
                        break;
                    case 3:
                        print "PC";
                        break;
                    case 4:
                        print "旅行";
                        break;
                    case 5:
                        print "音楽";
                        break;
                    case 6:
                        print "映画観賞";
                        break;
                    case 7:
                        print "車＆バイク";
                        break;
                    case 8:
                        print ":ゲーム";
                        break;
                    case 9:
                        print "料理";
                        break;
                    case 10:
                        print "お酒";
                        break;
                    case 11:
                        print "ショッピング";
                        break;
                    case 12:
                        print "手芸＆裁縫";
                        break;
                    case 13:
                        print "グルメ";
                        break;
                    case 14:
                        print "ガーデニング";
                        break;
                    case 15:
                        print "アイドル";
                        break;
                    case 16:
                        print "その他";
                        break;
                }?></p>


                    <style>

                        .usrinfo ul li a{
                            color: #fff;
                            display: inline-block;
                            text-transform: uppercase;
                            text-decoration: none;
                            background: #ff9393;
                            text-align: center;
                            padding: 6px 30px;
                            font-weight: bold;
                            /*float: right;*/
                            /*margin-top:1em;*/
                            /*width: 25%;*/
                        }

                        .usrinfo ul li a:focus{
                            outline:none;
                        }
                        .usrinfo ul li a:hover{
                            background:#212121;
                        }
                        .usrinfo ul li{
                            display:inline-block;
                            color:#212121;
                            font-size:1em;
                        }
                        .usrinfo ul li i,ul li:first-child{
                            padding-right:1em;
                        }
                    </style>
                    <div class="usrinfo">
                        <ul>

                            <li><a href="#" data-toggle="modal" data-target="#usrinfoModal">ユーザー情報を変更する</a></li>
                        </ul>
                    </div>
                    </div>


        </div>
        </div>
        <!--body wrapper end-->
    </div>





@endsection
