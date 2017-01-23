@extends('layouts.layout')

@foreach($goods_data as $data)
@section('title')
    ChooMe |　{{$data['name']}}
@stop

@section('content')

	<?php
	function rateToStar($average_rate){
		$avgrate = round($average_rate,1);
		switch($avgrate){
			case 0:
			case 0.1:
			case 0.2:
			case 0.3:
				echo'
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 0.4:
			case 0.5:
			case 0.6:
			case 0.7:
				echo'
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 0.8:
			case 0.9:
			case 1:
			case 1.1:
			case 1.2:
			case 1.3:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 1.4:
			case 1.5:
			case 1.6:
			case 1.7:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 1.8:
			case 1.9:
			case 2:
			case 2.1:
			case 2.2:
			case 2.3:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 2.4:
			case 2.5:
			case 2.6:
			case 2.7:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 2.8:
			case 2.9:
			case 3:
			case 3.1:
			case 3.2:
			case 3.3:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 3.4:
			case 3.5:
			case 3.6:
			case 3.7:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 3.8:
			case 3.9:
			case 4:
			case 4.1:
			case 4.2:
			case 4.3:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 4.4:
			case 4.5:
			case 4.6:
			case 4.7:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            </p>';
				break;
			case 4.8:
			case 4.9:
			case 5:
				echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            </p>';
				break;
		}
		}
		?>



<!-- single -->
<script>
	function wantch(){
		document.forms.reviewform.comment.placeholder = "欲しい理由(100文字以内)";
		$("#ratelabel").attr("hidden","hidden");
		$("#rate").attr("hidden","hidden");
		$("#scenelabel").attr("hidden", "hidden");
		$("#scene").attr("hidden", "hidden");
	}
	function reviewch() {
		document.forms.reviewform.comment.placeholder = "レビュー(100文字以内)";
		$("#ratelabel").removeAttr("hidden");
		$("#rate").removeAttr("hidden");
		$("#scenelabel").removeAttr("hidden", "hidden");
		$("#scene").removeAttr("hidden", "hidden");
	}
</script>

<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->

			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					<div class="all-comments">
					<div class="song">
						<div class="song-info">
							<h2>{{$data['name']}}</h2>
					</div>
						<div class="video-grid-single-page-agileits">
							<img src={{$data['image']}} alt="" class="img-responsive-single" /> </div>
						</div>
						<br>
						<p>商品名：{{$data['name']}}</p>
						<p>ジャンル：{{$data['genres']}}</p>
						<p></p>
					</div>



						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
                    <div class="all-comments">
                        <div class="all-comments-info">
                            <a href="#">レビュー投稿</a>
                            <div class="agile-info-wthree-box">
                                <form method="post" name="reviewform" action="{{url('/single/')}}">

                                    {{ csrf_field() }}
                                    {{--<div class="col-md-12">--}}
                                        {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}
                                    {{--</div>--}}
                                    <input type="hidden" name="goodsid" value={{$data['id']}}><br>

                                        <textarea name="comment" id="comment" rows="4" cols="40" placeholder="レビュー(100文字以内)" maxlength="100"></textarea>


                                        <p id="scenelabel">シーン:
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

                                        </select></p><br>


									<input type="radio" name="wantgood" value="1" id="good" onclick="reviewch()" checked>もらったもの
									<input type="radio" name="wantgood" value="2" id="want" onclick="wantch()">欲しいもの


									<p id="ratelabel">評価
                                            <select id="rate" name="rate" size="1">
                                                <option value="5">★★★★★</option>
                                                <option value="4">★★★★☆</option>
                                                <option value="3">★★★☆☆</option>
                                                <option value="2">★★☆☆☆</option>
                                                <option value="1">★☆☆☆☆</option>
                                            </select></p><br>


                                    @if(Auth::check() == false)

                                        {{--ログインしていない場合（ゲストユーザー）--}}

									<div class="well">
                                            現在ユーザーログインされていません。<br>
                                            商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>
									</div>
                                            性別:
                                            <input type="radio" name="sex" value="1" checked>男
                                            <input type="radio" name="sex" value="2">女
									<br>

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

                                            </select><br>


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

                                    @endif

                                        <label class="pink-button"><input type="submit"></label>

                                </form>
                            </div>
                        </div>
                    </div>


					<div class="all-comments">
						<h3>貰ったプレゼントのレビュー</h3>
                        @foreach($getgoods as $getreview)
						<div class="media-grids">

							<div class="media">
								<div class="media-left">
									<a href="#">
										<img src="/images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>{{$getreview['comment']}}</p>
									<span>レート:{{rateToStar($getreview['rate'])}}</span>
								</div>
							</div>




						</div>
                        @endforeach

				</div>




    <div class="all-comments">
        <h3>欲しい理由</h3>
        @foreach($wantgoods as $wantreview)
            <div class="media-grids">

                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img src="/images/user.jpg" title="One movies" alt=" " />
                        </a>
                    </div>
                    <div class="media-body">
                        <p>{{$wantreview['comment']}}</p>
                    </div>
                </div>




            </div>
        @endforeach

    </div>

    @endforeach


				
				<div class="clearfix"> </div>
			</div>
				<!-- //movie-browse-agile -->
				<!--body wrapper start-->

		<!--body wrapper end-->
						
							 
				</div>
				<!-- //w3l-latest-movies-grids -->

	<!-- //w3l-medile-movies-grids -->
	
@endsection