@extends('layouts.app')
@section('title')Туры в Болгарию – горящие путевки! Лучшие цены на отдых в <?php echo date('Y')?> году!@endsection
@section('description')Купить путевку на отдых в Болгарию по низким ценам! Онлайн заказ туров на сайте &laquo;5 сезонов&raquo;!@endsection
@section('keywords')туры в Болгарию@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Болгарию</h1>
        <!-- block info -->
        <div class="info_img">

            <div class="slider_page zoom-gallery">

            <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                <img src="{{asset('public/img/bolgariya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

            </a>

            <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/2.jpg')}}">
                <img src="{{asset('public/img/bolgariya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

            </a>

            <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/3.jpg')}}">
                <img src="{{asset('public/img/bolgariya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Болгария">

            </a>
            </div>
            <div class="text_info_in_page">
                <p> Болгария всегда считалась не очень большой по размерам страной, но в ней можно найти все, что
                    необходимо для туристов: древняя культура, дружелюбные люди, неповторимые пейзажи и, конечно же,
                    чистое, теплое черное море. Именно тот факт, что здесь теплое море, набирает такую популярность при
                    покупке горящих туров в Болгарию. Горящие туров в Болгарию, были популярными ещё во времена СССР.
                </p>
                <p>
                    Ведь купить тур в Болгарию было посильно любому комсомольскому вожаку.
                    На сегодняшний день турагентство <i>&laquo;5 сезонов&raquo;</i> предлагает бронировку в Луганске горящих туров на отдых в
                    Болгарию.
                </p>
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

