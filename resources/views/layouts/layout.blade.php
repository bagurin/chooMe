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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="/"><img src="/images/home.png"></a>
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
			<div class="clearfix"> </div>
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
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/about/">about</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">シーン別<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">誕生日<b class="caret"></b></a>
											<ul class="dropdown-menu multi-column columns-3">
												{{--getgoodstype = 1 が　もらって嬉しかったもの 2が欲しいもの--}}
												<li class="dropdown"><a href="/scene/?pattern=1&?getgoodstype=1">test</a></li>
												</ul></li>
											<li><a href="/scene/?pattern=2&?getgoodstype=1">結婚記念日</a></li>
											<li><a href="/scene/?pattern=3&?getgoodstype=1">クリスマス</a></li>
											<li><a href="/scene/?pattern=4&?getgoodstype=1">出産祝い</a></li>
											<li><a href="/scene/?pattern=5&?getgoodstype=1">結婚祝い</a></li>
											<li><a href="/scene/?pattern=6&?getgoodstype=1">手土産</a></li>
											<li><a href="/scene/?pattern=7&?getgoodstype=1">引っ越し</a></li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<li><a href="/scene/?pattern=8&?getgoodstype=1">お中元＆お歳暮</a></li>
											<li><a href="/scene/?pattern=9&?getgoodstype=1">父の日</a></li>
											<li><a href="/scene/?pattern=10&?getgoodstype=1">母の日</a></li>
											<li><a href="/scene/?pattern=11&?getgoodstype=1">敬老の日</a></li>
											<li><a href="/scene/?pattern=12&?getgoodstype=1">卒業＆就職祝い</a></li>
											<li><a href="/scene/?pattern=13&?getgoodstype=1">入学祝い</a></li>
										</ul>
									</div>

									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">年代別<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="/age/?pattern=1&?getgoodstype=1">10歳未満</a></li>
												<li><a href="/age/?pattern=2&?getgoodstype=1">10代前半</a></li>
												<li><a href="/age/?pattern=3&?getgoodstype=1">10代後半</a></li>
												<li><a href="/age/?pattern=4&?getgoodstype=1">20代前半</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="/age/?pattern=5&?getgoodstype=1">20代後半</a></li>
												<li><a href="/age/?pattern=6&?getgoodstype=1">30代前半</a></li>
												<li><a href="/age/?pattern=7&?getgoodstype=1">30代後半</a></li>
												<li><a href="/age/?pattern=8&?getgoodstype=1">40代前半</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="/age/?pattern=9&?getgoodstype=1">40代後半</a></li>
												<li><a href="/age/?pattern=10&?getgoodstype=1">50代</a></li>
												<li><a href="/age/?pattern=11&?getgoodstype=1">60代</a></li>
												<li><a href="/age/?pattern=12&?getgoodstype=1">70歳以上</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">年代&性別<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="#">子メニュー</a>

													<ul>

														<li><a href="#">孫メニュー</a></li>

														<li><a href="#">孫メニュー</a>

															<ul>

																<li><a href="#">ひ孫メニュー</a></li>

																<li><a href="#">ひ孫メニュー</a></li>

																<li><a href="#">ひ孫メニュー</a></li>

																<li><a href="#">ひ孫メニュー</a></li>

															</ul>

														</li>

														<li><a href="#">孫メニュー</a></li>

														<li><a href="#">孫メニュー</a></li>

													</ul>

												</li>


											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="/register-and-review/">test</a></li>
							<li><a href="/list.html">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
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
</body>
</html>
