@extends('layouts.app')
@section('title')Туры во Вьетнам – горящие путевки! Лучшие цены на отдых в <?php echo date('Y')?> году!@endsection
@section('description')Не упустите свой шанс хорошего отдыха! Забронировать тур во Вьетнам можно на сайте 5 сезонов!@endsection
@section('keywords')туры в Вьетнам@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры во Вьетнам</h1>

                <figure class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                    <img src="{{asset('public/img/vetnam/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">
                </a>

                <a title="&laquo; 5 сезонов &raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/vetnam/2.jpg')}}">
                    <img src="{{asset('public/img/vetnam/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">
                </a>

                <a title="&laquo;5 сезонов&raquo; Вьетнам" class="popup-with-zoom-anim" href="{{asset('public/img/vetnam/3.jpg')}}">
                    <img src="{{asset('public/img/vetnam/3.jpg')}}" alt="Вьетнам - Золотой мост в руках бога">
                </a>
                </figure>
            <div class="text_info_in_page">
                <p>Вьетнам является тем недорогим местом, где можно получить массу удовольствий и полноценно отдохнуть.
                    Здесь большой выбор разнообразных развлечений, пляжи, горы, культурные и природные
                    достопримечательности, Вам помогут разнообразить досуг катание на верблюдах и слонах, а шумная
                    ночная жизнь не заставит вас скучать!</p>
                <p> Самой популярной экскурсией во Вьетнаме является круиз по завораживающей бухте Халонг, которая
                    является одним из чудес света и окутана тайнами и легендами…
                    Не упустите свой шанс провести незабываемый отдых!
                    Здесь вы так же сможете выбрать для себя и минимальный вариант, если бюджет не позволяет
                    большее.</p>
                Сегодня туристическое агентство <i>&laquo;5 сезонов&raquo;</i> предлагает Вам забронировать туры во Вьетнам из ЛНР.
            </div>
        </div>
        <div class="item_block_new">
            @foreach($hot_items as $item)
                <div class="item">
                    <img src="<?php echo $item['img']?>" alt="<?php echo $item['name']?>" title="<?php echo $item['name']?>">
                    <div class="box-text">
                        <span class="item_name"><?php echo $item['name']?></span>
                        <span class="item_price"><?php echo $item['price']?> руб.</span>
                    </div>

                </div>
            @endforeach
        </div>
        <!-- End block info -->
        <!--<div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
        -->

    </section>
</main>
    <!-- Block Найди сам!
    <section class="find_by_self">
        <div class="wrapper">
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
     End Block Найди сам! -->
@endsection

