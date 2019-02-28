@extends('layouts.app')
@section('title')Туры в Индию – заказ онлайн горящую путевку. Лучшие цены на отдых в Индию!@endsection
@section('description')Купить тур на отдых в Индию по самым низким ценам! онлайн заказ туров на сайте 5 сезонов.@endsection
@section('keywords')туры в Индию, Арамболь, Морджим, Калангут@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Индию</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo;5 сезонов&raquo; Индия" class="popup-with-zoom-anim" href="{{asset('public/img/indiya/1.jpg')}}">
                    <img src="{{asset('public/img/indiya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Индия">
                </a>

                <a title="&laquo;5 сезонов&raquo; Индия" class="popup-with-zoom-anim" href="{{asset('public/img/indiya/2.jpg')}}">
                    <img src="{{asset('public/img/indiya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; туры Индию">

                </a>

                <a title="&laquo;5 сезонов&raquo; Индия" class="popup-with-zoom-anim" href="{{asset('public/img/indiya/3.jpg')}}">
                    <img src="{{asset('public/img/indiya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; отдых в Индии">
                </a>
            </div>
            <div class="text_info_in_page">
               <i>&laquo;5 сезонов&raquo;</i> предлагает <h2>окунуться в чарующую атмосферу сказочной Индии.</h2>
                Для Вас забронируют отели как в Северном, так и в Южном Гоа.
                Волшебство атмосферы, сказочные <h3>пляжи севера Арамболь или Морджим, а также Калангут,</h3> не смогут оставить вас равнодушными.</p>
                <p> Откройте свое сердце Индии, и она вас отблагодарит неповторимым колоритом и буйством красок.
                    Ведь Индия – одна из немногих стран, практически полностью сохранивших свои культурные традиции,
                    пришедшие еще с древних времен и внедривших новые за счет иммигрантов и стран-завоевателей.
                </p>
                <p><i>&laquo;5 сезонов&raquo;</i> предоставит отели и апартаменты как уровня двух звезд, так и лакшери
                    отдых в президентских стилях Южного Гоа, а уникальная техника массажа «Шаверда» покорит Вас
                    неповторимой методикой лечения почти всех заболеваний.
                </p>
                Только с туристическим агентством <i>&laquo;5 сезонов&raquo;</i> Вам будет уютно в этой дивной стране!
                <br>
                Вылеты из Ростова. Бронируйте прямо сейчас  билеты в сказочную Индию!
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
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
    <!-- End Block Найди сам! -->
@endsection

