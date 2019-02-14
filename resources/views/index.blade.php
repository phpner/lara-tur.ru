@extends('layouts.app')

@section('header')
    <div class="wrapper-slider">
    <div class="slider_top">
        <img src="{{asset('public/img/slider_header/1.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/2.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/3.jpg')}}" alt="">
        <img src="{{asset('public/img/slider_header/4.jpg')}}" alt="">
    </div>
        <h1>Туристическое агенство <span>&laquo;5 сезонов&raquo;</span> в ЛНР</h1>
    </div>
    <div class="search_block_header">
        <div class="tv-search-form tv-moduleid-187833"></div>
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
        })
    </script>
@endsection
