@extends('layouts.app')
@section('title')Туры в Болгарию – горящие путевки! Лучшие цены на отдых в <?php echo date('Y')?> году!@endsection
@section('description')Купить путевку на отдых в Болгарию по низким ценам! Онлайн заказ туров на сайте &laquo;5 сезонов&raquo;!@endsection
@section('keywords')туры в Болгарию@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры во Вьетнам</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">

            <div class="slider_page zoom-gallery">

                <a title="&laquo; 5 сезонов &raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                    <img src="{{asset('public/img/vetnam/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/vetnam/2.jpg')}}">
                    <img src="{{asset('public/img/vetnam/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/vetnam/3.jpg')}}">
                    <img src="{{asset('public/img/vetnam/3.jpg')}}" alt="Вьетнам - Золотой мост в руках бога">

                </a>
            </div>
            <div class="text_info_in_page">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum deserunt dignissimos error eveniet exercitationem magnam maxime minus nesciunt nisi non, nulla numquam perspiciatis, quia quisquam sequi sint temporibus voluptates voluptatum.
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
