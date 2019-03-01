@extends('layouts.app')
@section('title')Туры в Доминикану – заказ онлайн горящую путевку. Лучшие цены на отдых!@endsection
@section('description')Купить путевку на отдых в Доминикану по самым низким ценам! онлайн заказ туров!@endsection
@section('keywords')туры в Доминикану@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Доминикану</h1>
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Доминикана" class="popup-with-zoom-anim" href="{{asset('public/img/dominicana/1.jpg')}}">
                    <img src="{{asset('public/img/dominicana/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Доминикана">

                </a>
                <a title="&laquo; 5 сезонов &raquo; Доминикана" class="popup-with-zoom-anim" href="{{asset('public/img/dominicana/2.jpg')}}">
                    <img src="{{asset('public/img/dominicana/2.jpg')}}" alt="&laquo; 5 сезонов &raquo; Доминикана">

                </a>
                <a title="&laquo; 5 сезонов &raquo; Доминикана" class="popup-with-zoom-anim" href="{{asset('public/img/dominicana/3.jpg')}}">
                    <img src="{{asset('public/img/dominicana/3.jpg')}}" alt="&laquo; 5 сезонов &raquo; Доминикана">
                </a>
            </div>
            <div class="text_info_in_page">
            </div>
        </div>
        <!-- End block info -->
        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
    <!-- Block Найди сам! -->
    <section class="find_by_self">
        <div class="wrapper">
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
    <!-- End Block Найди сам! -->
@endsection

