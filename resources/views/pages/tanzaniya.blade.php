@extends('layouts.app')

@section('title')Горящие туры в Танзанию&#129351;, купить путевки на отдых в Танзании по лучшим ценам <?php echo date("Y");?> года@endsection
@section('description')У нас вы сможете &#9992; приобрести путевку на отдых в Танзанию по самым низким ценам! от проверенных туроператоров. Индивидуальный подбор путевок, &#9755; онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Танзания, горящие, Ростов на Дону, подбор@endsection

@section('menu')@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Танзанию</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Танзания" class="popup-with-zoom-anim" href="{{asset('public/img/tanzaniya/1.jpg')}}">
                    <img src="{{asset('public/img/tanzaniya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Танзания">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Танзания" class="popup-with-zoom-anim" href="{{asset('public/img/tanzaniya/2.jpg')}}">
                    <img src="{{asset('public/img/tanzaniya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; ">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Танзания" class="popup-with-zoom-anim" href="{{asset('public/img/tanzaniya/3.jpg')}}">
                    <img src="{{asset('public/img/tanzaniya/3.jpg')}}" alt="Танзания ">

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

