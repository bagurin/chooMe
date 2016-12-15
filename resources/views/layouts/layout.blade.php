<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ChooMe | Home </title>
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
				<label for="on" class="switch-on">【もらって嬉しかったもの】モード</label>
				<input type="radio" name="wantget" id="off" value="&getgoodstype=2" onclick="SetGetgoodsType(this.value); UpdateLink()">
				<label for="off" class="switch-off">【今欲しいもの】モード</label>
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
                                            <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="パスワード">

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
											<input id="name" type="text" class="form-control" placeholder="ユーザー名	" name="name" value="{{ old('name') }}">

											@if ($errors->has('name'))
												<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="email" type="email" class="form-control" placeholder="メールアドレス" name="email" value="{{ old('email') }}">

											@if ($errors->has('email'))
												<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="password" type="password" class="form-control" placeholder="パスワード" name="password">

											@if ($errors->has('password'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


										<div class="col-md-12">
											<input id="password-confirm" type="password" class="form-control" placeholder="パスワード(再確認)" name="password_confirmation">

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
				<li><a href="/about">About</a></li>
				<li><a href="#s1">誕生日</a>
					<span id="s1"></span>
					<ul class="subs">
						<li><a class="rank" href="/scene/?pattern=11&getgoodstype=1">誕生日【男性】</a>
							<ul>
								<li><a class="rank" href="/scene/?pattern=111&getgoodstype=1">10歳未満</a></li>

								<li><a class="rank" href="/scene/?pattern=121&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=131&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=141&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=151&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=161&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=171&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/scene/?pattern=181&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=191&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=1101&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/scene/?pattern=1111&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/scene/?pattern=1121&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						<li><a class="rank" href="/scene/?pattern=21&getgoodstype=1">誕生日【女性】</a>
							<ul>
								<li><a class="rank" href="/scene/?pattern=211&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/scene/?pattern=221&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=231&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=241&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=251&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=261&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=271&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/scene/?pattern=281&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=291&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=2101&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/scene/?pattern=2111&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/scene/?pattern=2121&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>

					</ul>
				</li>
				<li><a href="#s2">クリスマス</a>
					<span id="s2"></span>
					<ul class="subs">
						<li><a class="rank" href="/scene/?pattern=13&getgoodstype=1">クリスマス【男性】</a>
							<ul>
								<li><a class="rank" href="/scene/?pattern=113&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/scene/?pattern=123&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=133&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=143&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=153&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=163&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=173&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/scene/?pattern=183&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=193&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=1103&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/scene/?pattern=1113&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/scene/?pattern=1123&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						<li><a class="rank" href="/scene/?pattern=23&getgoodstype=1">クリスマス【女性】</a>
							<ul>
								<li><a class="rank" href="/scene/?pattern=213&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/scene/?pattern=223&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=233&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=243&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=253&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=263&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=273&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/scene/?pattern=283&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/scene/?pattern=293&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/scene/?pattern=2103&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/scene/?pattern=2113&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/scene/?pattern=2123&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#s3">商品ジャンル別</a>
					<span id="s3"></span>
					<ul class="subs">
						<li><a class="rank" href="/genre/?pattern=1&getgoodstype=1">本</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=11&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=111&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=121&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=131&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=141&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=151&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=161&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=171&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=181&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=191&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1101&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1111&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1121&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=21&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=211&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=221&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=231&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=241&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=251&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=261&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=271&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=281&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=291&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2101&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2111&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2121&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=2&getgoodstype=1">DVD・音楽</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=12&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=112&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=122&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=132&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=142&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=152&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=162&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=172&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=182&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=192&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1102&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1112&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1122&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=22&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=212&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=222&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=232&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=242&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=252&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=262&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=272&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=282&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=292&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2102&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2112&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2122&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=3&getgoodstype=1">TVゲーム</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=13&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=113&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=123&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=133&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=143&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=153&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=163&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=173&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=183&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=193&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1103&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1113&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1123&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=23&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=213&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=223&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=233&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=243&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=253&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=263&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=273&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=283&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=293&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2103&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2113&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2123&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=4&getgoodstype=1">家電・カメラ・AV機器</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=14&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=114&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=124&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=134&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=144&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=154&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=164&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=174&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=184&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=194&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1104&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1114&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1124&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=24&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=214&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=224&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=234&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=244&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=254&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=264&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=274&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=284&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=294&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2104&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2114&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2124&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=5&getgoodstype=1">パソコン・オフィス用品</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=15&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=115&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=125&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=135&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=145&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=155&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=165&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=175&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=185&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=195&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1105&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1115&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1125&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=25&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=215&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=225&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=235&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=245&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=255&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=265&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=275&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=285&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=295&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2105&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2115&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2125&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=6&getgoodstype=1">ホーム＆キッチン・DIY</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=16&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=116&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=126&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=136&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=146&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=156&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=166&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=176&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=186&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=196&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1106&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1116&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1126&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=26&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=216&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=226&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=236&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=246&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=256&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=266&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=276&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=286&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=296&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2106&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2116&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2126&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=7&getgoodstype=1">食品・飲料・お酒</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=17&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=117&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=127&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=137&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=147&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=157&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=167&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=177&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=187&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=197&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1107&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1117&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1127&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a href="/genre?pattern=27&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=217&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=227&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=237&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=247&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=257&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=267&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=277&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=287&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=297&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2107&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2117&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2127&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=8&getgoodstype=1">ドラッグ＆ビューティー</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=18&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=118&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=128&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=138&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=148&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=158&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=168&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=178&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=188&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=198&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1108&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1118&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1128&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=28&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=218&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=228&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=238&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=248&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=258&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=268&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=278&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=288&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=298&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2108&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2118&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2128&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="/genre/?pattern=9&getgoodstype=1">ベビー＆おもちゃ</a>
							<ul class="subs">
								<li><a href="/genre/?pattern=19&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=119&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=129&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=139&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=149&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=159&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=169&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=179&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=189&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=199&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1109&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=1119&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=1129&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a href="/genre?pattern=29&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=219&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=229&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=239&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=249&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=259&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=269&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=279&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=289&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=299&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2109&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=2119&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=2129&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=110&getgoodstype=1">服</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=11&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1110&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1210&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1310&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1410&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1510&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1610&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1710&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1810&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1910&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11010&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11110&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11210&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=210&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2110&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2210&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2310&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2410&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2510&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2610&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2710&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2810&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2910&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21010&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21110&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21210&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=11&getgoodstype=1">シューズ</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=111&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1111&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1211&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1311&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1411&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1511&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1611&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1711&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1811&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1911&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11011&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11111&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11211&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=211&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2111&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2211&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2311&getgoodstype=1">10代後半</a></li>
										<li><a class="rank"href="/genre/?pattern=2411&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2511&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2611&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2711&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2811&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2911&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21011&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21111&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21211&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" class="rank"href="/genre/?pattern=12&getgoodstype=1">バッグ</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=112&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1112&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1212&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1312&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1412&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1512&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1612&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1712&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1812&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1912&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11012&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11112&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11212&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=212&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2112&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2212&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2312&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2412&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2512&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2612&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2712&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2812&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2912&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21012&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21112&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21212&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=13&getgoodstype=1">腕時計</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=113&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1113&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1213&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1313&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1413&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1513&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1613&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1713&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1813&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1913&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11013&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11113&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11213&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=213&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2113&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2213&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2313&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2413&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2513&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2613&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2713&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2813&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2913&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21013&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21113&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21213&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=14&getgoodstype=1">スポーツ＆アウトドア</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=114&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1114&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1214&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1314&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1414&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1514&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1614&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1714&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1814&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1914&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11014&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11114&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11214&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=214&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2114&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2214&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2314&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2414&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2514&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2614&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2714&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2814&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2914&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21014&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21114&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21214&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="rank" href="/genre/?pattern=15&getgoodstype=1">車＆バイク</a>
							<ul class="subs">
								<li><a class="rank" href="/genre/?pattern=115&getgoodstype=1">男性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=1115&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=1215&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1315&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1415&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1515&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1615&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1715&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=1815&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=1915&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=11015&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=11115&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=11215&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
								<li><a class="rank" href="/genre?pattern=215&getgoodstype=1">女性</a>
									<ul>
										<li><a class="rank" href="/genre/?pattern=2115&getgoodstype=1">10歳未満</a></li>
										<li><a class="rank" href="/genre/?pattern=2215&getgoodstype=1">10代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2315&getgoodstype=1">10代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2415&getgoodstype=1">20代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2515&getgoodstype=1">20代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2615&getgoodstype=1">30代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2715&getgoodstype=1">30代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=2815&getgoodstype=1">40代前半</a></li>
										<li><a class="rank" href="/genre/?pattern=2915&getgoodstype=1">40代後半</a></li>
										<li><a class="rank" href="/genre/?pattern=21015&getgoodstype=1">50代</a></li>
										<li><a class="rank" href="/genre/?pattern=21115&getgoodstype=1">60代</a></li>
										<li><a class="rank" href="/genre/?pattern=21215&getgoodstype=1">70歳以上</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>

				</li>
				<li><a href="#s4">その他シーン別</a>
					<span id="s4"></span>
					<ul class="subs">
						<li><a class="rank" href="/scene/?pattern=2&getgoodstype=1">結婚記念日</a></li>
						<li><a class="rank" href="/scene/?pattern=4&getgoodstype=1">出産祝い</a></li>
						<li><a class="rank" href="/scene/?pattern=5&getgoodstype=1">結婚祝い</a></li>
						<li><a class="rank" href="/scene/?pattern=6&getgoodstype=1">手土産</a></li>
						<li><a class="rank" href="/scene/?pattern=7&getgoodstype=1">引っ越し</a></li>
						<li><a class="rank" href="/scene/?pattern=8&getgoodstype=1">お中元＆お歳暮</a></li>
						<li><a class="rank" href="/scene/?pattern=9&getgoodstype=1">父の日</a></li>
						<li><a class="rank" href="/scene/?pattern=10&getgoodstype=1">母の日</a></li>
						<li><a class="rank" href="/scene/?pattern=11&getgoodstype=1">敬老の日</a></li>
						<li><a class="rank" href="/scene/?pattern=12&getgoodstype=1">卒業＆就職祝い</a></li>
						<li><a class="rank" href="/scene/?pattern=13&getgoodstype=1">入学祝い</a></li>
					</ul>
				</li>
				<li><a href="#s5">年代別</a>
					<span id="s5"></span>
					<ul class="subs">
						<li><a class="rank" href="/age/?pattern=1&getgoodstype=1">男性</a>
							<ul>
								<li><a class="rank" href="/age/?pattern=11&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/age/?pattern=12&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/age/?pattern=13&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/age/?pattern=14&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/age/?pattern=15&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/age/?pattern=16&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/age/?pattern=17&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/age/?pattern=18&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/age/?pattern=19&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/age/?pattern=110&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/age/?pattern=111&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/age/?pattern=112&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
						</li>
						<li><a class="rank" href="/age/?pattern=2&getgoodstype=1">女性</a>
							<ul>
								<li><a class="rank" href="/age/?pattern=21&getgoodstype=1">10歳未満</a></li>
								<li><a class="rank" href="/age/?pattern=22&getgoodstype=1">10代前半</a></li>
								<li><a class="rank" href="/age/?pattern=23&getgoodstype=1">10代後半</a></li>
								<li><a class="rank" href="/age/?pattern=24&getgoodstype=1">20代前半</a></li>
								<li><a class="rank" href="/age/?pattern=25&getgoodstype=1">20代後半</a></li>
								<li><a class="rank" href="/age/?pattern=26&getgoodstype=1">30代前半</a></li>
								<li><a class="rank" href="/age/?pattern=27&getgoodstype=1">30歳後半</a></li>
								<li><a class="rank" href="/age/?pattern=28&getgoodstype=1">40代前半</a></li>
								<li><a class="rank" href="/age/?pattern=29&getgoodstype=1">40代後半</a></li>
								<li><a class="rank" href="/age/?pattern=210&getgoodstype=1">50代</a></li>
								<li><a class="rank" href="/age/?pattern=211&getgoodstype=1">60代</a></li>
								<li><a class="rank" href="/age/?pattern=212&getgoodstype=1">70歳以上</a></li>
							</ul>
						</li>
					</ul>

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
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_left">
					<a href="/"><img src="/images/home.png"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 ChooMe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="/genres.html">Movies</a>
					</li>
					<li>
						<a href="/faq.html">FAQ</a>
					</li>
					<li>
						<a href="/horror.html">Action</a>
					</li>
					<li>
						<a href="/genres.html">Adventure</a>
					</li>
					<li>
						<a href="/comedy.html">Comedy</a>
					</li>
					<li>
						<a href="/icons.html">Icons</a>
					</li>
					<li>
						<a href="/contact.html">Contact Us</a>
					</li>
				</ul>
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





