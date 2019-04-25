@extends('layouts.app')
@section('title')Туры в Росcию – купить горящие путевки на отдых в Крым, Сочи, Геленджик, Санкт-Петербург по самым низким ценам! Туры на <?php echo date("Y");?>год@endsection
@section('description')5 сезонов организует уникальный и удивительный тур по России - огромный выбор недорогих путевок в Крым, Сочи, Геленджик, Санкт-Петербург Вы можете посмотреть цены на отдых!@endsection
@section('keywords')туры, Луганск, отпуск, отдых, турагентство, Росcию, горящие, Ростов на Дону, подборь, лнр@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Росcию</h1>
                <figure class="slider_page zoom-gallery">
                <a title="&laquo; 5 сезонов &raquo; Росcия" class="popup-with-zoom-anim" href="{{asset('public/img/rossiya/1.jpg')}}">
                    <img src="{{asset('public/img/rossiya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Росcия">
                </a>

                <a title="&laquo; 5 сезонов &raquo; Росcия" class="popup-with-zoom-anim" href="{{asset('public/img/rossiya/2.jpg')}}">
                    <img src="{{asset('public/img/rossiya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Росcия">
                </a>

                <a title="&laquo; 5 сезонов &raquo; Росcия" class="popup-with-zoom-anim" href="{{asset('public/img/rossiya/3.jpg')}}">
                    <img src="{{asset('public/img/rossiya/3.jpg')}}" alt="туры в Росcию">
                </a>
                <a title="&laquo;5 сезонов&raquo; Росcия" class="popup-with-zoom-anim" href="{{asset('public/img/rossiya/4.jpg')}}">
                    <img src="{{asset('public/img/rossiya/4.jpg')}}" alt="туры по Росcии">
                </a>
            </figure>
            <div class="text_info_in_page">
                <i>&laquo;5 сезонов&raquo;</i> организует уникальный и удивительный <h3>тур в Северную Пальмиру.</h3>
                <h2>Бронирование билетов на отдых в Россию из Луганска.</h2>
                <p> Помимо проживания в трех и четырех звездных отелях, мы можем предложить уникальную экскурсионную
                    программу.
                    Вас ждет Эрмитаж, сказочный Петродворец с его уникальными фонтанами.
                </p>
                <p> Окунитесь в роскошь Петровской эпохи! Массу впечатлений получите не только Вы, но и Ваши дети.
                Северная столица – бывшая столица Великой Русской империи, все здесь пропитано  как аристократической строгостью в ее величественной роскоши, так и духом революции 1917 года.</p>
                <p><i>&laquo;5 сезонов&raquo;</i> предлагает уникальную подборку экскурсий и организовывает программу
                    по Золотому кольцу России – Суздаль, Ярославль...</p>
            </div>
        </div>
        <!-- End block info -->

        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974436"></div>
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

