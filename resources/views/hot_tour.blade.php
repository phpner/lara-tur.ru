@extends('layouts.app')
@section('title')горящие туры цены - из Ростова, Москва. путевки на отдых купить онлайн.@endsection
@section('description')путевки все включено на двоих, вылет из Ростов на Дону, цены на путевки <?php echo date("Y");?> год. у нас более 50,000 горящих туров по всем странам мира!@endsection
@section('keywords')Горящие туры, горящие путевки, ЛНH, Луганск, горящие туры цены, горящие туры цены из Ростова, горящие туры цены из Москвы @endsection
@section('header')
    <div class="wrapper-slider">
        <div class="slider_top">
            <img src="{{asset('public/img/slider_header/1.jpg')}}" alt="горящие туры из Ростова">
            <img src="{{asset('public/img/slider_header/2.jpg')}}" alt="горящие туры цены ">
            <img src="{{asset('public/img/slider_header/3.jpg')}}" alt="путевки все включено ">
            <img src="{{asset('public/img/slider_header/4.jpg')}}" alt="горящие путевки">
        </div>
        <h1 class="h1"><span>цены на горящие туры</span></h1>
    </div>
    <div class="search_block_header">
        <div class="tv-search-form tv-moduleid-187833"></div>
        <script  src="//tourvisor.ru/module/init.js"></script>
    </div>
@endsection
@section("center")
    <div class="wrapper">

        <h2 class="h1">Горящие туры</h2>
        <hr class="style-seven">
        <div class="text_block">
            <b class="text_center">
            Туристическое агентство «5 сезонов» предлагает Вам путевки все включено из Ростова!</b>
            Здесь Вы найдете самые актуальные предложения и сможете сэкономить до <span class="danger_text">30%</span>, узнать цены на путевки онлайн. Чтобы не упустить свой шанс, следите за появлением горящих туров! Вы можете оставить заявку, и наши менеджеры подберут туры, которые Вам интересны.
            <b class="text_center">
                Сделать это можно:
            </b>
            <div class="header_contact text_contact">
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:0721608584">072 160 85 84</a></span>
                <span class="header_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
                <span class="header_mail"><i class="icon-mail"></i><a href="#callbackChoose" class="btn btn-brand popup-with-form">Оставить заявку </a></span>
            </div>
        </div>

        <div class="tv-hot-tours tv-moduleid-974450"></div>
        <script  src="//tourvisor.ru/module/init.js"></script>
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
