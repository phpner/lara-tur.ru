@extends('layouts.app')
@section('title')Туры в Таиланд – заказ онлайн горящую путевку на отдых в Таиланде@endsection
@section('description')Купить путевку на отдых в Таиланде по самым низким ценам на <?php echo date("Y");?> год! онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Таиланд, Тайский, Тайланд, отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Таиланд</h1>
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/1.jpg')}}">
                    <img src="{{asset('public/img/tailand/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Таиланд">
                </a>

                <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/2.jpg')}}">
                    <img src="{{asset('public/img/tailand/2.jpg')}}" alt="&laquo;5 сезонов&raquo; туры Таиланд">

                </a>

                <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/3.jpg')}}">
                    <img src="{{asset('public/img/tailand/3.jpg')}}" alt="&laquo;5 сезонов&raquo; отдых в Таиланде">
                </a>
            </div>
            <div class="text_info_in_page">
                <h3>Таиланд – сказочное королевство Таиланд.</h3> <br>
                Туристическое агентство <i>«5 сезонов»</i> предлагает бронирование билетов на отдых в <h2>Таиланде из ЛНР (вылет из г. Ростов-на-Дону).</h2><br>
                <h2>Отдых в самых популярных курортах: Паттайи и Пхукета.</h2>
                Туристическое агентство <i>«5 сезонов» </i>предлагает не только отдых, но и организацию экскурсий Храмов, королевских дворов и неповторимый Бангкок.
            </div>
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

