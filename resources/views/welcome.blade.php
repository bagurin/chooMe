@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                    <form action="{{url('/test')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="pcdEhBroxNohtmKoek8iE34hQ6FZYbp">
                        <input type="hidden" name="token" value="GVnRbhHAi4N7IqZTh0DHKUrMU0Zq5lTi">
                        <button type='submit' name='submit'>送信</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
