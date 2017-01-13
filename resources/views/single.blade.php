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


<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->

			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h2>{{$data['name']}}</h2>
					</div>
						<div class="video-grid-single-page-agileits">
							<img src={{$data['image']}} alt="" class="img-responsive-single" /> </div>
						</div>
					</div>
					<div class="song-grid-right">

							</ul>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>

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