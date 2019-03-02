@extends('layouts.app')
@section('title')Горящие туры - купить горящие путевки на отдых из Луганска.@endsection
@section('description')Лучшие горящие туры за границу. Туристическое агентство 5 сезонов рада предложить Вам отдых по горящим турам!@endsection
@section('keywords')Горящие туры, горящие путевки, ЛНH, Луганск@endsection
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
        <script  src="//tourvisor.ru/module/init.js"></script>
    </div>
@endsection
@section("center")
    <div class="wrapper">

        <h2 class="h1">Горящие туры</h2>
        <hr class="style-seven">
        <div class="text_block">
            <b class="text_center">
            Туристическое агентство «5 сезонов» предлагает Вам отдых по горящим турам!</b>
            Здесь Вы найдете самые актуальные предложения и сможете сэкономить до <span class="danger_text">30%</span>. Чтобы не упустить свой шанс, следите за появлением горящих туров! Вы можете оставить заявку, и наши менеджеры подберут туры, которые Вам интересны.
            <b class="text_center">
                Сделать это можно:
            </b>
            <div class="header_contact text_contact">
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
                <span class="header_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
                <span class="header_mail"><i class="icon-mail"></i><a href="#callbackChoose" class="btn btn-brand popup-with-form">Оставить заявку </a></span>
            </div>
        </div>

        <div class="tv-hot-tours tv-moduleid-974450"></div>
        <script  src="//tourvisor.ru/module/init.js"></script>
    </div>
    <!-- Block Найди сам! -->
    <section class="find_by_self">
        <div class="wrapper">
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
    <!-- End Block Найди сам! -->
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
