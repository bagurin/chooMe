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
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>

<style>
    .searchbar input[type="text"] {
        outline: none;
        border: none;
        background: #EFEFEF;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        color: #999;
        width: 78%;
        float: left;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
    }
    .searchbar input[type="submit"]{
        outline: none;
        border: none;
        background: #212121;
        padding: 10px 0;
        font-size: 14px;
        color: #fff;
        width: 22%;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
    }
    .searchbar input[type="submit"]:hover{
        background:#ff9393;
    }

</style>
<div class="well">
    登録されている商品を検索して一覧で見ることができます。
    検索したい商品名を入力してください。
</div>
<div class="searchbar">
    <form method="post" action="/p-search/">
        {{ csrf_field() }}
        <input type="text" name="Search" placeholder="検索する商品名" required>
        <input type="submit" value="Go" >
    </form>
</div>
</body>
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