<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="top_menu">
        <div class="wrapper">
            <a href="/"><img id="logo" src="{{asset('img/logo.png')}}" alt="Лого 5 сезонов ЛНР"></a>
            <ul>
                <li><a href="{{route('choose-tour')}}">Подбор тура</a></li>
                <li><a href="">Горящие туры</a></li>
                <li><a href="">Страны</a></li>
                <li><a href="">Наши услуги</a></li>
                <li><a href="">О компании</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </div>
    </nav>
    @yield('header')
</header>
<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('public/js/slick.min.js')}}"></script>
 @yield("footer-script")
</body>
</html>
