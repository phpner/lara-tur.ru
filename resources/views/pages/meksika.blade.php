@extends('layouts.app')
@section('title')Туры в Мексику – заказ горящую путевку. Лучшие цены на отдых в <?php echo date('Y')?>!@endsection
@section('description')Купить путевку на отдых в Мексику по самым низким ценам! Онлайн заказ туров на сайте &laquo;5 сезонов&raquo;!@endsection
@section('keywords')туры в Мексику@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Мексику</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/meksika/1.jpg')}}" alt="&laquo;5 сезонов&raquo; О Мексике">
                <span>О Мексике</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/meksika/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты о Мексике">
                <span>Отдых в Мексике</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/meksika/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Фото Кафедральный собор в Мехико">
                <span>Полезно знать</span>
            </a>
        </div>
        <!-- End block info -->
        <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974444"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>

        <!-- block info popup-->
        <div id="about-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/meksika/1.jpg')}}" alt="&laquo;5 сезонов&raquo; О Мексике">
            <h3>О Мексике</h3>

            <p> В Мексике ежегодно отдыхает более 30 млн туристов. Здесь колоритные народные гуляния, руины древних
                городов, экзотические природные заповедники и чистые пляжи.</p>

            <p> Страна расположена в южной части Северной Америки. Омывают Мексику воды Калифорнийского и Мексиканского
                заливов, Карибского моря и Тихого океана.</p>

            <p> В 100-х годах нашей эры на территории Мексики существовало несколько цивилизаций. Самым развитым было
                поселение майя. Майя хорошо знали астрономию и математику, создали иероглифическое письмо, календарь. В
                XII столетии свою империю на территории Мексики основали ацтеки. В первой половине XVI века земли были
                завоеваны испанцами. Однако местных жителей не устраивало новое правительство. В результате нескольких
                революций, военных переворотов и вооруженного конфликта между мексиканцами и испанцами, в 1810 году
                Мексику провозгласили независимым государством.</p>

            <p>Страна лежит в тропическом и субтропическом климатических поясах. На прибрежных равнинах средняя
                температура воздуха летом составляет +26°C, в зимнее время опускается до +5°C. В горных регионах
                показатели термометра колеблются от +2°C зимой до +15°C летом.</p>

        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/meksika/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты о Мексике">
            <h3><strong>Отдых в Мексике</strong></h3>
            <h4><strong>Курорты Мексики:</strong></h4>
            <ul>
                <li><span style="font-weight:400"><strong>Мехико</strong> — крупный мегаполис с множеством исторических достопримечательностей. К осмотру туристам предлагаются руины </span><span style="font-weight:400">Теночтитлана — столицы империи ацтеков, залы музея Темпло Майор, красивая площадь в стиле барокко и другие достопримечательности.&nbsp;</span></li>
                <li><span style="font-weight:400"><strong>Гвадалахара</strong> неофициально называют столицей роз, здесь красивые парками и сады.&nbsp;</span></li>
                <li><span style="font-weight:400"><strong>Пуэбла</strong> — город в 100 км от столицы Мексики, находится в долине, окруженной четырьмя вулканами, охраняется ЮНЕСКО.</span></li>
                <li><span style="font-weight:400"><strong>Ривьера-Майя</strong> — пляжный курорт для семейного отдыха.</span></li>
                <li><span style="font-weight:400"><strong>Акапулько</strong> — популярный молодежный &nbsp;курорт на побережье Тихого океана. Здесь много клубов, баров, казино и дискотеки под открытым небом.</span></li>
            </ul>
            <h4><strong>Виды отдыха:</strong></h4>
            <ul>
                <li style="font-weight:400"><strong>Пляжный</strong>. 20 пляжей Мексики награждены Голубым флагом за чистоту и хорошо развитую инфраструктуру</li>
                <li style="font-weight:400"><strong>Дайвинг</strong>. Лучшим временем для подводного плавания считается период с декабря по март, когда в на курортах Мексики нет ветра.</li>
                <li style="font-weight:400"><strong>Серфинг</strong>. Подходящим местом для виндсерфинга является Пуэрто-Эскондидо, где ежегодно проходит чемпионат мира с данного вида спорта.</li>
                <li style="font-weight:400"><strong>Экскурсионный</strong>. В списке ЮНЕСКО находится более 30 достопримечательностей Мексики.</li>
            </ul>
            <h4><strong>Лучшее время для отдыха:</strong></h4>
            <p><span style="font-weight:400"><strong>С ноября по апрель</strong> в Мексике пик туристического сезона, температура воды в этот период до +28°С. <strong>Летом и ранней осенью</strong> туристов меньше из-за возможных осадков и ветреной погоды. Однако дожди в Мексике кратковременны и не помешают отдыху. В этот период можно приобрести горящий тур по выгодной цене.</span></p>
        </div>
    </section>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/meksika/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Фото Кафедральный собор в Мехико">
        <h3>Путеводитель по Мексике</h3>
        <h4><span style="font-weight:400"></span><strong>Топ достопримечательностей:</strong></h4>
        <ul>
            <li style="font-weight:400"><strong>Темпло Майор</strong> — комплекс культовых сооружений, музей под открытым небом. Здесь представлено более 5 тыс. экспонатов и исторических сооружений.</li>
            <li style="font-weight:400"><strong>Базилика Девы Марии Гваделупской</strong>, датируемая 1531 годом, главный храм государства.</li>
            <li style="font-weight:400"><strong>Пирамида Кукулькан</strong> — культовое сооружение в Чичен-Ица.</li>
            <li style="font-weight:400"><strong>Монте-Альбан вблизи Оахака</strong>, находится под охраной ЮНЕСКО. Этот археологический комплекс — центр культуры Сапотеков.</li>
            <li style="font-weight:400"><strong>Сак-Актун</strong> — подземная река длиной 300 км. Считается природным чудом страны.</li>
        </ul>
        <h4><strong>Полезно знать:</strong></h4>
        <ul>
            <li style="font-weight:400">Перед посещением Мексики рекомендуется <strong>пройти вакцинацию</strong> от малярии и гепатита, хотя в требованиях для визы этого нет;</li>
            <li style="font-weight:400">отдавайте предпочтение <strong>кипяченой или бутилированной воде</strong>;</li>
            <li style="font-weight:400"><strong>следите за вещами</strong> в многолюдных местах, в Мексике часто случаются кражи;</li>
            <li style="font-weight:400"><strong>не фотографируйте</strong> местных жителей без их разрешения;</li>
            <li style="font-weight:400"><strong>запрещено курить</strong> в общественных местах, штраф за нарушение составляет от 1500 мексиканских песо (77,20 $).</li>
        </ul>
    </div>
    <!-- End block info popup-->
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

