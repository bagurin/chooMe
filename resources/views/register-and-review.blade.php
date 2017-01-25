@extends('layouts.layout')

@section('content')

    <script>
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
                $("#scene").val(1);
                $("#select option[value=0]").remove();
                $("#select").removeAttr("hidden");
                $("#ratelabel").removeAttr("hidden");
                $("#scenes").removeAttr("hidden");
            } else if ($("input[name=wantgood]:checked").val() == 2) {
                $("#select").attr("hidden", "hidden");
                $("#ratelabel").attr("hidden","hidden");
                $("#scenes").attr("hidden", "hidden");
                $("#select").val(4);
                $("#scene").val(0);
            }
        }


        $(function(){
            $("#cancel")
                    .click(function(){
                        $("#p-register").contents().find("#name").removeAttr("disabled");
//                        $("#p-register").contents().find("#image").attr("disabled");

                        search.location.href = '/search/';
                        document.getElementById("parenttext").style.backgroundColor = "#ccc";
                        document.getElementById("parenttext").isDisabled = true;
                        document.getElementById("parentgenrename").style.backgroundColor = "#ccc";
//                        document.getElementById("parentgenrename").value = "";
                        document.getElementById("parentgenrename").isDisabled = true;
                        document.getElementById("parentgenreid").value = "";
                        document.getElementById("parentgenreid").isDisabled = true;
                        document.getElementById("parentimage").value = "";
                        document.getElementById("comment").readOnly = true;
                        document.getElementById("comment").style.backgroundColor = "#ccc";
//                        document.getElementById("comment").value = "";
//                        document.getElementById("rate").selected = "5";
                        document.getElementById("rate").style.backgroundColor = "#ccc";
                        $("#rate").attr("disabled","disabled");
                        $("#want").attr("disabled","disabled");
                        $("#good").attr("disabled","disabled");
                        $("#good").attr("disabled","disabled");
                        $("#man").attr("disabled","disabled");
                        $("#women").attr("disabled","disabled");
                        document.getElementById("scene").style.backgroundColor = "#ccc";
                        $("#scene").attr("disabled","disabled");
                        document.getElementById("age").style.backgroundColor = "#ccc";
                        $("#age").attr("disabled","disabled");
                        document.getElementById("hobbies_id").style.backgroundColor = "#ccc";
                        $("#hobbies_id").attr("disabled","disabled");
                        document.getElementById("send").style.backgroundColor = "#ccc";
                        $("#send").attr("disabled","disabled");
                        document.getElementById("cancel").style.backgroundColor = "#ccc";
                        $("#cancel").attr("disabled","disabled");
                        $("#p-register").contents().find("#checks").removeAttr("disabled");
                        $("#p-register").contents().find("#checks").removeAttr("style");
                        $("#p-register").contents().find("#genre").attr("style","background-color: #ccc");
                        $("#p-register").contents().find("#checkResult").innerText = '';



                        $.ajax({
                            url: '/imageDel/',
                            type: 'get'
                        })
                    });
        });
        function wantch(){
            document.forms.registform.comment.placeholder = "欲しい理由(100文字以内)";


        }
        function reviewch(){
            document.forms.registform.comment.placeholder = "レビュー(100文字以内)";
        }
    </script>

    <div class="faq">
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">商品登録</h4>
            <div class="container">



                <!-- general -->
                <div class="form" name="form1">


                    <section>
                        <iframe height="320px" width="100%" frameborder="0" id="p-register" name="p-register" src="/p-register2/">

                        </iframe>
                        {{ csrf_field() }}
                    </section>

                </div>



                        <form enctype="multipart/form-data" method="post" name="registform" action="{{url('/register/')}}">

                    {{--<div class="well">--}}
                        {{--商品のレビューと評価（5段階）を登録します。--}}
                    {{--</div>--}}




                        {{ csrf_field() }}

                        {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}

                        <div class="container">

                            <input type="hidden" class="form-control-ro" name="productname" id="parenttext" value="" placeholder="商品名"  readonly="readonly"/>
                            <input type="hidden" class="form-control-ro" name="genrename" id="parentgenrename" placeholder="ジャンル" readonly="readonly"/>
                            <!-- ジャンルid、画像情報はhiddenで外に-->
                            <input type="hidden" class="form-control" name="genreid" id="parentgenreid" value="" readonly="readonly"/>
                            <input type="hidden" class="form-control" name="goodsid" id="parentimage" value="" readonly="readonly"/>

                                <style>
                                    textarea{
                                        margin:15px 0 10px 0;
                                        background-color: #ccc;
                                    }
                                    select{
                                        background-color: #ccc;
                                    }
                                    input{
                                        background-color: #ccc;
                                    }
                                </style>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <input type="radio" name="wantgood" value="1" id="good" onclick="reviewch()" checked disabled>もらったもの
                                <input type="radio" name="wantgood" value="2" id="want" onclick="wantch()" disabled>欲しいもの
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea width="auto" name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" required maxlength="100" readonly></textarea>
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
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <p id="ratelabel">評価
                                    <select id="select">
                                    </select>
                                    <select id="rate" name="rate" class="nodisp" disabled size="1">

                                        <option value="5">★★★★★</option>
                                        <option value="4">★★★★☆</option>
                                        <option value="3">★★★☆☆</option>
                                        <option value="2">★★☆☆☆</option>
                                        <option value="1">★☆☆☆☆</option>
                                    </select></p><br>
                            </div>

                                <style>
                                    input{
                                        margin: 5px;
                                    }

                                </style>



                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <style>
                                    select{
                                        margin:5px;
                                    }
                                </style>
                                <p id="scenes">
                                    シーン:
                                    <select id="scene" name="scene" disabled>
                                        <option value="0" hidden></option>
                                        <option value="1" selected>誕生日</option>
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
                                </p>
                            </div>
                            @if(Auth::check() == false)
                                <div class="col-md-12 well" >
                                現在ユーザーログインされていません。<br>
                                商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    性別:
                                    <input type="radio" id="man" name="sex" value="男" checked disabled>男
                                    <input type="radio" id="women" name="sex" value="女" disabled>女
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    年齢:
                                    <select id="age" name="age" disabled>
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
                                    <select id="hobbies_id" name="hobbies_id" disabled>
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

                                <input type="submit" class="send" name="send" id="send" disabled value="登録する" >

                                <input type="button" class="cancel" id="cancel" name="cancel" disabled value="修正する">

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
                        </div>
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
                </form>
            </div>





        </div>
        <!--body wrapper end-->
    </div>
    <!-- //general -->
    </div>
    </div>


@endsection