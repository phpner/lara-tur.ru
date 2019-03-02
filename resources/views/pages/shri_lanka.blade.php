@extends('layouts.app')
@section('title')Туры в Шри-Ланку – заказ онлайн горящую путевку. Лучшие цены на отдых в Шри-Ланку@endsection
@section('description')Купить путевку на отдых в Шри-Ланку по самым низким ценам! онлайн заказ туров на сайте &laquo;5 сезонов&raquo; в Луганске.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Шри-Ланку, отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры на Шри-Ланку</h1>
            <div class="slider_page zoom-gallery">
                <a title="&laquo;5 сезонов&raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/1.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Шри-Ланку">
                </a>

                <a title="&laquo;5 сезонов&raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/2.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Шри-Ланку">
                </a>

                <a title="&laquo;5 сезонов&raquo; Шри-Ланку" class="popup-with-zoom-anim" href="{{asset('public/img/shri-lanka/3.jpg')}}">
                    <img src="{{asset('public/img/shri-lanka/3.jpg')}}" alt="Шри-Ланку">
                </a>
            </div>
            <div class="text_info_in_page">
                <p> Шри-Ланка - это довольно небольшой остров, который поражает своей неповторимостью! Расположен он
                    всего лишь в 800 километрах от экватора Земли!</p>
                <p> Ни одна страна мира не может предложить туристу столько же незабываемых мест и впечатлений!
                    Приехали Вы отдыхать, посетить экскурсионные программы или по работе, в какой бы сезон года не
                    посетили бы Шри-Ланку, Вы будете чувствовать у себя в душе ощущение нескончаемого лета и не
                    прекращаемые переливы ярких красок. Шри – Ланка умеет влюблять в себя! Она дарит комфорт и
                    полноценный отдых туристу, всецело оправдывая ожидания.
                </p> Туристическое Агентство <i>&laquo;5 сезонов&raquo;</i> предлагает Вам забронировать билеты в Луганске на незабываемый отпуск!

            </div>
        </div>
        <!-- End block info -->
        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>
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

