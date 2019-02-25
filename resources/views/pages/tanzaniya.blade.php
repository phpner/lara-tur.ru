@extends('layouts.app')

@section('title')Горящие туры в Танзанию&#129351;, купить путевки на отдых в Танзании по лучшим ценам <?php echo date("Y");?> года@endsection
@section('description')У нас вы сможете &#9992; приобрести путевку на отдых в Танзанию по самым низким ценам! от проверенных туроператоров. Индивидуальный подбор путевок, &#9755; онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Танзания, горящие, Ростов на Дону, подбор@endsection

@section('menu')@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Танзанию</h1>

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

