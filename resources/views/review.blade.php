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
        <!-- general -->
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">レビュー登録</h4>
            <div class="container">
                <div class="well">
                    商品のレビューと評価（5段階）を登録します。
                </div>


                <form method="post" action="{{url('/review/')}}">

                    {{ csrf_field() }}

                    <input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>

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