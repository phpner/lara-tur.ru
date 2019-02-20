@extends('layouts.app')

@section('header')
    <div class="wrapper-slider">
        <div class="slider_top">
            <img src="{{asset('public/img/slider_header/1.jpg')}}" alt="">
            <img src="{{asset('public/img/slider_header/2.jpg')}}" alt="">
            <img src="{{asset('public/img/slider_header/3.jpg')}}" alt="">
            <img src="{{asset('public/img/slider_header/4.jpg')}}" alt="">
        </div>
        <h1 class="h1">Туристическое агенство <span>&laquo;5 сезонов&raquo;</span> в ЛНР</h1>
    </div>
    <div class="search_block_header">
        <div class="tv-search-form tv-moduleid-187833"></div>
        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
    </div>
@endsection
@section("center")
    <div class="wrapper">
        <div class="text_block">
            <b class="text_center">
                Следите за появлением горящих туров на нашем сайте
            </b>
            <p>
                (информация обновляется ежедневно) Вы сможете сэкономить до <span class="danger_text">30%</span> от стоимости тура.
            </p>
            <p>
                Eсли Вы видите подходящий Вам горящий тур, поторопитесь его забронировать.
            </p>
            <p>
                Горящие туры действуют очень непродолжительное время!
            </p>

            <b class="text_center">
                Сделать это можно:
            </b>
            <div class="header_contact text_contact">
                <span class="header_tel"><i class="fas fa-mobile-alt"></i><a href="tel:+380508885455">+38 (050) 888-54-55</a></span>
                <span class="header_mail"><i class="fas fa-at"></i><a href="mailto:5sezonlnr@gmail.com">5sezonlnr@gmail.com</a></span>
                <span class="call_back"><a href="#"><i class="fas fa-headset"></i>Обратная связь</a></span>
            </div>
            <p class="we_help"><em>Если у Вас нет времени "ловить" горящий тур, мы сделаем это за Вас!</em></p>
        </div>
        <h2>Горящие туры</h2>
        <div class="tv-hot-tours tv-moduleid-974450"></div>
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
