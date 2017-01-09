@extends('layouts.layout')

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

<script>
    var formch = 0;
    function wantch(){
            document.forms.registform.comment.placeholder = "欲しい理由(100文字以内)";


    }
    function reviewch(){
        document.forms.registform.comment.placeholder = "レビュー(100文字以内)";
    }
</script>

    <script>
        $(function(){
            $('#registform').submit(function(){
                var name = $('#parenttext').val();
                if(name.length == 0){
                    alert("商品が指定されていません。\n商品を新規に登録するか、検索して商品を選択してください。");
                    return false;
                };
            });
        });

        $(function() {
            changeSelect();

            $("input[name=wantgood]").on('change', function() {
                changeSelect();
            });
        });

        function changeSelect() {
            $("#select").empty();
            $("#select").append($("#rate option").clone());

            if ($("input[name=wantgood]:checked").val() == 1) {
                $("#select").val(5);
                $("#select option[value=0]").remove();
                $("#select").removeAttr("hidden");
                $("#ratelabel").removeAttr("hidden");
            } else if ($("input[name=wantgood]:checked").val() == 2) {
                $("#select").attr("hidden", "hidden");
                $("#ratelabel").attr("hidden","hidden")
                $("#select").val(4);
            }
        }


        $(function(){
            $("#cancel")
                    .click(function(){
                        $("#p-register").contents().find("#name").removeAttr("disabled");
                        $("#p-register").contents().find("#name").val("");
                        $("#p-register").contents().find("#check").removeAttr("disabled");
                        $("#p-register").contents().find("#genre").removeAttr("disabled");
                        $("#p-register").contents().find("#genre").val("1");
                        $("#p-register").contents().find("#image").removeAttr("disabled");
                        $("#p-register").contents().find("#image").val("");
                        $("#p-register").contents().find("#thumb").remove();
                        document.getElementById("parenttext").value = "";
                        document.getElementById("parentgenrename").value = "";
                        document.getElementById("parentgenreid").value = "";
                        document.getElementById("parentimage").value = "";
                        document.getElementById("comment").value = "";
                        document.getElementById("rate").value = "5";
                    });
        });
    </script>





<!-- /w3l-medile-movies-grids -->
    <div class="white-popup mfp-hide" id="test-popup"  data-backdrop="static">
        <div class="modal-lg2" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    情報提供にご協力を!<font size="2">(ChooMe登録ユーザーは1日1回でOK!)</font>
                </div>
                <section>
                    <div class="modal-body">
                        <form method="post" name="registform" action="{{url('/register-and-review/')}}" id="registform">
                        {{--<div class="w3_login_module">--}}
                        <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="module form-module2">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">商品新規登録/検索切り替え</div>
                            </div>
                            <div class="form" name="form1">


                            <section>
                                <iframe height="100%" frameborder="0" id="p-register" name="p-register" src="/p-register/">

                                </iframe>
                                {{ csrf_field() }}
                            </section>

                            </div>




                            <div class="form" name="form2">
                                <section>


                                    <iframe height="100%" frameborder="0" src="/search/">

                                    </iframe>


                                    {{--<div class="well">--}}
                                    {{--商品のレビューと評価（5段階）を登録します。--}}
                                    {{--</div>--}}




                                    {{ csrf_field() }}

                                    {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}





                                </section>

                            </div>

                        </div>
                            </div>

                            <style>
                                input{
                                    margin: 10px;
                                }
                            </style>
                            <input type="text" class="form-control" name="productname" id="parenttext" value="" placeholder="商品名"  readonly="readonly"/>
                            <input type="text" class="form-control" name="genrename" id="parentgenrename" placeholder="ジャンル" readonly="readonly"/>
                            <!-- ジャンルid、画像情報はhiddenで外に-->
                            <input type="hidden" class="form-control" name="genreid" id="parentgenreid" value="" readonly="readonly"/>
                            <input type="hidden" class="form-control" name="image" id="parentimage" value="" readonly="readonly"/>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <style>
                            textarea{
                            margin:15px 0 10px 0;
                            }
                            </style>
                            <textarea width="auto" name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" maxlength="100"></textarea>
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            <style>
                                select{
                                    margin:5px;
                                }
                                .nodisp{
                                    display: none;
                                }
                            </style>
                            <p id="ratelabel">評価
                                <select id="select">
                                </select>
                                <select id="rate" name="rate" class="nodisp" size="1">
                                    <option value="5">★★★★★</option>
                                    <option value="4">★★★★☆</option>
                                    <option value="3">★★★☆☆</option>
                                    <option value="2">★★☆☆☆</option>
                                    <option value="1">★☆☆☆☆</option>
                                </select></p><br>
                        </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <style>
                                    input{
                                        margin: 5px;
                                    }

                                </style>



                                <input type="radio" name="wantgood" value="1" id="good" onclick="reviewch()" checked>もらったもの
                                <input type="radio" name="wantgood" value="2" id="want" onclick="wantch()">欲しいもの


                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <style>
                                    select{
                                        margin:5px;
                                    }
                                </style>
                                シーン:
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

                                </select><br>
                            </div>
                        @if(Auth::check() == false)

                            {{--ログインしていない場合（ゲストユーザー）--}}

                            {{--<div class="col-md-12 well" >--}}
                                {{--現在ユーザーログインされていません。<br>--}}
                                {{--商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>--}}
                            {{--</div>--}}
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                性別:
                                <input type="radio" name="sex" value="男" checked>男
                                <input type="radio" name="sex" value="女">女
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
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
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
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
                            </div>

                        @endif
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <style>
                                label{
                                    margin:17px 0 0 0;
                                }
                            </style>
                            <label class="my-file-input">
                                <input type="submit" class="send" name="send" id="send" >
                                登録する</label>
                            <label class="my-file-input">
                                <input type="button" id="cancel" name="cancel">
                                商品を選び直す
                            </label>
                        </div>
                            <style>
                                label {
                                    margin-left: 0em;
                                }
                                .my-file-input {
                                    display: inline-block;
                                    padding: 5px;
                                    width: auto;
                                    text-align: center;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    font-size: 14px;
                                    text-overflow: ellipsis;
                                    background-color: #ff9393;
                                    color: white;
                                    box-shadow: #888 2px 2px 1px;
                                    cursor: pointer;
                                }
                                .my-file-input:hover {
                                    background-color: #fc6c6c;
                                }
                                .my-file-input:hover {
                                    background-color: #fc6c6c;
                                }
                                .my-file-input:active {
                                    box-shadow: #f75454 1px 1px 1px;
                                    position: relative;
                                    top: 1px; left: 1px;
                                }
                                .my-file-input input {
                                    display: none;
                                }
                            </style>
                        </form>
                        <script type="text/javascript">
                            $('#registform').submit(function(event) {
                                // HTMLでの送信をキャンセル
                                event.preventDefault();
                                // 操作対象のフォーム要素を取得
                                var $form = $(this);
                                // 送信
                                $.ajax({
                                    url: $form.attr('action'),
                                    type: $form.attr('method'),
                                    data: $form.serialize(),

                                    // 通信成功時の処理
                                    success: function() {
                                        //モーダル閉じる
                                        $.magnificPopup.close();
                                    }
                                });
                            });
                        </script>
                    </div>


                    {{--</div>--}}
                </section>
            </div>
        </div>
    </div>
    <script>
        jQuery(function($){
            //必須入力チェック
            $.fn.requirdCheck = function(name){
                var target = this;
                if (!target.val().length) {
                    target.addClass('error');
                    jAlert(name + 'が入力されてません','入力エラー',function(){
                        target.focus();
                    });
                    return false;
                }
                return true;
            }
            $('input.send').exJConfirm(
                    '登録しますか？',
                    '登録確認',{
                        preCallback : function(){
                            $($('input.send').attr('form')).find('.error').removeClass('error')
                            return	$('input.name').requirdCheck('Name')
                        }
                    }
            );
        });
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
            if(formch == 0){
                document.registform.action = "{{url('/review/')}}";
                formch = 1;
            }else{
                document.registform.action = "{{url('/register-and-review/')}}";
                formch = 0;
            }
        });
    </script>


<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->

        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">{{ $pattern_name }}ランキングTOP20</h4>


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
                                            <div class="col-md-6 col-sm-6 col-xs-6 agile_tv_series_grid_left">

                                                <img src= {{$rank['image']}}  class="img-responsive" />



                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 agile_tv_series_grid_right">
                                                <p class="fexi_header">{{$rank['ranking_no']}}位</p>

                                                <p class="fexi_header_para"><span>商品名<label>:</label></span>{{$rank['name']}}</p>
                                                <p class="fexi_header_para">
                                                    <span>ジャンル<label>:</label></span>
                                                    {{$rank['genres']}}
                                                </p>
                                                {{--<p class="fexi_header_para">--}}
                                                    {{--<span>シーン<label>:</label> </span>--}}
                                                    {{--{{$rank['scenes']}}--}}
                                                {{--</p>--}}

                                                <p class="fexi_header_para fexi_header_para1"><span>評価<label>:</label></span>

                                                    {{rateToStar($rank['average_rate'])}}

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



                                    <div class="col-md-4 col-sm-4 col-xs-4 w3l-movie-gride-agile">
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

                                <div class="col-md-3 col-sm-3 col-xs-3 w3l-movie-gride-agile">
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




                            <div class="col-md-2 col-sm-2 col-xs-2 w3l-movie-gride-agile">
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
    @if(Auth::check() == false || Auth::user()->connect == false)
        <script>
            $.magnificPopup.open({
                items: {src: '#test-popup'},
                type: 'inline',
                modal: true
            }, 0);
        </script>
    @endif

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