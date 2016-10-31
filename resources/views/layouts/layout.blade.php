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

			<div class="w3l_sign_in_register">
				<ul>

					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
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
								<div class="tooltip">REGISTER</div>
							  </div>
							  <div class="form">
								<h3>ログイン</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="ユーザー名" required="">
								  <input type="password" name="Password" placeholder="パスワード" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>新規アカウント作成</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="ユーザー名" required="">
								  <input type="password" name="password" id="password" placeholder="パスワード" required="">
									<input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="パスワード（確認)" required="">
								  <input type="email" name="Email" placeholder="メールアドレス" required="">
									<p>年齢</p>
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
									<p>性別</p>
									<input type="radio" name="sex" value="男" checked>男
									<input type="radio" name="sex" value="女">女
									<p>趣味</p>
									<select id="hobby" name="hobby">
										<option value="sport">スポーツ</option>
										<option value="book">読書</option>
										<option value="pc">PC</option>
										<option value="trip">旅行</option>
										<option value="music">音楽</option>
										<option value="movie">映画鑑賞</option>
										<option value="carbike">車＆バイク</option>
										<option value="game">ゲーム</option>
										<option value="cook">料理</option>
										<option value="sake">お酒</option>
										<option value="shopping">ショッピング</option>
										<option value="sewing">手芸＆裁縫</option>
										<option value="gourmet">グルメ</option>
										<option value="gardening">ガーデニング</option>
										<option value="idol">アイドル</option>
										<option value="etc">その他</option>
									</select><br>
									<p>
								<input type="submit" value="Register">
							</p>
								</form>
								<!-- <script>
  								//var form = document.forms[0];
  								form.onsubmit = function() {
    								// エラーメッセージをクリアする
							    	form.password.setCustomValidity("");
    								// パスワードの一致確認
    								if (form.password.value != form.passwordConfirm.value) {
      								// 一致していなかったら、エラーメッセージを表示する
      								form.password.setCustomValidity("パスワードと確認用パスワードが一致しません");
    								}
  								};
  							// 入力値チェックエラーが発生したときの処理
  							//form.addEventListener("invalid", function() {
    							//document.getElementById("errorMessage").innerHTML = "入力値にエラーがあります";
  							//}, false);
								</script> -->
							  </div>
							  <div class="cta"><a href="#">パスワードをお忘れですか?</a></div>
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
											<li><a href="/scene/">誕生日</a></li>
											<li><a href="/scene/">結婚記念日</a></li>
											<li><a href="/scene/">クリスマス</a></li>
											<li><a href="/scene/">出産祝い</a></li>
											<li><a href="/scene/">結婚祝い</a></li>
											<li><a href="/scene/">手土産</a></li>
											<li><a href="/scene/">引っ越し</a></li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<li><a href="/genres.html">お中元＆お歳暮</a></li>
											<li><a href="/genres.html">父の日</a></li>
											<li><a href="/genres.html">母の日</a></li>
											<li><a href="/genres.html">敬老の日</a></li>
											<li><a href="/genres.html">卒業＆就職祝い</a></li>
											<li><a href="/genres.html">入学祝い</a></li>
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
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="/genres.html">10歳以下</a></li>
												<li><a href="/genres.html">10代前半</a></li>
												<li><a href="/genres.html">10代後半</a></li>
												<li><a href="/genres.html">20代前半</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="/genres.html">20代後半</a></li>
												<li><a href="/genres.html">30代前半</a></li>
												<li><a href="/genres.html">30代後半</a></li>
												<li><a href="/genres.html">40代前半</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="/genres.html">40代後半</a></li>
												<li><a href="/genres.html">50代</a></li>
												<li><a href="/genres.html">60代</a></li>
												<li><a href="/genres.html">70代</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="/genres.html">80代</a></li>
												<li><a href="/genres.html">90代</a></li>
												<li><a href="/genres.html">100以上</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>

							<li><a href="/product-register">商品登録</a></li>
							<li><a href="/short-codes.html">Short Codes</a></li>
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
