@extends('layouts.app')
@section('title')Туры в Шри-Ланку – заказ онлайн горящую путевку. Лучшие цены на отдых в Шри-Ланку@endsection
@section('description')Купить путевку на отдых в Шри-Ланку по самым низким ценам! онлайн заказ туров на сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Шри-Ланку, отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры на Шри-Ланку</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/1.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Шри-Ланку">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/2.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/2.jpg')}}" alt="&laquo;5 сезонов&raquo; ">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/3.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/3.jpg')}}" alt="Шри-Ланку">

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
    </section>
    <!-- Block Найди сам! -->
    <section class="find_by_self">
        <div class="wrapper">
            <p class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</p>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
    <!-- End Block Найди сам! -->
@endsection

