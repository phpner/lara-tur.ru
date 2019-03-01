@extends('layouts.app')
@section('title')Тур агентство «5 сезонов» предлагает отдых в Турции из Луганска. Самый простой и доступный отдых для всей семьи@endsection
@section('description')«5 сезонов» предлагает для Вас как бюджетный отдых в отелях 3 звезд, так и отдых в отелях премиум класса, в самых популярных курортах - Сиде, Аланьи, Мармариса и Бодрума@endsection
@section('keywords')туры, Луганск, ЛНР, отпуск, отдых, Турцию, Турция, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Турцию</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">
            <div class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim" href="{{asset('public/img/tursia/turtsiya-1.jpg')}}">
                    <img src="{{asset('public/img/tursia/turtsiya-1.jpg')}}" alt="&laquo;5 сезонов&raquo; Турция">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim" href="{{asset('public/img/tursia/turtsiya-2.jpg')}}">
                    <img src="{{asset('public/img/tursia/turtsiya-2.jpg')}}" alt="&laquo; 5 сезонов &raquo; Турция">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Турция" class="popup-with-zoom-anim" href="{{asset('public/img/tursia/turtsiya-3.jpg')}}">
                    <img src="{{asset('public/img/tursia/turtsiya-3.jpg')}}" alt="&laquo; 5 сезонов &raquo; Турция">
                </a>
            </div>
            <div class="text_info_in_page">
                Туристическое  агентство <i>&laquo;5 сезонов&raquo;</i> предлагает<h2> отдых в Турции из Луганска.</h2><br>
                <p>Самый простой и доступный отдых для всей семьи, простота и совершенство – все объединяет эта удивительная страна.</p>
                Яркий колорит, удивительные пейзажи  и <h3>лазурная вода Мертвого моря – это настоящая Турция.</h3>
                <p><i>&laquo;5 сезонов&raquo;</i> предлагает для Вас как бюджетный отдых в отелях трех звезд, так и
                    отдых в отелях Премиум класса на самых популярных курортах - Сиде, Аланьи, Мармариса и Бодрума.</p>
                <h2>Турция прекрасна всем</h2>: богатая история, культура, национальная кухня, доброжелательное население, развитая инфраструктура – как можно не влюбиться в эту страну?
                <br>
                Совет бывалого туриста – денег много не бывает, отдыхай как можно ярче!


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

