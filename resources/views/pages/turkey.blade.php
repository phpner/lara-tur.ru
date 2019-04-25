@extends('layouts.app')
@section('title')Туры в Турцию – горящие путевки! Лучшие цены на отдых в турции!@endsection
@section('description')Отдых для всей семьи из Луганска в Турцию - Аланья, Анталия, Белек, Кемер, Кушадасы, Мармарис, Сиде, Стамбул, Фетхие. Вылет из Ростова на дону@endsection
@section('keywords')туры, Луганск, ЛНР, отпуск, отдых, Турцию, Турция, турагентство, горящие, Ростов на Дону, подбор@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Турцию</h1>

                <figure class="slider_page zoom-gallery">
                    <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim"   href="{{asset('public/img/turkey/turtsiya-1.jpg')}}">
                        <img src="{{asset('public/img/turkey/turtsiya-1.jpg')}}" alt="&laquo;5 сезонов&raquo; Турция">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim"
                       href="{{asset('public/img/turkey/turtsiya-2.jpg')}}">
                        <img src="{{asset('public/img/turkey/turtsiya-2.jpg')}}" alt="&laquo; 5 сезонов &raquo; Турция">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim"
                       href="{{asset('public/img/turkey/turtsiya-3.jpg')}}">
                        <img src="{{asset('public/img/turkey/turtsiya-3.jpg')}}" alt="&laquo; 5 сезонов &raquo; Турция">
                    </a>
                </figure>
            <div class="text_info_in_page">
                Туристическое агентство <i>&laquo;5 сезонов&raquo;</i> предлагает отдых в Турции из Луганска.<br>
                <p>Самый простой и доступный отдых для всей семьи, простота и совершенство – все объединяет эта
                    удивительная страна.</p>
                Яркий колорит, удивительные пейзажи и лазурная вода Мертвого моря – это настоящая Турция.
                <p><i>&laquo;5 сезонов&raquo;</i> предлагает для Вас как бюджетный отдых в отелях трех звезд, так и
                    отдых в отелях Премиум класса на самых популярных курортах - Аланья, Анталия, Белек, Кемер,
                    Кушадасы, Мармарис, Сиде, Стамбул, Фетхие.</p>
                Турция прекрасна всем: богатая история, культура, национальная кухня, доброжелательное население,
                развитая инфраструктура – как можно не влюбиться в Турцию?
                <br>
                Совет бывалого туриста – денег много не бывает, отдыхай как можно ярче!
            </div>
        </div>
        <!-- End block info -->
        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
</main>

@endsection

@section('kurort')
    <!-- <div class="wrapper">
       <div class="section-kurort-turkay">
            <h2 class="h1">Лучшие курорты Турции</h2>
            <div class="item">
                <h3>Анталия</h3>
                <div class="zoom-gallery-kurort">
                    <a href="/public/img/turkey/hot-kurort/1.jpg">
                        <img src="/public/img/turkey/hot-kurort/1.jpg" alt="">
                    </a>
                    <a href="/public/img/turkey/hot-kurort/2.jpg">
                        <img class="hidden" src="/public/img/turkey/hot-kurort/2.jpg" alt="">
                    </a>
                </div>
            </div>
           <div class="item">
               <h3>Анталия</h3>
               <div class="zoom-gallery-kurort">
                   <a href="/public/img/turkey/turtsiya-1.jpg">
                       <img src="/public/img/turkey/turtsiya-1.jpg" alt="">
                   </a>
                   <a href="/public/img/turkey/turtsiya-2.jpg">
                       <img class="hidden" src="/public/img/turkey/hot-kurort/2.jpg" alt="">
                   </a>
               </div>
           </div>
        </div>
    </div>
    -->

@endsection
@section('chooseTour')
    <!-- Block Найди сам! -->
    <section class="find_by_self">
        <div class="wrapper">
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
    <!-- End Block Найди сам! -->
@endsection

