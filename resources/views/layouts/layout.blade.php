<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>@section('title')
		Title
	@show
</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/switchradio.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/faqstyle.css" type="text/css" media="all" />
<link href="/css/single.css" rel='stylesheet' type='text/css' />
<link href="/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="/css/font-awesome.min.css" />
	<link href="/css/multilevel-dropdown.css" rel="stylesheet" type="text/css" />

<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
<script	src="/js/uploadThumbs.js"></script>
	<script type="text/javascript" src="/js/jquery.alerts.js"></script>
	<script type="text/javascript" src="/js/jquery.exalertdialogs.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({

		  autoPlay: 3000, //Set AutoPlay to 3 seconds

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]

		});

	});
</script>

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
	<script src="/js/jquery-2.1.4.min.js"></script>

	<!-- Magnific Popup core JS file -->
	<script src="/js/jquery.magnific-popup.js"></script>



<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

	<SCRIPT LANGUAGE="JavaScript">
		var goodstype = strvalue;
		function UpdateLink() {
			var elements = document.getElementsByClassName("rank");
			for (var i=elements.length; i--; ) {
				if (elements[i].href.indexOf('&getgoodstype=1') != -1 && goodstype == "&getgoodstype=2") {
					elements[i].href = elements[i].href.replace(/&getgoodstype=1/g, goodstype);
				}
				if (elements[i].href.indexOf('&getgoodstype=2') != -1 && goodstype == "&getgoodstype=1") {
					elements[i].href = elements[i].href.replace(/&getgoodstype=2/g, goodstype);
				}
			}
//			document.getElementById("rank").href = document.getElementById("rank").href + goodstype;
		}
		function SetGetgoodsType(strvalue) {
			goodstype =  strvalue;
		}
	</SCRIPT>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="/"><img src="/images/home.png"></a>
			 </div>
			<div class="wantget">
				<input type="radio" name="wantget" id="on" value="&getgoodstype=1" checked="" onclick="SetGetgoodsType(this.value); UpdateLink()">
				<label for="on" class="switch-on">定番：貰ったプレゼント</label>
				<input type="radio" name="wantget" id="off" value="&getgoodstype=2" onclick="SetGetgoodsType(this.value); UpdateLink()">
				<label for="off" class="switch-off">流行：今欲しいプレゼント</label>
			</div>
			@if(Auth::check() == false)
			<div class="w3l_sign_in_register">
				<ul>

					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>

			@else

			<div class="w3l_sign_in_register">
				<ul>

                        <a href="/mypage/">
					<img width="30px" height="30px" src="/images/usericon.png">
						<?php
					$username = Auth::user()->name;
					print $username;
					?>
                        </a>

					<li><a href="/logout">Logout</a></li>
				</ul>
			</div>
			
		@endif
			{{--<div class="clearfix"> </div>--}}
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Register</div>
							  </div>
							  <div class="form">
								<h3>ログイン</h3>
								<form action="{{ url('/login') }}" method="post">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" required value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" required placeholder="パスワード">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="checkbox">

                                                    <input type="checkbox" name="remember">アカウント情報を保存する

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                            <input type="submit" value="ログイン">



                                    </div>
									<div class="cta"><a href="{{ url('/password/reset') }}">パスワードをお忘れですか?</a></div>

								</form>

							  </div>

							  <div class="form">
								<h3>新規アカウント作成</h3>
								<form action="{{ url('/register') }}" method="post">
									{{ csrf_field() }}

									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="name" type="text" class="form-control" placeholder="ユーザー名	" required name="name" value="{{ old('name') }}">

											@if ($errors->has('name'))
												<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="email" type="email" class="form-control" placeholder="メールアドレス" required name="email" value="{{ old('email') }}">

											@if ($errors->has('email'))
												<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="password" type="password" class="form-control" placeholder="パスワード" required name="password">

											@if ($errors->has('password'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="password-confirm" type="password" class="form-control" placeholder="パスワード(再確認)" required name="password_confirmation">

											@if ($errors->has('password_confirmation'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
									<p>性別</p>
									<input type="radio" name="sex" value="男" checked>男
									<input type="radio" name="sex" value="女">女
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

											<input type="submit" value="登録">


									</div>

								</form>
								
							  </div>

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->



















			<ul id="nav">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/p-search">商品検索</a></li>
				<li><a href="/register-and-review">商品登録</a></li>
				<li><a href="/ranking/?pattern=31&getgoodstype=1">誕生日</a>
					<span id="s1"></span>
					<ul class="subs">
						<li><a href="/ranking/?pattern=83&getgoodstype=1">誕生日【男性】</a>
							<ul>
								<li><a href="/ranking/?pattern=141&getgoodstype=1">10歳未満</a></li>

								<li><a href="/ranking/?pattern=142&getgoodstype=1">10代前半</a></li>
								<li><a href="/ranking/?pattern=143&getgoodstype=1">10代後半</a></li>
								<li><a href="/ranking/?pattern=144&getgoodstype=1">20代前半</a></li>
								<li><a href="/ranking/?pattern=145&getgoodstype=1">20代後半</a></li>
								<li><a href="/ranking/?pattern=146&getgoodstype=1">30代前半</a></li>
								<li><a href="/ranking/?pattern=147&getgoodstype=1">30歳後半</a></li>
								<li><a href="/ranking/?pattern=148&getgoodstype=1">40代前半</a></li>
								<li><a href="/ranking/?pattern=149&getgoodstype=1">40代後半</a></li>
								<li><a href="/ranking/?pattern=150&getgoodstype=1">50代</a></li>
								<li><a href="/ranking/?pattern=151&getgoodstype=1">60代</a></li>
								<li><a href="/ranking/?pattern=152&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						<li><a href="/ranking/?pattern=85&getgoodstype=1">誕生日【女性】</a>
							<ul>
								<li><a href="/ranking/?pattern=153&getgoodstype=1">10歳未満</a></li>
								<li><a href="/ranking/?pattern=154&getgoodstype=1">10代前半</a></li>
								<li><a href="/ranking/?pattern=155&getgoodstype=1">10代後半</a></li>
								<li><a href="/ranking/?pattern=156&getgoodstype=1">20代前半</a></li>
								<li><a href="/ranking/?pattern=157&getgoodstype=1">20代後半</a></li>
								<li><a href="/ranking/?pattern=158&getgoodstype=1">30代前半</a></li>
								<li><a href="/ranking/?pattern=159&getgoodstype=1">30歳後半</a></li>
								<li><a href="/ranking/?pattern=160&getgoodstype=1">40代前半</a></li>
								<li><a href="/ranking/?pattern=161&getgoodstype=1">40代後半</a></li>
								<li><a href="/ranking/?pattern=162&getgoodstype=1">50代</a></li>
								<li><a href="/ranking/?pattern=163&getgoodstype=1">60代</a></li>
								<li><a href="/ranking/?pattern=164&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>

					</ul>
				</li>
				<li><a href="/ranking/?pattern=33&getgoodstype=1">クリスマス</a>
					<span id="s2"></span>
					<ul class="subs">
						<li><a href="/ranking/?pattern=84&getgoodstype=1">クリスマス【男性】</a>
							<ul>
								<li><a href="/ranking/?pattern=165&getgoodstype=1">10歳未満</a></li>
								<li><a href="/ranking/?pattern=166&getgoodstype=1">10代前半</a></li>
								<li><a href="/ranking/?pattern=167&getgoodstype=1">10代後半</a></li>
								<li><a href="/ranking/?pattern=168&getgoodstype=1">20代前半</a></li>
								<li><a href="/ranking/?pattern=169&getgoodstype=1">20代後半</a></li>
								<li><a href="/ranking/?pattern=170&getgoodstype=1">30代前半</a></li>
								<li><a href="/ranking/?pattern=171&getgoodstype=1">30歳後半</a></li>
								<li><a href="/ranking/?pattern=172&getgoodstype=1">40代前半</a></li>
								<li><a href="/ranking/?pattern=173&getgoodstype=1">40代後半</a></li>
								<li><a href="/ranking/?pattern=174&getgoodstype=1">50代</a></li>
								<li><a href="/ranking/?pattern=175&getgoodstype=1">60代</a></li>
								<li><a href="/ranking/?pattern=176&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						<li><a href="/ranking/?pattern=34&getgoodstype=1">クリスマス【女性】</a>
							<ul>
								<li><a href="/ranking/?pattern=177&getgoodstype=1">10歳未満</a></li>
								<li><a href="/ranking/?pattern=178&getgoodstype=1">10代前半</a></li>
								<li><a href="/ranking/?pattern=179&getgoodstype=1">10代後半</a></li>
								<li><a href="/ranking/?pattern=180&getgoodstype=1">20代前半</a></li>
								<li><a href="/ranking/?pattern=181&getgoodstype=1">20代後半</a></li>
								<li><a href="/ranking/?pattern=182&getgoodstype=1">30代前半</a></li>
								<li><a href="/ranking/?pattern=183&getgoodstype=1">30歳後半</a></li>
								<li><a href="/ranking/?pattern=184&getgoodstype=1">40代前半</a></li>
								<li><a href="/ranking/?pattern=185&getgoodstype=1">40代後半</a></li>
								<li><a href="/ranking/?pattern=186&getgoodstype=1">50代</a></li>
								<li><a href="/ranking/?pattern=187&getgoodstype=1">60代</a></li>
								<li><a href="/ranking/?pattern=188&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#s3">商品ジャンル別</a>
					<span id="s3"></span>
					<ul class="subs">
						<li><a class="rank" href="/ranking/?pattern=44&getgoodstype=1">本</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=111&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=189&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=190&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=191&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=192&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=193&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=194&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=195&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=196&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=197&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=198&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=199&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=200&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=126&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=369&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=370&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=371&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=372&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=373&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=374&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=375&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=376&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=377&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=378&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=379&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=380&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=45&getgoodstype=1">DVD・音楽</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=112&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=221&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=202&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=203&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=204&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=205&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=206&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=207&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=208&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=209&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=210&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=211&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=212&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=127&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=381&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=382&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=383&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=384&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=385&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=386&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=387&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=388&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=389&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=390&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=391&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=392&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=46&getgoodstype=1">TVゲーム</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=113&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=213&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=214&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=215&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=216&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=217&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=218&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=219&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=220&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=221&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=222&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=223&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=224&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=128&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=393&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=394&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=395&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=396&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=397&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=398&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=399&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=400&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=401&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=402&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=403&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=404&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=47&getgoodstype=1">家電・カメラ・AV機器</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=114&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=225&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=226&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=227&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=228&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=229&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=230&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=231&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=232&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=233&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=234&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=235&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=236&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=129&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=405&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=406&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=407&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=408&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=409&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=410&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=411&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=412&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=413&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=414&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=415&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=416&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=48&getgoodstype=1">パソコン・オフィス用品</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=115&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=237&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=238&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=239&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=240&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=241&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=242&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=243&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=244&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=245&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=246&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=247&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=248&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=130&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=417&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=418&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=419&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=420&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=421&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=422&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=423&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=424&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=425&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=426&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=427&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=428&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=49&getgoodstype=1">ホーム＆キッチン・DIY</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=116&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=249&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=250&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=251&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=252&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=253&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=254&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=255&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=256&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=257&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=258&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=259&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=260&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=131&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=429&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=430&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=431&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=432&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=433&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=434&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=435&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=436&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=437&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=438&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=439&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=440&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=50&getgoodstype=1">食品・飲料・お酒</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=117&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=261&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=262&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=263&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=264&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=265&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=266&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=267&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=268&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=269&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=270&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=271&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=272&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=132&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=441&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=442&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=443&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=444&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=445&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=446&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=447&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=448&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=449&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=450&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=451&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=452&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=51&getgoodstype=1">ドラッグ＆ビューティー</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=118&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=273&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=274&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=275&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=276&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=277&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=278&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=279&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=280&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=281&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=282&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=283&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=284&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=133&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=453&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=454&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=455&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=456&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=457&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=458&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=459&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=460&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=461&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=462&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=463&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=464&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=52&getgoodstype=1">ベビー＆おもちゃ</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=119&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=285&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=286&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=287&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=288&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=289&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=290&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=291&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=292&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=293&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=294&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=295&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=296&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=134&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=465&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=466&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=467&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=468&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=469&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=470&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=471&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=472&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=473&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=474&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=475&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=476&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=53&getgoodstype=1">服</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=120&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=297&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=298&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=299&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=300&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=301&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=302&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=303&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=304&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=305&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=306&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=307&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=308&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=135&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=477&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=478&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=479&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=480&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=481&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=482&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=483&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=484&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=485&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=486&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=487&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=488&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=54&getgoodstype=1">シューズ</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=121&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=309&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=310&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=311&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=312&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=313&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=314&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=315&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=316&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=317&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=318&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=319&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=320&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=136&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=489&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=490&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=491&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=492&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=493&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=494&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=495&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=496&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=497&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=498&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=499&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=500&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" class="rank"href="/ranking/?pattern=55&getgoodstype=1">バッグ</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=122&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=321&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=322&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=323&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=324&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=325&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=326&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=327&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=328&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=329&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=330&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=331&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=332&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=137&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=501&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=502&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=503&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=504&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=505&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=506&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=507&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=508&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=509&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=510&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=511&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=512&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=56&getgoodstype=1">腕時計</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=123&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=333&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=334&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=335&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=336&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=337&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=338&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=339&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=340&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=341&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=342&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=343&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=344&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=138&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=513&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=514&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=515&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=516&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=517&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=518&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=519&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=520&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=521&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=522&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=523&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=524&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=57&getgoodstype=1">スポーツ＆アウトドア</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=124&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=345&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=346&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=347&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=348&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=349&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=350&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=351&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=352&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=353&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=354&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=355&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=356&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=139&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=525&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=526&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=527&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=528&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=529&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=530&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=531&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=532&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=533&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=534&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=535&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=536&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/ranking/?pattern=58&getgoodstype=1">車＆バイク</a>
							<ul class="subs">
								<li><a class="rank" href="/ranking/?pattern=125&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=357&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=358&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=359&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=360&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=361&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=362&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=363&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=364&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=365&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=366&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=367&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=368&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/ranking?pattern=140&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/ranking/?pattern=537&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/ranking/?pattern=538&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=539&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=540&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=541&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=542&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=543&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=544&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/ranking/?pattern=545&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/ranking/?pattern=546&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/ranking/?pattern=547&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/ranking/?pattern=548&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>

				</li>
				<li><a href="#s4">その他シーン別</a>
					<span id="s4"></span>
					<ul class="subs">
						<li><a href="/ranking/?pattern=32&getgoodstype=1">結婚記念日</a></li>
						<li><a href="/ranking/?pattern=34&getgoodstype=1">出産祝い</a></li>
						<li><a href="/ranking/?pattern=35&getgoodstype=1">結婚祝い</a></li>
						<li><a href="/ranking/?pattern=36&getgoodstype=1">手土産</a></li>
						<li><a href="/ranking/?pattern=37&getgoodstype=1">引っ越し</a></li>
						<li><a href="/ranking/?pattern=38&getgoodstype=1">お中元＆お歳暮</a></li>
						<li><a href="/ranking/?pattern=39&getgoodstype=1">父の日</a></li>
						<li><a href="/ranking/?pattern=40&getgoodstype=1">母の日</a></li>
						<li><a href="/ranking/?pattern=41&getgoodstype=1">敬老の日</a></li>
						<li><a href="/ranking/?pattern=42&getgoodstype=1">卒業＆就職祝い</a></li>
						<li><a href="/ranking/?pattern=43&getgoodstype=1">入学祝い</a></li>
					</ul>
				</li>
				<li><a href="#s5">年代別</a>
					<span id="s5"></span>
					<ul class="subs">
						<li><a class="rank" href="/ranking/?pattern=1&getgoodstype=1">男性</a>
							<ul>
								<li><a class="rank" href="/ranking/?pattern=59&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/ranking/?pattern=60&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=61&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=62&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=63&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=64&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=65&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=66&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=67&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=68&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/ranking/?pattern=69&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/ranking/?pattern=70&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						</li>
						<li><a class="rank" href="/ranking/?pattern=2&getgoodstype=1">女性</a>
							<ul>
								<li><a class="rank" href="/ranking/?pattern=71&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/ranking/?pattern=72&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=73&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=74&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=75&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=76&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=77&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=78&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/ranking/?pattern=79&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/ranking/?pattern=80&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/ranking/?pattern=81&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/ranking/?pattern=82&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
					</ul>
				<li><a href="#s6">趣味別</a>
					<span id="s6"></span>
					<ul class="subs">
						<li><a class="rank" href="/ranking/?pattern=15&getgoodstype=1">スポーツ</a></li>
						<li><a class="rank" href="/ranking/?pattern=16&getgoodstype=1">読書</a></li>
						<li><a class="rank" href="/ranking/?pattern=17&getgoodstype=1">PC</a></li>
						<li><a class="rank" href="/ranking/?pattern=18&getgoodstype=1">旅行</a></li>
						<li><a class="rank" href="/ranking/?pattern=19&getgoodstype=1">音楽</a></li>
						<li><a class="rank" href="/ranking/?pattern=20&getgoodstype=1">映画鑑賞</a></li>
						<li><a class="rank" href="/ranking/?pattern=21&getgoodstype=1">ドライブ</a></li>
						<li><a class="rank" href="/ranking/?pattern=22&getgoodstype=1">ゲーム</a></li>
						<li><a class="rank" href="/ranking/?pattern=23&getgoodstype=1">料理</a></li>
						<li><a class="rank" href="/ranking/?pattern=24&getgoodstype=1">お酒</a></li>
						<li><a class="rank" href="/ranking/?pattern=25&getgoodstype=1">ショッピング</a></li>
						<li><a class="rank" href="/ranking/?pattern=26&getgoodstype=1">手芸&裁縫</a></li>
						<li><a class="rank" href="/ranking/?pattern=27&getgoodstype=1">グルメ</a></li>
						<li><a class="rank" href="/ranking/?pattern=28&getgoodstype=1">ガーデニング</a></li>
						<li><a class="rank" href="/ranking/?pattern=29&getgoodstype=1">アイドル</a></li>
						<li><a class="rank" href="/ranking/?pattern=30&getgoodstype=1">その他</a></li>
					</ul>
				</li>

				</li>


			</ul>

	{{--</div>--}}
<!-- //nav -->
@yield('content')
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<a href="/"><img src="/images/home.png"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 ChooMe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>


			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->


<script>
	$(document).ready(function() {
		$('.open-popup-link').magnificPopup({
			type:'inline'
		});
	});
</script>
</body>
</html>





