@extends('layouts.layout')

@section('content')

    <style>
        .btn {

            background: -moz-linear-gradient(top,#ff9393 0%,#fff);

            background: -webkit-gradient(linear, left top, left bottom, from(#ff9393), to(#fff));

            border-radius: 20px;

            -moz-border-radius: 20px;

            -webkit-border-radius: 20px;

            color: #111;


            width: 47%;

            height: 300px;
            padding: 10px 0;

            -moz-box-shadow: inset 0px 1px 0px 0px #ff9393;
            -webkit-box-shadow: inset 0px 1px 0px 1px #ff9393;

            font-size:24px;

        }

    </style>

    <div class="faq">
        <!-- general -->
        <div class="general_agileits_genres">
            <div class="container">
                <div class="well" >
                    商品を新規登録するか、データベースに既に登録されてある商品をレビューするかを選択してください。
                </div>


                        <a href="/register-and-review/"><button class="btn">商品新規登録</button></a>


                <a href="#" data-toggle="modal" data-target="#selectProduct"><button class="btn">既に登録された商品のレビュー</button></a>

                <div class="modal video-modal fade" id="selectProduct" tabindex="-1" role="dialog" aria-labelledby="selectProduct">
                    <div class="modal-search-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                データベース内の商品を検索
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <section>
                                <div class="modal-body">

                                        <div class="w3_login_module">


                                              <div class="well">
                                                データベース内から、入力した文字列に似た商品名を持つ商品を検索します。
                                                </div>
                                            <style>
                                                .searchbar input[type="text"] {
                                                    outline: none;
                                                    border: none;
                                                    background: #EFEFEF;
                                                    padding: 10px;
                                                    text-align: center;
                                                    font-size: 14px;
                                                    color: #999;
                                                    width: 78%;
                                                    float: left;
                                                    border-top-left-radius: 25px;
                                                    border-bottom-left-radius: 25px;
                                                }
                                                .searchbar input[type="submit"]{
                                                    outline: none;
                                                    border: none;
                                                    background: #212121;
                                                    padding: 10px 0;
                                                    font-size: 14px;
                                                    color: #fff;
                                                    width: 22%;
                                                    border-top-right-radius: 25px;
                                                    border-bottom-right-radius: 25px;
                                                }
                                                .searchbar input[type="submit"]:hover{
                                                    background:#ff9393;
                                                }

                                            </style>
                                            <div class="searchbar">
                                        <input type="text" name="Search" placeholder="検索する商品名" required>
                                                <input type="submit" value="Go" >


                                    </div>

                                        </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>

                </html>
            </div>
        </div>
    </div>



@endsection