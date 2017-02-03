@extends('layouts.layout')
@section('title')
	ChooMe | Top
@stop
@section('content')

<!-- banner -->
<div class="container">
			<img src="/images/design.png">
</div>

    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->

<!-- //banner-bottom -->

<!-- general -->
	{{--<div class="general">--}}
		{{--<h4 class="latest-text w3_latest_text">おすすめプレゼント</h4>--}}
		{{--<div class="container">--}}
			{{--<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">--}}
				{{--<ul id="myTab" class="nav nav-tabs" role="tablist">--}}
					{{--<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">おすすめプレゼント</a></li>--}}
					{{--<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">閲覧数トッププレゼント</a></li>--}}
					{{--<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">高レートプレゼント</a></li>--}}
					{{--<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">新規追加プレゼント</a></li>--}}
				{{--</ul>--}}
				{{--<div id="myTabContent" class="tab-content">--}}
					{{--<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">--}}
						{{--<div class="w3_agile_featured_movies">--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present1.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present2.jpg" title="album-name" class="img-responsive" alt=" "  />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present3.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present4.jpeg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present5.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present5.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present6.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present1.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present2.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present3.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present4.jpeg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
								{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present5.jpg" title="album-name" class="img-responsive" alt=" " />--}}
									{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
								{{--</a>--}}
								{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
									{{--<div class="w3l-movie-text">--}}
										{{--<h6><a href="single.html">Test Present</a></h6>--}}
									{{--</div>--}}
									{{--<div class="mid-2 agile_mid_2_home">--}}
										{{--<p>2016</p>--}}
										{{--<div class="block-stars">--}}
											{{--<ul class="w3l-ratings">--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
												{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{--<div class="clearfix"></div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="ribben">--}}
									{{--<p>NEW</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="clearfix"> </div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present6.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present1.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present2.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="clearfix"> </div>--}}
					{{--</div>--}}
					{{--<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present3.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present4.jpeg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present5.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present6.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="clearfix"> </div>--}}
					{{--</div>--}}
					{{--<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present1.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present2.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present3.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present4.jpeg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-md-2 w3l-movie-gride-agile">--}}
							{{--<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/present5.jpg" title="album-name" class="img-responsive" alt=" " />--}}
								{{--<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>--}}
							{{--</a>--}}
							{{--<div class="mid-1 agileits_w3layouts_mid_1_home">--}}
								{{--<div class="w3l-movie-text">--}}
									{{--<h6><a href="single.html">Test Present</a></h6>--}}
								{{--</div>--}}
								{{--<div class="mid-2 agile_mid_2_home">--}}
									{{--<p>2016</p>--}}
									{{--<div class="block-stars">--}}
										{{--<ul class="w3l-ratings">--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
											{{--<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>--}}
										{{--</ul>--}}
									{{--</div>--}}
									{{--<div class="clearfix"></div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="ribben">--}}
								{{--<p>NEW</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="clearfix"> </div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
<!-- //general -->
<!-- Latest-tv-series -->

	<!-- pop-up-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		});
	</script>
<!-- //Latest-tv-series -->
@endsection
