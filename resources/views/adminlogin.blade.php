@extends('layouts.layout')
@section('title')
    ChooMe |　管理者ログイン
@stop
@section('content')

    <div class="form">
        <div class="container">
        <h3>管理者ログイン</h3>
        <form action="{{ url('/admin/login') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" required value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="パスワード">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



            <div class="form-group">

                <input type="submit" class="buttons" value="ログイン">



            </div>



        </form>
    </div>
</div>

@endsection