@extends('layouts.layout')

@section('content')


    <?php
    function printTable($list){
        foreach($list as $item){

            echo '<tr><td>'.$item->name.'</td><td><img src="'.$item->image.'"></td></tr>' . PHP_EOL;
        }
    }


    ?>


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

    <div class="container">
        <div class="bs-docs-example">
            <table class="table table-bordered">
                <thead>
                <tr><th>商品名</th><th>商品画像</th></tr>
                </thead>
            <?php
                printTable($list);
            ?>
            </table>
            {!! $list->render() !!}

    </div>

        </div>




@endsection