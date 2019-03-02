@extends('layouts.app')

@section('title')Горящие туры в Танзанию&#129351;, купить путевки на отдых в Танзании по лучшим ценам <?php echo date("Y");?> года@endsection
@section('description')У нас вы сможете &#9992; приобрести путевку на отдых в Танзанию по самым низким ценам! от проверенных туроператоров. Индивидуальный подбор путевок, &#9755; онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Танзания, горящие, Ростов на Дону, подбор@endsection

@section('menu')@endsection
@section('center')
    <section class="wrapper pt-118px">

        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Танзанию</h1>
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
                <p>Танзания подарит Вам незабываемые впечатления и изменит Ваше мнение об Африке.
                    В Африке, у берегов Индийского океана, пляжи с ярко белым песком, национальные парки, смешение
                    культур с ноткой национального колдовства не смогут оставить Вас равнодушными, оставив после себя
                    теплые, насыщенные воспоминания.</p>
                <p> Этот отпуск подарит множество ярких эмоций и впечатлений! Основной особенностью Танзании является
                    сафари, где отдыхающие наблюдают за жизнью диких животных и природой.
                    В Танзании можно найти отели на любой вкус и финансовые возможности туриста.</p>
                <p> Здесь Вы можете
                    остановить свой выбор не только на привычных гостиницах, но и лакшери комплексах, где домики-палатки
                    возведены на территории саванны, а зебры и цесарки бродят под окнами в поисках еды.</p>
                    Туристическое Агентство <i>&laquo;5 сезонов&raquo;</i> предлагает Вам забронировать билеты в Луганске на незабываемый отпуск!
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

