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
                    <select id="rate" name="rate" size="1">
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="1">★☆☆☆☆</option>
                    </select></p><br>
                    </div>
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