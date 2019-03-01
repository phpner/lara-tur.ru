@extends('layouts.app')
@section('title')Туры в Египет – купить горящие путевки на отдых в Египте по самым низким ценам! тур в Египет на <?php echo date("Y");?> года@endsection
@section('description')У нас вы сможете &#9992; приобрести путевку на отдых в Египет по самым низким ценам! От проверенных туроператоров. Индивидуальный подбор путевок, &#9755; онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, турагенство, Египет, горящие, Ростов на Дону, подбор@endsection
@section('menu')
@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Египет</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Египет" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/1.jpg')}}">
                    <img src="{{asset('public/img/egipet/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Египет">
                </a>

                <a title="&laquo; 5 сезонов &raquo; Египет" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/2.jpg')}}">
                    <img src="{{asset('public/img/egipet/2.jpg')}}" alt="&laquo;5 сезонов&raquo; ">
                </a>

                <a title="&laquo; 5 сезонов &raquo; Египет" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/3.jpg')}}">
                    <img src="{{asset('public/img/egipet/3.jpg')}}" alt="Египет ">
                </a>
            </div>
            <div class="text_info_in_page">
            </div>
        </div>
        <!-- End block info -->



        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974436"></div>
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

