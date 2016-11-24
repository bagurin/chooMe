@extends('layouts.layout')

@section('content')

<?php
    function printTable($table){
    echo '<table table-bordered>' . PHP_EOL;
        foreach($table as $line){
            echo '<tr>';
            foreach($line as $cell){
                echo'<td>'.$cell.'</td>';
            }
            echo '</tr>'. PHP_EOL;
        }
        echo '</table>'. PHP_EOL;
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
            <?php
                printTable($list);
        ?>
    </div>

    @funtion

@endsection