@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">

                        @if(!empty($return_array))

                            <table cellspacing="10">
                                <tr align="center"><th>商品名</th><th align="center">ジャンル</th><th align="center">商品画像</th><th>重複無ボタン</th><th>重複商品一覧</th></tr>
                                @foreach($return_array as $val)
                                    <?php static $count; $count = count($val);?>
                                    @foreach($val as $i => $val2)
                                        <?php
                                        static $o;
                                        static $mainid;
                                        ?>
                                        @if($i == 0)
                                            <?php $mainid = $val2['id'] ?>
                                            <tr><td height="120">{{$val2['name']}}</td>
                                                <td align="center">{{$val2['genres']}}</td>
                                                <td align="center" valign="middle"><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                <td>
                                                    <form action="{{url('/notoverlap')}}" method="post">
                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="checkid" value=
                                                            <?php
                                                                $array = array();
                                                                foreach ($val as $valsub){
                                                                    $array = array_merge($array,array($valsub['id']));
                                                                }
                                                                $a = base64_encode(implode($array, ","));
                                                                echo ($a);
                                                            ?>
                                                        >
                                                        <button type='submit' name='submit'>重複無</button>
                                                    </form>
                                                </td>
                                                @else
                                                    @if($count == 2)
                                                        <?php $o += 1; ?>
                                                        <td style="display: block;">
                                                        <?php $str = 'open'.$o; ?>
                                                        <!-- 折り畳み展開ポインタ -->
                                                            <div onclick="obj=document.getElementById('<?php echo $str; ?>').style; obj.display=(obj.display=='none')?'block':'none';"　>
                                                                <br>
                                                                <a style="cursor:pointer;">▼ 一覧</a>
                                                            </div>
                                                            <!--// 折り畳み展開ポインタ -->

                                                            <!-- 折り畳まれ部分 -->
                                                            <div id='<?php echo($str); ?>' style="display:none; clear:both;" >
                                                                <table cellspacing="2" border="1">
                                                                    <tr align="center"><th>商品名</th><th>ジャンル</th><th>商品画像</th>
                                                                    <tr>
                                                                        <td>{{$val2['name']}}</td>
                                                                        <td align="center">{{$val2['genres']}}</td>
                                                                        <td><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                                        <td>
                                                                            <form action="{{url('/test')}}" method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                                                <input type="hidden" name="subid" value=<?php echo($val2['id']); ?>>
                                                                                <button type='submit' name='submit'>同期</button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                            </tr>
                                        @else
                                            @if($i == 1)
                                                <?php $o += 1; ?>
                                                <td style="display: block;">
                                                <?php $str = 'open'.$o; ?>
                                                <!-- 折り畳み展開ポインタ -->
                                                    <div onclick="obj=document.getElementById('<?php echo $str; ?>').style; obj.display=(obj.display=='none')?'block':'none';"　>
                                                        <br>
                                                        <a style="cursor:pointer;">▼ 一覧</a>
                                                    </div>
                                                    <!--// 折り畳み展開ポインタ -->

                                                    <!-- 折り畳まれ部分 -->
                                                    <div id='<?php echo($str); ?>' style="display:none; clear:both;" >
                                                        <table cellspacing="2" border="1">
                                                            <tr align="center"><th>商品名</th><th>ジャンル</th><th>商品画像</th>
                                                            <tr>
                                                                <td>{{$val2['name']}}</td>
                                                                <td align="center">{{$val2['genres']}}</td>
                                                                <td><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                                <td>
                                                                    <form action="{{url('/test')}}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                                        <input type="hidden" name="subid" value=<?php echo($val2['id']); ?>>
                                                                        <button type='submit' name='submit'>同期</button>
                                                                    </form>
                                                                </td>
                                                            </tr>

                                                            @elseif($i == $count -1)
                                                                <tr>
                                                                    <td>{{$val2['name']}}</td>
                                                                    <td align="center">{{$val2['genres']}}</td>
                                                                    <td><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                                    <td>
                                                                        <form action="{{url('/test')}}" method="post">
                                                                            {{ csrf_field() }}
                                                                            <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                                            <input type="hidden" name="subid" value=<?php echo($val2['id']); ?>>
                                                                            <button type='submit' name='submit'>同期</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>{{$val2['name']}}</td>
                                                    <td align="center">{{$val2['genres']}}</td>
                                                    <td><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                    <td>
                                                        <form action="{{url('/test')}}" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                            <input type="hidden" name="subid" value=<?php echo($val2['id']); ?>>
                                                            <button type='submit' name='submit'>同期</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </table>
                        @else
                            <p>重複している商品はありません</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection