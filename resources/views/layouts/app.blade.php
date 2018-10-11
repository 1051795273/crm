<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>CRM管理系统</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>
<body>
<div id="app">
    @yield('content')
</div>
</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/semantic.min.js') }}"></script>
<script>
    $('.ui.accordion').accordion();
    $('.ui.dropdown').dropdown();
</script>