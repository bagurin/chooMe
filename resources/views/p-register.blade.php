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
    <script src="/js/jquery.thumbnail.js"></script>
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

        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });

        <!-- フォームモジュールの外に値を出す関数 SendParam() -->
        function SendParam() {
            var genres = ['本','DVD・音楽','TVゲーム','家電・カメラ・AV機器','パソコン・オフィス用品','ホーム&キッチン・DIY','食品・飲料・お酒','ドラッグ&ビューティー','ベビー・おもちゃ','服','シューズ','バッグ','腕時計','スポーツ&アウトドア','車&バイク'];

            if(document.getElementById("name").value === ""){
                alert('商品名を入力してください。')
            }
            else if(document.getElementById("image").value === "") {
                alert('商品画像が選択されていません。')
            }
            else {

                //parent.document.registform（親フォーム名).コントロールのnameの値.value = document.getElementById(送りたい子フォーム内のコントロールのidの値).value;
                parent.document.registform.productname.value = document.getElementById("name").value;
//                parent.document.registform.productname.isDisabled = false;
                parent.document.registform.productname.style.backgroundColor = "#fff";
                parent.document.registform.genreid.value = document.getElementById("genre").value;
                parent.document.registform.genrename.value = genres[document.getElementById("genre").value - 1];
//                parent.document.registform.genrename.isDisabled = false;
                parent.document.registform.genrename.style.backgroundColor = "#fff";
                parent.document.registform.comment.readOnly = false;
                parent.document.registform.comment.style.backgroundColor = "#fff";
                parent.document.registform.rate.removeAttribute('disabled');
                parent.document.registform.select.style.backgroundColor = "#fff";
                parent.document.registform.good.removeAttribute('disabled');
                parent.document.registform.want.removeAttribute('disabled');
                parent.document.registform.scene.removeAttribute('disabled');
                parent.document.registform.scene.style.backgroundColor = "#fff";
                parent.document.registform.man.removeAttribute('disabled');
                parent.document.registform.women.removeAttribute('disabled');
                parent.document.registform.age.removeAttribute('disabled');
                parent.document.registform.age.style.backgroundColor = "#fff";
                parent.document.registform.hobbies_id.removeAttribute('disabled');
                parent.document.registform.hobbies_id.style.backgroundColor = "#fff";
                parent.document.registform.send.style.backgroundColor = "#ff9393";
                parent.document.registform.send.removeAttribute('disabled');
                parent.document.registform.cancel.style.backgroundColor = "#ff9393";
                parent.document.registform.cancel.removeAttribute('disabled');
                document.getElementById("checks").style.backgroundColor = "#ccc";
                document.getElementById("temp").style.backgroundColor = "#ccc";
                document.getElementById("genre").style.backgroundColor ="#ccc";
//                $("#name,#genre,#image,#temp,#checks").attr("disabled","disabled");
                $("#name").attr("disabled","disabled");
                $("#genre").attr("disabled","disabled");
//                $("#image").attr("hidden","hidden");
                $("#temp").attr("disabled","disabled");
                $("#checks").attr("disabled","disabled");



            }
        }

    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<div class="form" name="form1">


    <div class="col-md-12 well">
        新規で商品の登録とレビューを投稿します。<br>
        既存の商品にレビューを投稿する場合は、右上の商品検索ボタンをクリックしてください。<br>
    </div>



    <!-- general -->


    {{ csrf_field() }}
    <div class="form-group">
        <form id="check" method="post" action="{{url('/check/')}}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <input type="text" id="name" name="name" class="form-control" required placeholder="商品名">
            </div>
            <div class="col-md-6">
                <input type="submit" class="buttons" id="checks" name="checks" value="重複チェック">
                <label id="checkResult"></label>
                {{--<input type="text" id="checkResult" disabled="disabled" style=border:none>--}}
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $('#check').submit(function(event) {
            // HTMLでの送信をキャンセル 
            event.preventDefault();
            // 操作対象のフォーム要素を取得 
            var $form = $(this);
            //テキストボックス取得
            var message = document.getElementById('checkResult');
            // 送信 
            $.ajax({
                url: $form.attr('action'),
                type: $form.attr('method'),
                data: $form.serialize(),
                // 通信成功時の処理 
                success: function(result) {
                    //重複なし文表示 
                    message.innerHTML = "OK!";
                    document.getElementById('temp').style.backgroundColor = "#ff9393";
                    $("#temp").removeAttr("disabled");
                    $("#genre").removeAttr("style");
                    $("#genre").removeAttr("disabled");
                    $("#image").removeAttr("disabled");


                } ,
                error: function(result){
                    //エラー文表示
                    message.innerHTML = "<a href='/presearch/?word=" + result.responseText + "' onclick='OnLinkClick();'>" + result.responseText + "</a>で検索する。";
                }
            });
        });

        function OnLinkClick() {
            parent.document.registform.action = "{{url('/review/')}}";
        }

    </script>

    {{--<input type="submit" id="check" name="check" value="重複チェック">--}}
    <div class="form-group">
        <div class="col-md-12">
            ジャンル:
            <select id="genre" name="genres" class="form-control" disabled style="background-color: #ccc">
                <option value="1">本</option>
                <option value="2">DVD・音楽</option>
                <option value="3">TVゲーム</option>
                <option value="4">家電・カメラ・AV機器</option>
                <option value="5">パソコン・オフィス用品</option>
                <option value="6">ホーム&キッチン・DIY</option>
                <option value="7">食品・飲料・お酒</option>
                <option value="8">ドラッグ・ビューティ</option>
                <option value="9">ベビー・おもちゃ</option>
                <option value="10">服</option>
                <option value="11">シューズ</option>
                <option value="12">バッグ</option>
                <option value="13">腕時計</option>
                <option value="14">スポーツ&アウトドア</option>
                <option value="15">車&バイク</option>
            </select><br>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <style>
                label {
                    margin-left: 0em;
                }
                .my-file-input {
                    display: inline-block;
                    padding: 5px;
                    width: 200px;
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
                span {
                    display: block;
                }
                span img{
                    max-width: 300px;
                    max-height: 60px;
                    vertical-align: bottom;
                }
            </style>

            <form id="imageTemp" name="imageTemp" method="post" target="upload_frame" enctype="multipart/form-data"  onsubmit="SendParam()" action="{{url('/temp/')}}">
                {{ csrf_field() }}

                <input type="file" name="image"  id="image" accept="image/*" disabled required readonly="readonly">

                {{--<img src="" id="sub" name="image" style="display:none;">--}}
                <script>
                    document.getElementById("image").addEventListener("change", function(e){
                        e.target.nextSibling.nodeValue = e.target.files.length ? e.target.files[0].name : "商品画像を選択";
                    });

                </script>
                <style>
                    form .upload label {
                        display:inline-block; position:relative;
                        overflow:hidden; vertical-align:middle; }
                    form .upload label input[type="file"] {
                        position:absolute; top:0; right:0; cursor:pointer;
                        font-size:100px; opacity:0.01; -ms-filter:"alpha(opacity=1)"; }
                    form .upload label input[type="file"]:hover + .button {}
                    form .upload .alt  {
                        padding:4px; border:1px solid #999; vertical-align:middle; }
                </style>
                <br>
                <input id="temp" name="temp" type="submit" class="send" disabled value="商品情報確定">
                <iframe name="upload_frame" style="display:none;"></iframe>
            </form>
        </div>

    </div>


    {{--<div class="well">--}}
    {{--商品のレビューと評価（5段階）を登録します。--}}
    {{--</div>--}}




    {{ csrf_field() }}




</div>
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