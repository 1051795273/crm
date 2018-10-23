<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>登录 - 后台管理中心</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>
<body>
<div id="app">
    <div id="login">
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui blue header">登录</h2>
                <form action="{{ url('/login') }}" method="post" class="ui large form">
                    {!! csrf_field() !!}
                    <div class="ui stacked left aligned segment">
                        <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                            <label for="email">用户名</label>
                            <input type="email" placeholder="请输入用户名" name="email" id="email">

                            @if ($errors->has('email'))
                                <div class="ui red pointing above label">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                            <label for="password">密码</label>
                            <input type="password" placeholder="请输入密码" name="password" id="password">

                            @if ($errors->has('password'))
                                <div class="ui red pointing above label">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <input type="submit" value="登录" class="ui fluid large primary button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>