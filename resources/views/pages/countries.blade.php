@extends('layouts.app')
@section('title')Выбор туров по всем странам мира из Луганска по самым низким ценам. Забронировать подходящий горящий тур.@endsection
@section('description')Самые актуальные цены на все направления! Подобрать страну для хорошего отдыха и приятных воспоминаний.@endsection
@section('keywords')туры, Луганск, отпуск, отдых,Арабских Эмиратах, ОАЭ,отдых, турагенство, горящие, Ростов на Дону, подбор, Луганск, египет@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры - все станы</h1>
        <hr class="style-seven">
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

