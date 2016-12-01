<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Straw Dog</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('layouts.css')

    <link href="{{asset('css/auth.css')}}" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="content">
<div class="login-box">
    <div class="login-box-body">
        <p class="login-box-msg">
            <img src="{!! asset('img/logo.png') !!}">
        </p>

        <form method="post" action="{{ url('/password/reset') }}" class="form-horizontal">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @else
                    <div class="placeholder"></div>
                    @endif
                </div>
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 10px;">
                <label for="email" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="placeholder"></div>
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" placeholder="Comfirm Password" name="password_confirmation">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @else
                    <div class="placeholder"></div>
                    @endif
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-primary pull-right btn-block">
                        <i class="fa fa-btn fa-refresh"></i> 重置密码
                    </button>
                </div>
            </div>
        </form>
        <div class="row login-box-bottom">
            <div class="col-sm-offset-2 col-sm-4">
                <a href="{{ url('/login') }}">直接登陆</a>
            </div>
            <div class="col-sm-5">
                <a href="{{ url('/register') }}" class="text-center pull-right">注册用户</a>
            </div>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</div>

@include('layouts.scripts')

</body>
</html>