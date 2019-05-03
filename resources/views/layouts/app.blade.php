<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name=description content="@yield('description')">
    <meta name=keywords content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <?php
    $url =  ($_SERVER['REQUEST_URI'] === '/') ? $_SERVER['REQUEST_URI'].'img/' : '/img'.substr($_SERVER['REQUEST_URI'],5).'/' ;
    $url = trim($url);
    $urlWithOutSlesh =  preg_replace("#/$#", "", $_SERVER['REQUEST_URI']);
    ?>
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://<?php echo $_SERVER['HTTP_HOST']?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://<?php echo $_SERVER['HTTP_HOST']?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://<?php echo $_SERVER['HTTP_HOST']?>/favicon-16x16.png">
    <link rel="manifest" href="https://<?php echo $_SERVER['HTTP_HOST']?>/site.webmanifest">
    <link rel="mask-icon" href="https://<?php echo $_SERVER['HTTP_HOST']?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image:height" content="447">
    <meta property="og:image:width" content="854">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo"$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />
    <meta property="og:image" content="<?php echo "$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$url"?>og-image.jpg">

    <link rel="canonical" href="<?php echo "$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$urlWithOutSlesh"?>"/>

    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    @yield('style')

    <link rel="shortcut icon" href="{{ asset('public/img/favicon.png') }}" type="image/x-icon" />

    <meta name="google-site-verification" content="AQBKVnS81kSLWXb4oBmyBGpO2n9cUHhf1d5BBjqCFZ4" />
    <meta name="yandex-verification" content="cbcb0302c12037e8" />
    <!--[if lte 9]>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/ei.css') }}" />
    <div class="old-ie">Похоже Ваш браузер устарел, обновите его! <br>или позвоните нам <br> <span>+38 (095) 446-32-72</span></div>

    <![endif]-->

    <meta name="verify-admitad" content="ae210edeb0" />
    <meta name='wmail-verification' content='3e40bbf571ea73f3874e0a2af5f0b6d8' />

</head>
<body>
<div id="answers">
    <span>Спасибо. Заявка принята. <br> Мы скоро перезвоним!</span>
</div>
<div class="sendForm" style="display: none;"><img src="{{asset('public/img/sending.gif')}}" alt="туристическое агентство контакты Луганск ЛНР"></div>

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
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:0721608584">072 160 85 84</a></span>
                <span class="header_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
            </div>
            <a class="header_logo" href="/"><img id="logo" src="{{asset('img/logo.png')}}" title="Логотип 5 сезонов Луганск" alt="Логотип 5 сезонов Луганск"></a>
            <div class="nav-icon-line">
                <span id="nav-text-in" class="click-in">МЕНЮ</span>
                <div id="nav-icon" class="click-in">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
             <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement"  class="menu">
                <li ><a itemprop="url" class="<?php echo $menu === 0 ? 'active' : ''?>" href="/"><span  itemprop="name">Главная</span></a></li>
                <li ><a itemprop="url" class="podbor <?php echo $menu === 7 ? 'active' : ''?>" href="{{route('calender-price')}}"><span  itemprop="name">Календарь цен</span></a></li>

               <!-- <li ><a itemprop="url" class="podbor <?php echo $menu === 1 ? 'active' : ''?>" href="{{route('choose-tour')}}"><span  itemprop="name">Подбор тура</span></a></li>
                <li><a itemprop="url" class="<?php echo $menu === 2 ? 'active' : ''?>" href="{{route('hot-tour')}}"><span  itemprop="name" >Горящие туры</span></a></li>
                <li class="DownHolder" >
                    <a itemprop="url" class="<?php echo $menu === 3 ? 'active' : ''?>" href="#"><span itemprop="name">Страны</span></a>
                    <div id="dropDownHolder" class="b-dropdown_complex-b b-dropdown-new-style no-user-select b-contry-flags jsMenuCountries">
                        <ul class="li-town m-top-countries">
                                <li class="dd-item divider jsItemLabel">Топовые</li>
                                <li  data-cvalue="bolgariya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "bolgariya" ? 'active' : ''?>" href="{{route('bolgariya')}}"> <i class="sprite sprite-bolgariya"></i><span itemprop="name">Болгария</span> </a>
                                </li>
                                <li  data-cvalue="vetnam" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "vetnam" ? 'active' : ''?>" href="{{route('vetnam')}}"> <i class="sprite sprite-vetnam"></i><span itemprop="name">Вьетнам</span></a>
                                </li>
                                <li  data-cvalue="dominikana" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "dominikana" ? 'active' : ''?>" href="{{route('dominikana')}}"> <i class="sprite sprite-dominikana"></i><span itemprop="name">Доминикана</span> </a>
                                </li>

                                <li  data-cvalue="egipet" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "egipet" ? 'active' : ''?>" href="{{route('egipet')}}"> <i class="sprite sprite-egipet"></i><span itemprop="name">Египет</span> </a>
                                </li>
                                
                                <li  data-cvalue="indiya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "indiya" ? 'active' : ''?>" href="{{route('indiya')}}"> <i class="sprite sprite-indiya"></i><span itemprop="name">Индия</span> </a>
                                </li>
                                <li  data-cvalue="indoneziya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "indoneziya" ? 'active' : ''?>" href="{{route('indoneziya')}}"> <i class="sprite sprite-indoneziya"></i><span itemprop="name">Индонезия</span> </a>
                                </li>
                                <li  data-cvalue="meksika" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "meksika" ? 'active' : ''?>" href="{{route('meksika')}}">  <i class="sprite sprite-meksika"></i><span itemprop="name">Мексика</span> </a>
                                </li>
                                <li  data-cvalue="oae" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "oae" ? 'active' : ''?>" href="{{route('oae')}}"> <i class="sprite sprite-oae"></i><span itemprop="name">ОАЭ</span> </a>
                                </li>
                                <li  data-cvalue="rossiya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "rossiya" ? 'active' : ''?>" href="{{route('rossiya')}}">
                                        <i class="sprite sprite-rossiya"></i><span>Россия</span>
                                    </a>
                                </li>
                                <li  data-cvalue="turciya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "turkey" ? 'active' : ''?>" href="{{route('turkey')}}"> <i class="sprite sprite-turciya"></i><span itemprop="name">Турция</span> </a>
                                </li>
                                <li  data-cvalue="tailand" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "tailand" ? 'active' : ''?>" href="{{route('tailand')}}"> <i class="sprite sprite-tailand"></i><span itemprop="name">Таиланд (Тайланд)</span> </a>
                                </li>
                                <li  data-cvalue="tanzaniya" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "tanzaniya" ? 'active' : ''?>" href="{{route('tanzaniya')}}"> <i class="sprite sprite-tanzaniya"></i><span itemprop="name">Танзания</span> </a>
                                </li>
                                <li  data-cvalue="shri-lanka" class="dd-item">
                                    <a itemprop="url" class="classformclick <?php echo $page === "shri-lanka" ? 'active' : ''?>" href="{{route('shri-lanka')}}"> <i class="sprite sprite-shri-lanka"></i><span itemprop="name">Шри-Ланка</span> </a>
                                </li>
                        </ul>
                        <div class="center"><a class="all_city" href="{{route('countries')}}">Все страны</a></div>
                    </div>
                </li> -->
               <!--
                <li><a  class="<?php echo $menu === 4 ? 'active' : ''?>" href="#">Наши услуги</a></li>
                <li><a  class="<?php echo $menu === 5 ? 'active' : ''?>" href="#">О компании</a></li>
                -->
                <li><a itemprop="url" class="<?php echo $menu === 6 ? 'active' : ''?>" href="{{route('contact')}}"><span itemprop="name">Контакты</span></a></li>
            </ul>
            </nav>
        </div>
    </nav>
    @yield('header')
</header>

@yield('center')
@yield('kurort')
@yield('chooseTour')
<div class="section-callback">
    <div class="wrapper">
        <div class="bg"></div>
        <div class="section-callback__content">
            <p class="section-callback__title">Оставьте запрос и наши менеджеры <br>подберут Вам лучший тур!</p>
            <a href="#callbackChoose" class="btn btn-brand popup-with-form">Оставить заявку </a>
        </div>
    </div>
</div>
<div class="our_partner">
        <div class="title">Наши партнёры</div>
        <div class="slider_partner">
            <div class="item_operator">
                <img src="/img/we-work-with/a0.png" alt="Луганск туристическое агентство">
            </div>
            <div class="item_operator"><img src="/img/we-work-with/a1.png" alt="Луганск туристическое агентство Anex"></div>
            <div class="item_operator"><img src="/img/we-work-with/a2.png" alt="Луганск туристическое агентство TEZ TOUR"></div>
            <div class="item_operator"><img src="/img/we-work-with/a3.png" alt="Луганск туристическое агентство PEGAS"></div>
            <div class="item_operator"><img src="/img/we-work-with/a4.png" alt="Луганск туристическое агентство colortravel"></div>
            <div class="item_operator"><img src="/img/we-work-with/a5.png" alt="Луганск туристическое агентство"></div>
            <div class="item_operator"><img src="/img/we-work-with/a6.png" alt="Луганск туристическое агентство"></div>
            <div class="item_operator"><img src="/img/we-work-with/a7.png" alt="Луганск туристическое агентство"></div>
            <div class="item_operator"><img src="/img/we-work-with/a8.png" alt="Луганск туристическое агентство"></div>
            <div class="item_operator"><img src="/img/we-work-with/a9.png" alt="Луганск туристическое агентство библио глобус"></div>
            <div class="item_operator"><img src="/img/we-work-with/a10.png" alt="Луганск туристическое агентство sunmar"></div>
            <div class="item_operator"><img src="/img/we-work-with/a11.png" alt="Луганск туристическое агентство"></div>
        </div>
</div>
<footer>
    <img class="footer_bag" src="{{asset("public/img/bag.png")}}" alt="">
    <img class="footer_flat" src="{{asset("public/img/flat.png")}}" alt="">
    <address itemscope itemtype="http://schema.org/PostalAddress" class="footer_contact">
        <span itemprop="name" class="contact-footer-title">Турагентство 5 сезонов</span>
        <span itemprop="telephone" class="footer_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
        <span itemprop="telephone" class="footer_tel"><i class="icon-phone_android"></i><a href="tel:0721608584">072 160 85 84</a></span>
        <span itemprop="email" class="footer_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
    </address >
   <div id="ok_group_widget"></div>
   <script>
   !function (d, id, did, st) {
     var js = d.createElement("script");
     js.src = "https://connect.ok.ru/connect.js";
     js.onload = js.onreadystatechange = function () {
     if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
       if (!this.executed) {
         this.executed = true;
         setTimeout(function () {
           OK.CONNECT.insertGroupWidget(id,did,st);
         }, 0);
       }
     }};
     d.documentElement.appendChild(js);
   }(document,"ok_group_widget","54879000920267",'{"width":360,"height":135,"type":"feed"}');
   </script>

    <!-- Global site tag (gtag.js) - Google Ads: 759361354 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-759361354"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-759361354');
    </script>
</footer>
<!-- Кнопка -->
<div class="wrapper-for-contact">
    <div id="phpner_button-wrapper" style="position: fixed; bottom: 101px; right: 50px; z-index: 999; display: block;" title="Нажмите, чтобы заказать обратный звонок.">
        <div class="left-menu">
            <span>
                <a id="vk-pc" title="Viber" href="viber://chat?number=+380954463272"><img class="viber" src="{{asset('public/img/viber.png')}}" alt="туристическое агентствоконтакты  Луганск ЛНР viber"></a>
                <a id="vk-mob" title="Viber" href="viber://chat?number=+380954463272"><img class="viber" src="{{asset('public/img/viber.png')}}" alt="туристическое агентство контакты  Луганск ЛНР вайбер"></a>
             </span>
            <span>
                <a title="whatsapp" href="whatsapp://send?phone=+380954463272"><img class="whatsapp" src="{{asset('public/img/whatsapp.png')}}" alt="5 сзонов контакты whatsapp"></a>
            </span>
            <span class="write-to-us">
                <img  class="envelope" src="{{asset('public/img/envelope.png')}}" alt="5 сезонов письмо" >
            </span>
        </div>
        <div id="phpner_button-call" style="position: relative; top: 0; left: 0;" >
            <div class="phpner_call-btn bigEntrance phpner-pulse" style="opacity: 1;">
                <div class="phone-call_wave phone-call_wave__stroke"></div>
            </div>
        </div>
    </div>
</div>
<!-- end Кнопка -->

<!-- callback -->
<div id="callback" class="zoom-anim-dialog-info form_width mfp-hide">
    <form action="{{route('send-mail')}}" method="post" class="form_callback" >
        <div class="title">Заполните ваши контакты</div>
        {{ csrf_field() }}
        <div class="controll_input">
            <input type="text" name="name">
            <span>Ваше имя</span>
        </div>
        <div class="controll_input">
            <input class="input-tel" type="tel" name="tel">
            <span>Ваш телефон</span>
        </div>
        <div class="controll_input">
            <input type="email" name="email">
            <span>Ваш email</span>
        </div>
        <textarea name="text" placeholder="Текст"></textarea>
        <input type="submit" class="btn" value="Отправить заявку" onsubmit="return false;">
    </form>
</div>
<!-- end callback -->

<!-- callback COMMENT -->
<div id="callbackCommetn" class="zoom-anim-dialog-info form_width mfp-hide">
    <form action="{{route('send-mail')}}" method="post" class="callbackCommetn" >
        <div class="title">Оставить отзыв</div>
        <input type="hidden" name="fromform" value="Кто-то хочет оставил отзыв на сайте 5 сезонов">
        {{ csrf_field() }}
        <div class="controll_input">
            <input type="text" name="name" placeholder="Ваше имя">
        </div>

        <div class="controll_input">
            <input type="email" name="email" placeholder="Ваш email">
        </div>
        <textarea name="text" placeholder="Текст"></textarea>
        <input type="submit" class="btn" value="Оставить отзыв" onsubmit="return false;">
    </form>
</div>
<!-- end callback COMMENT-->
<div id="callbackChoose" class="zoom-anim-dialog-info form_width mfp-hide">
    <form action="{{route('send-mail')}}" method="post" class="form_callback_choose" >
        <div class="title">Заполните ваши контакты</div>
        {{ csrf_field() }}
        <div class="controll_input">
            <input id="name" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="controll_input_contry">
        <div class="form-item" id="edit-field-request-country-value-wrapper">
            <label for="edit-field-request-country-value">страна:</label>
            <select name="field_request_country" class="form-select" id="edit-field-request-country-value">
                <option value="" selected="selected">не выбрана</option>
                <option value="Абхазия">Абхазия</option>
                <option value="Австралия">Австралия</option>
                <option value="Австрия">Австрия</option>
                <option value="Азербайджан">Азербайджан</option>
                <option value="Албания">Албания</option>
                <option value="Ангилья">Ангилья</option>
                <option value="Андорра">Андорра</option>
                <option value="Антигуа">Антигуа</option>
                <option value="Аргентина">Аргентина</option>
                <option value="Армения">Армения</option>
                <option value="Аруба">Аруба</option>
                <option value="Багамы">Багамы</option>
                <option value="Бангладеш">Бангладеш</option>
                <option value="Барбадос">Барбадос</option>
                <option value="Барбуда">Барбуда</option>
                <option value="Бахрейн">Бахрейн</option>
                <option value="Беларусь">Беларусь</option>
                <option value="Белиз">Белиз</option>
                <option value="Бельгия">Бельгия</option>
                <option value="Болгария">Болгария</option>
                <option value="Боливия">Боливия</option>
                <option value="Босния и Герцеговина">Босния и Герцеговина</option>
                <option value="Ботсвана">Ботсвана</option>
                <option value="Бразилия">Бразилия</option>
                <option value="Бруней">Бруней</option>
                <option value="Буркина-Фасо">Буркина-Фасо</option>
                <option value="Великобритания">Великобритания</option>
                <option value="Венгрия">Венгрия</option>
                <option value="Венесуэла">Венесуэла</option>
                <option value="Вьетнам">Вьетнам</option>
                <option value="Гваделупа">Гваделупа</option>
                <option value="Гватемала">Гватемала</option>
                <option value="Германия">Германия</option>
                <option value="Гондурас">Гондурас</option>
                <option value="Гренада">Гренада</option>
                <option value="Греция">Греция</option>
                <option value="Грузия">Грузия</option>
                <option value="Дания">Дания</option>
                <option value="Джибути">Джибути</option>
                <option value="Доминикана">Доминикана</option>
                <option value="Египет">Египет</option>
                <option value="Замбия">Замбия</option>
                <option value="Занзибар">Занзибар</option>
                <option value="Зимбабве">Зимбабве</option>
                <option value="Израиль">Израиль</option>
                <option value="Индия">Индия</option>
                <option value="Индонезия">Индонезия</option>
                <option value="Иордания">Иордания</option>
                <option value="Ирландия">Ирландия</option>
                <option value="Исландия">Исландия</option>
                <option value="Испания">Испания</option>
                <option value="Италия">Италия</option>
                <option value="Кабо-Верде">Кабо-Верде</option>
                <option value="Казахстан">Казахстан</option>
                <option value="Каймановы о-ва">Каймановы о-ва</option>
                <option value="Камбоджа">Камбоджа</option>
                <option value="Канада">Канада</option>
                <option value="Катар">Катар</option>
                <option value="Кения">Кения</option>
                <option value="Кипр">Кипр</option>
                <option value="Китай">Китай</option>
                <option value="Коста-Рика">Коста-Рика</option>
                <option value="Куба">Куба</option>
                <option value="Кыргызтан">Кыргызтан</option>
                <option value="Лаос">Лаос</option>
                <option value="Латвия">Латвия</option>
                <option value="Ливан">Ливан</option>
                <option value="Литва">Литва</option>
                <option value="Люксембург">Люксембург</option>
                <option value="Маврикий">Маврикий</option>
                <option value="Мадагаскар">Мадагаскар</option>
                <option value="Малайзия">Малайзия</option>
                <option value="Мальдивы">Мальдивы</option>
                <option value="Мальта">Мальта</option>
                <option value="Марианские о-ва">Марианские о-ва</option>
                <option value="Марокко">Марокко</option>
                <option value="Мартиника">Мартиника</option>
                <option value="Мексика">Мексика</option>
                <option value="Молдавия">Молдавия</option>
                <option value="Монако">Монако</option>
                <option value="Монголия">Монголия</option>
                <option value="Мьянма (Бирма)">Мьянма (Бирма)</option>
                <option value="Намибия">Намибия</option>
                <option value="Непал">Непал</option>
                <option value="Нидерланды">Нидерланды</option>
                <option value="Новая Зеландия">Новая Зеландия</option>
                <option value="Норвегия">Норвегия</option>
                <option value="о. Кука">о. Кука</option>
                <option value="Оаэ">Оаэ</option>
                <option value="Оман">Оман</option>
                <option value="Пакистан">Пакистан</option>
                <option value="Панама">Панама</option>
                <option value="Папуа Новая Гвинея">Папуа Новая Гвинея</option>
                <option value="Парагвай">Парагвай</option>
                <option value="Перу">Перу</option>
                <option value="Полинезия">Полинезия</option>
                <option value="Польша">Польша</option>
                <option value="Португалия">Португалия</option>
                <option value="Реюньон">Реюньон</option>
                <option value="Россия">Россия</option>
                <option value="Румыния">Румыния</option>
                <option value="Саудовская Аравия">Саудовская Аравия</option>
                <option value="Свазиленд">Свазиленд</option>
                <option value="Сейшелы">Сейшелы</option>
                <option value="Сент-Люсия">Сент-Люсия</option>
                <option value="Сербия">Сербия</option>
                <option value="Сингапур">Сингапур</option>
                <option value="Сирия">Сирия</option>
                <option value="Скандинавия">Скандинавия</option>
                <option value="Словакия">Словакия</option>
                <option value="Словения">Словения</option>
                <option value="Сша">Сша</option>
                <option value="Таиланд">Таиланд</option>
                <option value="Тайвань">Тайвань</option>
                <option value="Танзания">Танзания</option>
                <option value="Теркс и Кайкос">Теркс и Кайкос</option>
                <option value="Тунис">Тунис</option>
                <option value="Туркменистан">Туркменистан</option>
                <option value="Турция">Турция</option>
                <option value="Узбекистан">Узбекистан</option>
                <option value="Украина">Украина</option>
                <option value="Фиджи">Фиджи</option>
                <option value="Филиппины">Филиппины</option>
                <option value="Финляндия">Финляндия</option>
                <option value="Франция">Франция</option>
                <option value="Хорватия">Хорватия</option>
                <option value="Черногория">Черногория</option>
                <option value="Чехия">Чехия</option>
                <option value="Чили">Чили</option>
                <option value="Швейцария">Швейцария</option>
                <option value="Швеция">Швеция</option>
                <option value="Шри-Ланка">Шри-Ланка</option>
                <option value="Эквадор">Эквадор</option>
                <option value="Эстония">Эстония</option>
                <option value="Эфиопия">Эфиопия</option>
                <option value="Юар">Юар</option>
                <option value="Южная Корея">Южная Корея</option>
                <option value="Ямайка">Ямайка</option>
                <option value="Япония">Япония</option>
            </select>
        </div>
        </div>
        <div class="controll_input">
            <input class="input-tel" type="tel" name="tel" placeholder="телефон">
        </div>
        <div class="controll_input">
            <input type="email" name="email" placeholder="email">
        </div>
        <textarea name="text" placeholder="Текст"></textarea>
        <input type="submit" class="btn" value="Отправить заявку" onsubmit="return false;">
    </form>
</div>

<a href="#" class="scrollup scrollup_sticky"><i class="icon-arrow-up2" aria-hidden="true"></i></a>

<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/js/modernizr-custom.js')}}"></script>
<script src="{{asset('public/js/slick.min.js')}}"></script>
<script src="{{asset('public/js/jquery.validate.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('public/js/app.js')}}"></script>

 @yield("footer-script")

<!-- Yandex.Metrika counter -->
{{--<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(52707085, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52707085" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'yCm96SCBrG';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
        if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
        else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
