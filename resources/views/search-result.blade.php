<!DOCTYPE html>
<html lang="en">
<head>
    <title>ChooMe | Home </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/switchradio.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/contactstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/faqstyle.css" type="text/css" media="all" />
    <link href="/css/single.css" rel='stylesheet' type='text/css' />
    <link href="/css/medile.css" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
    <link href="/css/jquery.slidey.min.css" rel="stylesheet">
    <link href="/css/thumbnail.css" rel="stylesheet">
    <script src="/js/tr_background.js"></script>
    <script src="/js/tablecolorchanger.js"></script>
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link href="/css/multilevel-dropdown.css" rel="stylesheet" type="text/css" />

    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <script	src="/js/uploadThumbs.js"></script>
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
//        jQuery( function($) {
//            $('tbody tr[data-href]').addClass('clickable').click( function() {
//                window.location = $(this).attr('data-href');
//            }).find('a').hover( function() {
//                $(this).parents('tr').unbind('click');
//            }, function() {
//                $(this).parents('tr').click( function() {
//                    window.location = $(this).attr('data-href');
//                });
//            });
//        });
//        var $pname = "";
    </script>

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="/js/jquery-2.1.4.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="/js/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/table.css">



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
        function Click_Sub(obj) {

//            obj.style.backgroundColor='#cccccc';


            $text = obj.childNodes;
            $name = $text[0].innerText;
            $genre = $text[1].innerText;
            console.log($text);

            $("#parenttext",parent.document).val($name);
            $("#parentgenrename",parent.document).val($genre);





        }
//        $(function(){
//            $('#link').click(function () {
//                $("#parenttext",parent.document).val();
//            });
//        });
    </script>
    <!-- start-smoth-scrolling -->

    <SCRIPT LANGUAGE="JavaScript">
        var goodstype = strvalue;
        function UpdateLink() {
            var elements = document.getElementsByClassName("rank");
            for (var i=elements.length; i--; ) {
                if (elements[i].href.indexOf('&getgoodstype=1') != -1 && goodstype == "&getgoodstype=2") {
                    elements[i].href = elements[i].href.replace(/&getgoodstype=1/g, goodstype);
                }
                if (elements[i].href.indexOf('&getgoodstype=2') != -1 && goodstype == "&getgoodstype=1") {
                    elements[i].href = elements[i].href.replace(/&getgoodstype=2/g, goodstype);
                }
            }
//			document.getElementById("rank").href = document.getElementById("rank").href + goodstype;
        }
        function SetGetgoodsType(strvalue) {
            goodstype =  strvalue;
        }
    </SCRIPT>
</head>
<?php
    function printTable($list){
        foreach($list as $item){
            echo '<tr onclick="Click_Sub(this)" data-href="#" id="link" class="clickable"><td id="pname">'.$item->name.'</td><td>'.$item->genres_id.'</td><td><img src="'.$item->image.'" class="contain"></td></a></tr>' . PHP_EOL;
        }
    }

    ?>


    <div class="container">
        <div class="bs-docs-example">
            <script type="text/javascript">



                with (tablecolorchanger){
                    setColColor("result-table","white,black",0,1);
                    setColColor("result-table","grey,black",1,1);
                    setEvent("result-table","yellow,black","tr","onclick");
                }

            </script>
            <table class="table table-bordered" id="result-table">
                <thead>
                <tr><th>商品名</th><th>ジャンル</th><th>商品画像</th></tr>
                </thead>
                <tbody>
            <?php
                printTable($list);
            ?>
                </tbody>
            </table>
            {!! $list->render() !!}


    </div>

        </div>





