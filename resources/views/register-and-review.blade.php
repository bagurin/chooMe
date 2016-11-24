@extends('layouts.layout')

@section('content')

    <div class="general_social_icons">
        <nav class="social">
            <ul>
                <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
                <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="faq">
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">商品登録</h4>
            <div class="container">
                <div class="col-md-12 well">
                    データベースに商品の登録とレビュー・評価を投稿します。<br>
                </div>



                <!-- general -->


                <form enctype="multipart/form-data" method="post" action="{{url('/product-register/')}}">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <input type="text" id="name" name="name" placeholder="商品名"></div>
                    <div class="col-md-6">
                        <input type="radio" name="wantgood" value="1" checked>もらって嬉しかったもの
                        <input type="radio" name="wantgood" value="2">欲しいもの
                    </div>
                    <div class="col-md-12">
                        ジャンル:
                        <select id="genres" name="genres">
                            <option value="1">本</option>
                            <option value="2">DVD・音楽</option>
                            <option value="3">TVゲーム</option>
                            <option value="4">家電・カメラ・AV機器</option>
                            <option value="5">パソコン・オフィス用品</option>
                            <option value="6">ホーム&キッチン・DIY</option>
                            <option value="7">食品・飲料・お酒</option>
                            <option value="8">ドラッグ・ビューティ</option>
                            <option value="9">ベビー・おもちゃ</option>
                            <option value="10">服</option>
                            <option value="11">シューズ</option>
                            <option value="12">バッグ</option>
                            <option value="13">腕時計</option>
                            <option value="14">スポーツ&アウトドア</option>
                            <option value="15">車&バイク</option>
                        </select><br>
                    </div>
                    <div class="col-md-12">
                        <style>
                            label {
                                margin-left: 0em;
                            }
                            .my-file-input {
                                display: inline-block;
                                padding: 5px;
                                width: 200px;
                                text-align: center;
                                white-space: nowrap;
                                overflow: hidden;
                                font-size: 14px;
                                text-overflow: ellipsis;
                                background-color: #ff9393;
                                color: white;
                                box-shadow: #888 2px 2px 1px;
                                cursor: pointer;
                            }
                            .my-file-input:hover {
                                background-color: #fc6c6c;
                            }
                            .my-file-input:hover {
                                background-color: #fc6c6c;
                            }
                            .my-file-input:active {
                                box-shadow: #f75454 1px 1px 1px;
                                position: relative;
                                top: 1px; left: 1px;
                            }
                            .my-file-input input {
                                display: none;
                            }
                        </style>


                        <label class="my-file-input"><input type="file" id="image" name="image" accept="image/*">商品画像を選択</label>
                        <script>
                            document.getElementById("image").addEventListener("change", function(e){
                                e.target.nextSibling.nodeValue = e.target.files.length ? e.target.files[0].name : "商品画像を選択";
                            });
                        </script>
                    </div>
                    </form>
                </div>

                    {{--<div class="well">--}}
                        {{--商品のレビューと評価（5段階）を登録します。--}}
                    {{--</div>--}}

                <div class="container">
                    <form method="post" action="{{url('/review/')}}">

                        {{ csrf_field() }}

                        {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}

                        <textarea name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" maxlength="100"></textarea>

                        <p>評価
                            <select id="rate" name="rate" size="1">
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select></p><br>
                        <input type="submit" value="レビューを登録する">
                </form>
            </div>





        </div>
        <!--body wrapper end-->
    </div>
    <!-- //general -->
    </div>
    </div>


@endsection