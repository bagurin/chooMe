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
<!-- /w3l-medile-movies-grids -->
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->

        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">ランキングTOP20</h4>


                </div>
                <div class="Latest-tv-series">

                    <div class="container">
                        <div class="tittle-head">
                        <h2 class="latest-text">TOP3</h2>
                            </div>
                        <ul class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        {{--<div class="agile_tv_series_grid">--}}
                                            <div class="col-md-6 agile_tv_series_grid_left">

                                                    <img src="/images/present6.jpg" alt=" " class="img-responsive" />



                                            </div>
                                            <div class="col-md-6 agile_tv_series_grid_right">
                                                <p class="fexi_header">Test 1位プレゼント</p>
                                                <p class="fexi_header_para"><span>レビュー<label>:</label></span> 代表的なコメントをここに表示する</p>
                                                {{--<p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>--}}
                                                <p class="fexi_header_para">
                                                    <span>ジャンル<label>:</label></span>
                                                    <a href="genres.html">腕時計</a>
                                                    </p>
                                                <p class="fexi_header_para">
                                                    <span>シーン<label>:</label> </span>
                                                    <a href="scene">父の日</a> |
                                                    <a href="scene">卒業＆就職祝い</a>
                                                </p>

                                                <p class="fexi_header_para fexi_header_para1"><span>評価<label>:</label></span>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="agile_tv_series_grid">
                                        <div class="col-md-6 agile_tv_series_grid_left">

                                            <img src="/images/present3.jpg" alt=" " class="img-responsive" />



                                        </div>

                                        <div class="col-md-6 agile_tv_series_grid_right">
                                            <p class="fexi_header">Test 2位プレゼント</p>
                                            <p class="fexi_header_para"><span>レビュー<label>:</label></span> 代表的なコメントをここに表示する</p>
                                            {{--<p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>--}}
                                            <p class="fexi_header_para">
                                                <span>ジャンル<label>:</label></span>
                                                <a href="genres.html">お酒</a>
                                            </p>
                                            <p class="fexi_header_para">
                                                <span>シーン<label>:</label> </span>
                                                <a href="scene">父の日</a> |
                                                <a href="scene">手土産</a>
                                            </p>

                                            <p class="fexi_header_para fexi_header_para1"><span>評価<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>
                                                <div class="clearfix"> </div>
                                        </div>

                                        <div class="agile_tv_series_grid">
                                            <div class="col-md-6 agile_tv_series_grid_left">

                                                <img src="/images/present1.jpg" alt=" " class="img-responsive" />



                                            </div>
                                            <div class="col-md-6 agile_tv_series_grid_right">
                                                <p class="fexi_header">Test 3位プレゼント</p>
                                                <p class="fexi_header_para"><span>レビュー<label>:</label></span> 代表的なコメントをここに表示する</p>
                                                {{--<p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>--}}
                                                <p class="fexi_header_para">
                                                    <span>ジャンル<label>:</label></span>
                                                    <a href="genres.html">ガーデニング</a>
                                                </p>
                                                <p class="fexi_header_para">
                                                    <span>シーン<label>:</label> </span>
                                                    <a href="scene">母の日</a> |
                                                    <a href="scene">入学祝い</a>
                                                </p>

                                                <p class="fexi_header_para fexi_header_para1"><span>評価<label>:</label></span>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                            </ul>
                                        </div>
                                    </ul>
                                        <container>
                                            <div class="tittle-head">
                                            <h2 class="latest-text">4位〜20位</h2>
                                            </div>
                                            <div class="agileinfo_flexislider_grids">
                                                <div class="col-md-4 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present1.jpg" title="album-name" class="img-responsive" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 4位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>4位</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present2.jpg" title="album-name" class="img-responsive" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 5位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>5位</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present3.jpg" title="album-name" class="img-responsive" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 6位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>6位</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present4.jpeg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 7位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>7位</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present5.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 8位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>8位</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present6.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 9位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>9位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present1.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 10位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>10位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present2.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 11位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>11位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present3.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 12位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>12位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present4.jpeg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 13位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>13位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present5.jpg" title="album-name" class="img-responsive-rank" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 14位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>14位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present6.jpg" title="album-name" class="img-responsive-rank-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 15位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>15位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present1.jpg" title="album-name" class="img-responsive-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 16位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>16位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present2.jpg" title="album-name" class="img-responsive-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 17位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>17位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present3.jpg" title="album-name" class="img-responsive-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 18位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>18位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present4.jpeg" title="album-name" class="img-responsive-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 19位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>19位</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 w3l-movie-gride-agile">
                                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present5.jpg" title="album-name" class="img-responsive-low" alt=" " />

                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="single.html">Test 20位プレゼント</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">

                                                            <div class="block-stars">
                                                                <ul class="w3l-ratings">
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>20位</p>
                                                    </div>
                                                </div>



                                                <div class="clearfix"> </div>
                                            </div>
                                        </container>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </section>
                        <!-- flexSlider -->
                        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
                        <script defer src="/js/jquery.flexslider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function(){
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                        $('body').removeClass('loading');
                                    }
                                });
                            });
                        </script>
                        <!-- //flexSlider -->
                    </div>
                </div>
                <!-- pop-up-box -->
                <script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
        <!-- //movie-browse-agile -->
        <!--body wrapper start-->
        <!--body wrapper start-->
        <div class="review-slider">
            <h4 class="latest-text">Movie Reviews</h4>
            <div class="container">
                <div class="w3_agile_banner_bottom_grid">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m13.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Citizen Soldier</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">X-Men</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m12.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Greater</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Light B/t Oceans</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">The BFG</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Central Intelligence</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Don't Think Twice</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Peter</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/m15.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">God’s Compass</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--body wrapper end-->
            </div>
        </div>
    </div>
    <!-- //w3l-medile-movies-grids -->
</div>
<!-- //comedy-w3l-agileits -->
@endsection