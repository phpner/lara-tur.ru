@extends('layouts.app')
@section('title')Туры в Болгарию – горящие путевки! Лучшие цены на отдых в <?php echo date('Y')?> году!@endsection
@section('description')Купить путевку на отдых в Болгарию по низким ценам! Онлайн заказ туров на сайте &laquo;5 сезонов&raquo;!@endsection
@section('keywords')туры в Болгарию@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Болгарию</h1>
            <figure class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                    <img src="{{asset('public/img/bolgariya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/2.jpg')}}">
                    <img src="{{asset('public/img/bolgariya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/3.jpg')}}">
                    <img src="{{asset('public/img/bolgariya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

                </a>
            </figure>
            <div class="text_info_in_page">
                <p>Болгария считается не очень большой страной, но в ней можно найти все, что необходимо для туриста:
                    древние города, которые богаты памятниками архитектуры, неповторимые пейзажи, великолепные горы и,
                    конечно же, чистое, теплое черное море. Именно тот факт, что море здесь теплое, набирает такую
                    популярность при покупке горящих туров в Болгарию.</p>
                <p> Горящие туры в Болгарию были популярными ещё во времена СССР. Ведь купить такой тур было посильно
                    любому комсомольскому вожаку.</p>
                На сегодняшний день турагентство <i>&laquo;5 сезонов&raquo;</i> предлагает Вам бронирование в ЛНР горящих туров на отдых в солнечную Болгарию.

            </div>
        </div>
        <!-- End block info -->
        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>

    </section>
</main>
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

