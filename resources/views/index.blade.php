@extends('layouts.app')
@section('title')Турагентство 5 сезонов доступный отдых по самым популярным странам мира.@endsection
@section('description')Турагентство 5 сезонов - это более 50 000 горящих туров в Европу,  ОАЭ, Азию, Африку и Америку, путевки в Египет, Турцию, Тайланд и другие популярные страны!@endsection
@section('keywords')турагентство, 5 сезонов, туроператор горящий тур, Европа, ОАЭ, Азию, Африку и Америку, путевки в Египет, Турцию, Тайланд@endsection
@section('header')
    <div class="wrapper-slider">
    <div class="slider_top">
        <img src="{{asset('public/img/slider_header/1.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/2.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/3.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/4.jpg')}}" alt="">
    </div>
        <h1 class="h1">Туристическое агенство <span>&laquo;5 сезонов&raquo;</span></h1>
    </div>
    <div class="search_block_header">
        <div class="tv-search-form tv-moduleid-187833"></div>
        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
    </div>
@endsection
@section("center")
    <div class="wrapper">
        <div class="text_block">
            <b class="text_center"> Туристическое агентство &laquo;5 сезонов&raquo; </b>
            <p>Мы рада предложить Вам туры по самым низким ценам и бронирование путевок в городе Луганск.
                Мы подготовим для Вас самый не забываемый отпуск по неповторимым странам мира!
            </p> Туристическое агентство «5 сезонов» - это более 50 000 горящих туров в Европу, ОАЭ, Азию, Африку и Америку, Египет, Турцию, Таиланд, Индия, Мексика и другие популярные страны!
            <p>Не упустите свой шанс на незабываемый отпуск и теплые воспоминания о нем!
                Мы рады ответить на любые Ваши Вопросы.
                Поторопитесь! То, что есть сегодня, возможно не будет завтра!</p>
            <div class="header_contact text_contact">
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
                <span class="header_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
                <span class="header_mail"><i class="icon-mail"></i><a href="#callbackChoose" class="btn btn-brand popup-with-form">Оставить заявку </a></span>
            </div>
        </div>
    <h2 class="h1">ОАЭ</h2>
        <hr class="style-seven">
    <div class="tv-hot-tours tv-moduleid-974374"></div>
    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
    </div>
    @endsection
@section('footer-script')
    <script>
        $(document).ready(function () {
            $(".slider_top").slick({
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                speed: 2000,
                fade: true,
                cssEase: 'linear',
                pauseOnHover:false,
                touchMove:false,
                pauseOnFocus:false
            });

            if (Modernizr.touchevents){
                $("header .search_block_header").css({
                    marginTop: "20px",
                    position: "relative"
                })
                $("header .wrapper-slider , .wrapper_header").css('display','none');

            } else {
                console.log("NO !! touch!!");

            }
        })
    </script>
@endsection
