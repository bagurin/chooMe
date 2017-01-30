@extends('layouts.layout')

@section('content')

    <style>
        label {
            margin-left: 0em;
        }
        .pink-button {
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
        .pink-button:hover {
            background-color: #fc6c6c;
        }
        .pink-button:hover {
            background-color: #fc6c6c;
        }
        .pink-button:active {
            box-shadow: #f75454 1px 1px 1px;
            position: relative;
            top: 1px; left: 1px;
        }
        .pink-button input {
            display: none;
        }
    </style>


    <div class="faq">
        <!-- general -->
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">レビュー登録</h4>
            <div class="container">
                <div class="well">
                    商品のレビューと評価（5段階）を登録します。
                </div>


                <form method="post" action="{{url('/review/')}}">

                    {{ csrf_field() }}
                    <div class="col-md-12">
                    <input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>
                    </div>
                    <div class="col-md-12">
                    <textarea name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" maxlength="100"></textarea>
                    </div>
                    <div class="col-md-12">
                        シーン:
                        <select id="scene" name="scene">
                            <option value="1">誕生日</option>
                            <option value="2">結婚記念日</option>
                            <option value="3">クリスマス</option>
                            <option value="4">出産祝い</option>
                            <option value="5">結婚祝い</option>
                            <option value="6">手土産</option>
                            <option value="7">引っ越し</option>
                            <option value="8">お中元＆お歳暮</option>
                            <option value="9">父の日</option>
                            <option value="10">母の日</option>
                            <option value="11">敬老の日</option>
                            <option value="12">卒業＆就職祝い</option>
                            <option value="13">入学祝い</option>

                        </select><br>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="wantgood" value="1" checked>もらって嬉しかったもの
                        <input type="radio" name="wantgood" value="2">欲しいもの
                    </div>
                    <div class="col-md-6">
                    <p>評価
                    <select id="rate" name="select" size="1">
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="1">★☆☆☆☆</option>
                    </select></p><br>
                    </div>

                    @if(Auth::check() == false)

                        {{--ログインしていない場合（ゲストユーザー）--}}

                        <div class="col-md-12 well" >
                            現在ユーザーログインされていません。<br>
                            商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>
                        </div>
                        <div class="col-md-3">
                            性別:
                            <input type="radio" name="sex" value="1" checked>男
                            <input type="radio" name="sex" value="2">女
                        </div>
                        <div class="col-md-5">
                            年齢:
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
                                <
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
                    <div class="col-md-12">
                    <label class="pink-button"><input type="submit">レビューを登録する</label>
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