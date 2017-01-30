@extends('layouts.layout')

@section('title')
    ChooMe |　商品検索
@stop
@section('content')



    <div class="faq">
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">商品検索</h4>
            <div class="container">



                <!-- general -->
                <div class="form" name="form1">


                    <section>
                        <iframe height="720p" width="100%" frameborder="0" id="search" name="search" src="/search-if/">

                        </iframe>
                        {{ csrf_field() }}
                    </section>

                </div>


            </div>
        </div>





    </div>
    <!--body wrapper end-->
    </div>
    <!-- //general -->
    </div>
    </div>


@endsection