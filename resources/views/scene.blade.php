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
                                        @foreach($ranking as $rank)
                                        @if($rank['ranking_no'] < 4)
                                            <div class="col-md-6 agile_tv_series_grid_left">

                                                <img src= {{$rank['image']}}  class="img-responsive" />



                                            </div>
                                            <div class="col-md-6 agile_tv_series_grid_right">
                                                <p class="fexi_header">Test {{$rank['ranking_no']}}位プレゼント</p>

                                                <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>
                                                <p class="fexi_header_para">
                                                    <span>ジャンル<label>:</label></span>
                                                    {{$rank['genres']}}
                                                </p>
                                                <p class="fexi_header_para">
                                                    <span>シーン<label>:</label> </span>
                                                    {{$rank['scenes']}}
                                                </p>
                                                <p class="fexi_header_para">
                                                    <span>レート<label>:</label></span>
                                                    {{$rank['rate']}}
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
                                {{--</ul>--}}
                            {{--</div>--}}
                            @else
                                </ul>
                                </div>
                                </ul>
                                @break
                                        @endif
                            @endforeach


                                <div class="tittle-head">
                                    <h2 class="latest-text">4位〜20位</h2>
                                </div>

                        <div class="agileinfo_flexislider_grids">
                                @foreach($ranking as $rank)
                                @if($rank['ranking_no'] < 4)
                                {{--*/$rank['ranking_no'] = 4; /*--}}

                                    @elseif($rank['ranking_no'] < 7)



                                    <div class="col-md-4 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present1.jpg" title="album-name" class="img-responsive" alt=" " />

                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
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
                                            <p>{{$rank['ranking_no']}}位</p>
                                        </div>
                                    </div>


                                                @else

                                            </div>
                                        </ul>
                                        @break
                                    @endif
                                @endforeach

                        @foreach($ranking as $rank)
                            @if($rank['ranking_no'] < 7)
                                {{--*/$rank['ranking_no'] = 7; /*--}}
                            @elseif($rank['ranking_no'] < 15)

                                <div class="col-md-3 w3l-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present4.jpeg" title="album-name" class="img-responsive-rank" alt=" " />
                                     </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
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
                                        <p>{{$rank['ranking_no']}}位</p>
                                    </div>
                                </div>
                            @else
                            </div>
                        </ul>
                    @break
                    @endif
                    @endforeach

                    @foreach($ranking as $rank)
                        @if($rank['ranking_no'] < 15)
                            {{--*/$rank['ranking_no'] = 7; /*--}}
                        @elseif($rank['ranking_no'] < 21)




                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present6.jpg" title="album-name" class="img-responsive-rank-low" alt=" " />

                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
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
                                    <p>{{$rank['ranking_no']}}位</p>
                                </div>
                            </div>

                        @else
                </div>
                </ul>
                @break
                @endif
                @endforeach






                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
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

                <!--body wrapper end-->
            </div>
        </div>
    </div>
    <!-- //w3l-medile-movies-grids -->
</div>
<!-- //comedy-w3l-agileits -->
@endsection