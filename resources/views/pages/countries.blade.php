@extends('layouts.app')
@section('title')Туры в ОАЭ – заказ онлайн горящую путевку на отдых в Арабских Эмиратах@endsection
@section('description')Купить путевку на отдых в Арабских Эмиратах по самым низким ценам на <?php echo date("Y");?> год! онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых,  Арабских Эмиратах, ОАЭ,отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры - все станы</h1>
        <hr class="style-seven">
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

