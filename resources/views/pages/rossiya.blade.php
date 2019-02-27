@extends('layouts.app')
@section('title')Туры в Росcию – купить горящие путевки на отдых в Росcию по самым низким ценам! Туры в Росcию на <?php echo date("Y");?> год@endsection
@section('description')5 сезонов организует уникальный и удивительный тур в Россию - огромный выбор недорогих путевок и туров в Россию: вы можете посмотреть цены на отдых в России!@endsection
@section('keywords')туры, Луганск, отпуск, отдых, турагенство, Росcию, горящие, Ростов на Дону, подборь, лнр@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Росcию</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">

            <div class="slider_page zoom-gallery">

                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/bolgariya/1.jpg')}}">
                    <img src="{{asset('public/img/russiya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/russiya/2.jpg')}}">
                    <img src="{{asset('public/img/russiya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Вьетнам">

                </a>

                <a title="&laquo; 5 сезонов &raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/russiya/3.jpg')}}">
                    <img src="{{asset('public/img/russiya/3.jpg')}}" alt="Вьетнам - Золотой мост в руках бога">

                </a>
                <a title="&laquo;5 сезонов&raquo; Болгария" class="popup-with-zoom-anim" href="{{asset('public/img/russiya/4.jpg')}}">
                    <img src="{{asset('public/img/russiya/4.jpg')}}" alt="Вьетнам - Золотой мост в руках бога">

                </a>
            </div>
            <div class="text_info_in_page">
                <i>&laquo;5 сезонов&raquo;</i> организует уникальный и удивительный тур в северную пальмира. <br>Помимо проживания в отелях 3-4 заезды можем предложить уникальную экскурсионную программу,
                <br>
                <h3>Вас ждет Эрмитаж, Петродворец с уникальными фонтанами.</h3> Окунитесь в роскошь петровской эпохи. <br> Сказочный Петродворец двор, понравиться не только вам, но и детям.
                северная столица, это бывшая столица русской империи. <br> все злесь пропитано духом как петровской эпохи, так и начала революции 1917 года.
                <br>
                <h2><i>&laquo;5 сезонов&raquo;</i> предлагает уникальную подборку экскурсий.</h2><br>
                <h3>А также организовываем программу по золотому кольцу России Суздаль Ярослав.</h3>

            </div>
        </div>
        <!-- End block info -->



        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974436"></div>
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

