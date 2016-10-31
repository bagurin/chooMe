@extends('layouts.app')

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
        <!-- general -->
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">商品登録</h4>
            <div class="container">
                <div class="well">
                    データベースに商品の登録とレビュー・評価を投稿します。<br>
                    既に同名の商品がデータベースに存在した場合、画像のアップロードは行われず、<br>
                    レビューと評価のみを登録します。
                </div>


                <form method="post">
                <input type="text" id="name" name="name" placeholder="商品名">
                <input type="file" id="image" name="image">
                <select id="genres" name="genres" size="5">
                    <option value="1">飲食物</option>
                    <option value="2">腕時計</option>
                    <option value="3">家電</option>
                    <option value="4">植物</option>
                    <option value="5">文房具</option>
                </select><br>
                <input type="submit" value="商品を登録する">
                </form>
            </div>



        </div>
            <!--body wrapper end-->
        </div>
        <!-- //general -->
    </div>
    </div>


@endsection