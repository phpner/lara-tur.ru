@extends('layouts.app')
@section('title')Туры в Индонезию – заказ горящую путевку по лучшем ценам! Отдых на Бали@endsection
@section('description')Купить тур на отдых в Индонезию по самым низким ценам! Острова Нуса-Дуа,Острова Ява, Бали.@endsection
@section('keywords')туры в Индонезию, Острова Нуса-Дуа,Острова Ява, Бали@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Индонезию</h1>
                <figure class="slider_page zoom-gallery">
                    <a title="&laquo; 5 сезонов &raquo; Индонезия" class="popup-with-zoom-anim" href="{{asset('public/img/indoneziya/1.jpg')}}">
                        <img src="{{asset('public/img/indoneziya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Индонезия">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Индонезия" class="popup-with-zoom-anim" href="{{asset('public/img/indoneziya/2.jpg')}}">
                        <img src="{{asset('public/img/indoneziya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Бали">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Индонезия" class="popup-with-zoom-anim" href="{{asset('public/img/indoneziya/3.jpg')}}">
                        <img src="{{asset('public/img/indoneziya/3.jpg')}}" alt="Индонезия Бали">
                    </a>
                    <a title="&laquo; 5 сезонов &raquo; Индонезия" class="popup-with-zoom-anim" href="{{asset('public/img/indoneziya/3.jpg')}}">
                        <img src="{{asset('public/img/indoneziya/4.jpg')}}" alt="Индонезия Бали">
                    </a>
                </figure>
            <div class="text_info_in_page">
                <h3>Страна Индонезия - страна 1000 храмов и неповторимого сёрфа.</h3>
                Индонезия может предложить очень много приятных возможностей для отдыха – и любителям отдыха минимум-класса, и тем, кто предпочитаешь роскошь.
                <br>
                <p>Вас удивит неповторимая культура и природа Индонезии, вулканы, острова Ява, неподражаемые пляжи острова Нуса-Дуа.</p>
                Весь остров пропитан мистикой и поклонениями Божествам и духам.<br>
                 Бали теперь доступна для Вас! При вылете из Москвы с 01.01.2019 года действуют  регулярные авиарейсы компаний России.
                Откройте с агентством <i>&laquo;5 сезонов&raquo;</i> сказочную и прекрасную Индонезию.

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

