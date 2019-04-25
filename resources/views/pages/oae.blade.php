@extends('layouts.app')
@section('title')Арабские Эмираты – цены на отдых <?php echo date("Y");?>г. туры в ОАЭ@endsection
@section('description')курорт ОАЭ Абу-Даби Дубай Шарджа Фуджейра Рас-эль-Хайма Аджман Умм-аль-Кувейн цена на <?php echo date("Y");?> Бронируйте и заказывайте туры от самых простых, до Luxury апартаментов.@endsection
@section('keywords')туры, Луганск, отпуск, отдых,  Арабских Эмиратах, ОАЭ,отдых, турагентство, горящие, Ростов на Дону, подбор, ЛНР@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Арабские Эмираты</h1>
                <figure class="slider_page zoom-gallery">
                    <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                        <img src="{{asset('public/img/oae/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Туры в ОАЭ ">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/oae/2.jpg')}}">
                        <img src="{{asset('public/img/oae/2.jpg')}}" alt="&laquo;5 сезонов&raquo; туры по Арабских Эмиратах">
                    </a>

                    <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/oae/3.jpg')}}">
                        <img src="{{asset('public/img/oae/3.jpg')}}" alt="Арабских Эмиратах">
                    </a>
                </figure>

            <div  class="text_info_in_page">
                <p><i>&laquo;5 сезонов&raquo;</i> представляет уникальную страну ОАЭ.
                    Сочетание неповторимой красоты самобытного Древнего Востока и динамично развивающего современного
                    Востока.</p><p>Здесь представлены самые смелые технологии, уникальная современная архитектура и достижения нашей
                    современности.
                Вы только вдумайтесь, сейчас в пригороде Абу Даби открылся филиал парижского Лувра.
                Вылет из Ростова еженедельно.</p>
                <p>Только <i>&laquo;5 сезонов&raquo;</i> предлагает волшебный отдых в сочетании с уникальными и
                    неповторимыми экскурсиями, передающими самобытную атмосферу мира Востока.
                    Бронируйте и заказывайте туры от самых простых,
                    до Luxury апартаментов. У нас индивидуальный подход к каждому клиенту!</p>
                Туристическое агентство <i>«5 сезонов»</i> предлагает бронирование билетов на отдых по ценама <?php echo date("Y");?> года - Арабские Эмираты из Луганска.
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

