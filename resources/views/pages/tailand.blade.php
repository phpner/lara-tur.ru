@extends('layouts.app')
@section('title')Туры в Таиланд из Луганска – заказ онлайн горящую путевку на отдых в Таиланде@endsection
@section('description')Купить путевку на отдых в Таиланде по самым низким ценам на <?php echo date("Y");?> год! онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Таиланд, Тайский, Тайланд, отдых, турагентство, горящие, Ростов на Дону, подбор@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Таиланд</h1>

                <figure class="slider_page zoom-gallery">
                    <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/1.jpg')}}">
                        <img src="{{asset('public/img/tailand/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Таиланд">
                    </a>

                    <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/2.jpg')}}">
                        <img src="{{asset('public/img/tailand/2.jpg')}}" alt="&laquo;5 сезонов&raquo; туры Таиланд">

                    </a>

                    <a title="&laquo;5 сезонов&raquo; Таиланд" class="popup-with-zoom-anim" href="{{asset('public/img/tailand/3.jpg')}}">
                        <img src="{{asset('public/img/tailand/3.jpg')}}" alt="&laquo;5 сезонов&raquo; отдых в Таиланд">
                    </a>
                </figure>

            <div class="text_info_in_page">
                Туристическое агентство <i>&laquo;5 сезонов&raquo;</i> предлагает бронирование билетов на отдых в
                <h2>Таиланде из Луганска (вылет из г. Ростов-на-Дону).</h2> <br>
                <p>Отдых на самых популярных курортах: Паттайи и Пхукета. Таиланд – сказочное Королевство Таиланд известно всем великолепными местами для отдыха.</p>
                <p>Туристическое агентство <i>&laquo;5 сезонов&raquo;</i> предлагает не только отдых, но и организацию
                    экскурсий в огромное множество прекрасных храмов (храм Истины, храм Утренней Зари и т.д.).</p>
                Великолепие этих строений впечатляет само по себе, их архитектура, внутреннее убранство, заставляют трепетать перед историей.
                <br>
                Отдых на пляжах, комфортабельные отели, дайвинг и рыбная ловля, изобилие ресторанов и баров, отдых на лоне природы в заповедниках и парках, сохранивших свою природу в первозданном виде – Туристы здесь найдут развлечения на любой вкус.

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

