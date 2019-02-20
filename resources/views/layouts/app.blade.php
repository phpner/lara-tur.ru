<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/img/favicon.png') }}" type="image/x-icon" />
    <title>@yield('title')</title>
</head>
<body>
<div id="answers">
    <span>Спасибо. Заявка принята. <br> Мы скоро перезвоним!</span>
</div>
<div class="sendForm" style="display: none;"><img src="{{asset('public/img/sending.gif')}}" alt=""></div>
@yield('menu')
@if (!isset($menu))
    <?php  $menu = '';?>
@endif
@if (!isset($page))
    <?php  $page = '';?>
@endif
<header>
    <nav class="top_menu">
        <div class="wrapper">
            <div class="header_contact">
                <span class="header_tel"><i class="fas fa-mobile-alt"></i><a href="tel:+380508885455">+38 (050) 888-54-55</a></span>
                <span class="header_mail"><i class="fas fa-at"></i><a href="mailto:5sezonlnr@gmail.com">5sezonlnr@gmail.com</a></span>
            </div>
            <a class="header_logo" href="/"><img id="logo" src="{{asset('img/logo.png')}}" alt="Лого 5 сезонов ЛНР"></a>
            <div class="nav-icon-line">
                <span id="nav-text-in" class="click-in">МЕНЮ</span>
                <div id="nav-icon" class="click-in">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="menu">
                <li><a class="<?php echo $menu === 1 ? 'active' : ''?>" href="{{route('choose-tour')}}">Подбор тура</a></li>
                <li><a  class="<?php echo $menu === 2 ? 'active' : ''?>" href="{{route('hot-tour')}}">Горящие туры</a></li>
                <li class="DownHolder" >
                    <a class="<?php echo $menu === 3 ? 'active' : ''?>" href="#">Страны</a>
                    <div id="dropDownHolder" class="b-dropdown_complex-b b-dropdown-new-style no-user-select b-contry-flags jsMenuCountries">
                        <ul class="li-town">
                            <div class="m-top-countries">
                                <li class="dd-item divider jsItemLabel">Топовые</li>
                                <li data-cvalue="egipet" class="dd-item">
                                    <a class="<?php echo $page === "egipet" ? 'active' : ''?>" href="{{route('egipet')}}"> <i class="sprite sprite-egipet"></i><span>Египет</span> </a>
                                </li>
                                <li data-cvalue="turciya" class="dd-item">
                                    <a class="<?php echo $page === "turkey" ? 'active' : ''?>" href="{{route('turkey')}}"> <i class="sprite sprite-turciya"></i><span>Турция</span> </a>
                                </li>
                                <li data-cvalue="oae" class="dd-item">
                                    <a class="<?php echo $page === "oae" ? 'active' : ''?>" href="{{route('oae')}}"> <i class="sprite sprite-oae"></i><span>ОАЭ</span> </a>
                                </li>
                                <li data-cvalue="tailand" class="dd-item">
                                    <a class="<?php echo $page === "tailand" ? 'active' : ''?>" href="{{route('tailand')}}"> <i class="sprite sprite-tailand"></i><span>Таиланд (Тайланд)</span> </a>
                                </li>
                                <li data-cvalue="shri-lanka" class="dd-item">
                                    <a class="<?php echo $page === "shri-lanka" ? 'active' : ''?>" href="{{route('shri-lanka')}}"> <i class="sprite sprite-shri-lanka"></i><span>Шри-Ланка</span> </a>
                                </li>
                                <li data-cvalue="indiya" class="dd-item">
                                    <a class="<?php echo $page === "indiya" ? 'active' : ''?>" href="{{route('indiya')}}"> <i class="sprite sprite-indiya"></i><span>Индия</span> </a>
                                </li>
                                <li data-cvalue="dominikana" class="dd-item">
                                    <a class="<?php echo $page === "dominikana" ? 'active' : ''?>" href="{{route('dominikana')}}"> <i class="sprite sprite-dominikana"></i>Доминикана</span> </a>
                                </li>
                                <li data-cvalue="meksika" class="dd-item">
                                    <a class="<?php echo $page === "meksika" ? 'active' : ''?>" href="{{route('meksika')}}">  <i class="sprite sprite-meksika"></i><span>Мексика</span> </a>
                                </li>
                                <li data-cvalue="bolgariya" class="dd-item">
                                    <a class="<?php echo $page === "bolgariya" ? 'active' : ''?>" href="{{route('bolgariya')}}"> <i class="sprite sprite-bolgariya"></i><span>Болгария</span> </a>
                                </li>
                                <li data-cvalue="tanzaniya" class="dd-item">
                                    <a class="no-decoration" href="#"> <i class="sprite sprite-tanzaniya"></i><span>Танзания</span> </a>
                                </li>
                                <li data-cvalue="indoneziya" class="dd-item">
                                    <a class="no-decoration" href="#"> <i class="sprite sprite-indoneziya"></i><span>Индонезия</span> </a>
                                </li>
                            </div>
                        </ul>
                        <div class="center"><a class="all_city" href="//www.poehalisnami.ua/countries">Все страны</a></div>
                    </div>
                </li>
                <li><a  class="<?php echo $menu === 4 ? 'active' : ''?>" href="#">Наши услуги</a></li>
                <li><a  class="<?php echo $menu === 5 ? 'active' : ''?>" href="#">О компании</a></li>
                <li><a  class="<?php echo $menu === 6 ? 'active' : ''?>" href="#">Контакты</a></li>
            </ul>
        </div>
    </nav>
    @yield('header')
</header>
@yield('center')
<footer>
    <img class="footer_bag" src="{{asset("public/img/bag.png")}}" alt="">
    <img class="footer_flat" src="{{asset("public/img/flat.png")}}" alt="">
    <span class="footer_tel"><i class="fas fa-mobile-alt"></i><a href="tel:+380508885455">+38 (050) 888-54-55</a></span>
    <span class="footer_mail"><i class="fas fa-at"></i><a href="mailto:5sezonlnr@gmail.com">5sezonlnr@gmail.com</a></span>
</footer>
<!-- Кнопка -->
<div id="phpner_button-wrapper" style="position: fixed; bottom: 50px; right: 50px; z-index: 999; display: block;" title="Нажмите, чтобы заказать обратный звонок или перетащите, если кнопка мешает навигации.">
    <div id="phpner_button-call" style="position: relative; top: 0; left: 0;" data-toggle="modal" data-target="#myModal">
            <span class="phpner_button_tooltip--container phpner_button_tooltip--left">
                <span class="phpner_button_tooltip phpner_button_tooltip--hide phpner_button_tooltip--hover">
                    <span class="phpner_button_tooltip--text">Есть вопросы? Нажмите и мы перезвоним вам!</span>
                    <span class="phpner_button_tooltip--close">x</span>
                </span>
            </span>
        <div class="phpner_call-btn bigEntrance phpner-pulse" style="opacity: 1;">
            <div class="phone-call_wave phone-call_wave__stroke"></div>
        </div>
    </div>
</div>
<!-- end Кнопка -->

<!-- callback -->
<div id="callback" class="zoom-anim-dialog-info form_width mfp-hide">
    <form action="{{route('send-mail')}}" method="post" class="form_callback" >
        <h3>Задать вопрос</h3>
        {{ csrf_field() }}
        <div class="controll_input">
            <input type="text" name="name">
            <span>Ваше имя</span>
        </div>
        <div class="controll_input">
            <input class="input-tel" type="tel" name="tel">
            <span>Ваш телевон</span>
        </div>
        <div class="controll_input">
            <input type="email" name="email">
            <span>Ваш email</span>
        </div>
        <textarea></textarea>
        <input type="submit" class="btn" value="заказать звонок" onsubmit="return false;">
    </form>
</div>

<!-- end callback -->

<a href="#" class="scrollup scrollup_sticky"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/js/modernizr-custom.js')}}"></script>
<script src="{{asset('public/js/slick.min.js')}}"></script>
<script src="{{asset('public/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/js/app.js')}}"></script>

 @yield("footer-script")
</body>
</html>
