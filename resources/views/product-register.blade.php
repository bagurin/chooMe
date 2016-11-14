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
                <div class="col-md-10 well">
                    データベースに商品の登録とレビュー・評価を投稿します。<br>
                    既に同名の商品がデータベースに存在した場合、画像のアップロードは行われず、<br>
                    レビューと評価のみを登録します。
                </div>



            <!-- general -->


                <form enctype="multipart/form-data" method="post" action="{{url('/product-register/')}}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                    <input type="text" id="name" name="name" placeholder="商品名"></div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                    ジャンル:
                    <select id="genres" name="genres">
                        <option value="1">本</option>
                        <option value="2">DVD・音楽・ゲーム</option>
                        <option value="3">家電・カメラ・AV機器</option>
                        <option value="4">パソコン・オフィス用品</option>
                        <option value="5">ホーム&キッチン・DIY</option>
                        <option value="6">食品・飲料・お酒</option>
                        <option value="7">ドラッグ・ビューティ</option>
                        <option value="8">ベビー・おもちゃ</option>
                        <option value="9">服・シューズ・バッグ・腕時計</option>
                        <option value="10">スポーツ&アウトドア</option>
                        <option value="11">車&バイク</option>
                    </select><br>
                    </div>
                    @if(Auth::check() == false)

                        {{--ログインしていない場合（ゲストユーザー）--}}

                        <div class="col-md-10 well" >
                            現在ユーザーログインされていません。<br>
                            商品を登録するにはログインするか、ゲストユーザーとしてユーザー情報を入力してください。<br>
                        </div>
                        <div class="col-md-4">
                            性別:
                            <input type="radio" name="sex" value="男" checked>男
                            <input type="radio" name="sex" value="女">女
                        </div>
                        <div class="col-md-4">
                            年齢:
                            <select id="age" name="age">
                                <option value="1-10">10歳以下</option>
                                <option value="11-15">10代前半</option>
                                <option value="15-19">10代後半</option>
                                <option value="20-25">20代前半</option>
                                <option value="25-29">20代後半</option>
                                <option value="30-35">30代前半</option>
                                <option value="35-39">30代後半</option>
                                <option value="40-45">40代前半</option>
                                <option value="45-49">40代後半</option>
                                <option value="50-59">50代</option>
                                <option value="60-69">60代</option>
                                <option value="70-79">70代</option>
                                <option value="80-89">80代</option>
                                <option value="90-99">90代</option>
                                <option value="100">100以上</option>
                            </select><br>
                        </div>
                        <div class="col-md-4">
                            趣味:
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

                    @endif
                    <div class="col-md-6">
                    <input type="submit" value="商品を登録する">
                        </div>
                </form>
            </div>





        </div>
        <!--body wrapper end-->
    </div>
    <!-- //general -->
    </div>
    </div>


@endsection