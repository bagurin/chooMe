@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ※重複チェックボックスについて※<br>
                        重複対象商品：ON<br>
                        重複対象外商品：OFF
                        <br><br><p>重複がない場合も同期ボタンを押して下さい。次回以降表示されなくなります</p>
                    </div>

                    <div class="panel-body">

                        @if(!empty($return_array))

                            <table cellspacing="10">
                                <tr align="center"><th>商品名</th><th align="center">ジャンル</th><th align="center">商品画像</th><th>重複商品一覧</th></tr>
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
                                                <td align="center" valign="middle"><a href="/single/?goodsid={{$val2['id']}}"><img  src={{$val2['image']}} alt="" height="100px"/></a></td>
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
                                                                <form action="{{url('/admin/lapcheck')}}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                                <table cellspacing="2" border="1">
                                                                    <tr align="center"><th>商品名</th><th>ジャンル</th><th>商品画像</th>
                                                                    <tr>
                                                                        <td>{{$val2['name']}}</td>
                                                                        <td align="center">{{$val2['genres']}}</td>
                                                                        <td><a href="/single/?goodsid={{$val2['id']}}"><img src={{$val2['image']}} alt="" height="100px"/></a></td>
                                                                        <td align="center" width="30">
                                                                                <input type="hidden" name="lap[0][<?php echo($val2['id']); ?>]" value=<?php echo('off'); ?>>
                                                                                <input type="checkbox" style="-webkit-transform: scale(1.8); transform: scale(1.8);"
                                                                                       name="lap[0][<?php echo($val2['id']); ?>]" value=<?php echo('on'); ?>>
                                                                        </td>
                                                                        <td width="50" align="center"><button type='submit' name='submit'>同期</button></td>
                                                                    </tr>
                                                                </table>
                                                                </form>
                                                            </div>
                                                        </td>
                                            </tr>
                                        @else
                                            <?php static $no; $no = 1; ?>
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
                                                        <form action="{{url('/admin/lapcheck')}}" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="mainid" value=<?php echo($mainid); ?>>
                                                        <table cellspacing="2" border="1">
                                                            <tr align="center"><th>商品名</th><th>ジャンル</th><th>商品画像</th>
                                                            <tr>
                                                                <td>{{$val2['name']}}</td>
                                                                <td align="center">{{$val2['genres']}}</td>
                                                                <td><a href="/single/?goodsid={{$val2['id']}}"><img src={{$val2['image']}} alt="" height="100px"/></a></td>
                                                                <td width="30" align="center">
                                                                    <input type="hidden" name="lap[0][<?php echo($val2['id']); ?>]" value=<?php echo('off'); ?>>
                                                                    <input type="checkbox" style="-webkit-transform: scale(1.8); transform: scale(1.8);"
                                                                           name="lap[0][<?php echo($val2['id']); ?>]" value=<?php echo('on'); ?>>
                                                                </td>
                                                                <td rowspan="<?php echo($count-1) ?>" width="50" align="center"><button type='submit' name='submit'>同期</button></td>
                                                            </tr>

                                            @elseif($i == $count -1)
                                                                <tr>
                                                                    <td>{{$val2['name']}}</td>
                                                                    <td align="center">{{$val2['genres']}}</td>
                                                                    <td><a href="/single/?goodsid={{$val2['id']}}"><img src={{$val2['image']}} alt="" height="100px"/></a></td>
                                                                    <td width="30" align="center">
                                                                        <input type="hidden" name="lap[<?php echo($no); ?>][<?php echo($val2['id']); ?>]" value=<?php echo('off'); ?>>
                                                                        <input type="checkbox" style="-webkit-transform: scale(1.8); transform: scale(1.8);"
                                                                               name="lap[<?php echo($no); ?>][<?php echo($val2['id']); ?>]" value=<?php echo('on'); ?>>
                                                                    </td>
                                                                </tr>
                                                        </table>
                                                        </form>
                                                    </div>
                                                </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>{{$val2['name']}}</td>
                                                    <td align="center">{{$val2['genres']}}</td>
                                                    <td><img src={{$val2['image']}} alt="" height="100px"/></td>
                                                    <td width="30" align="center">
                                                        <input type="hidden" name="lap[<?php echo($no); ?>][check]" value=<?php $st=strval($val2['id']); echo($st . ',off'); ?>>
                                                        <input type="checkbox" style="-webkit-transform: scale(1.8); transform: scale(1.8);"
                                                               name="lap[<?php echo($no); ?>][check]" value=<?php $st=strval($val2['id']); echo($st . ',on'); ?>>
                                                    </td>
                                                </tr>
                                                <?php $no += 1; ?>
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