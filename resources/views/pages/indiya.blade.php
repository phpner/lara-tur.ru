@extends('layouts.app')
@section('menu')
@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Индию</h1>
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/indiya/1.jpg')}}" alt="">
                <span>Об Индии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/indiya/2.jpg')}}" alt="">
                <span>Отдых в Индии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/indiya/3.jpg')}}" alt="">
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
            <img class="main_img" src="{{asset('public/img/indiya/1.jpg')}}" alt="">
            <h3>Об Индии</h3>
            <p><span style="font-weight:400">Основная часть Индийской Республики находится на полуострове Индостан. Страна, расположена в Южной Азии и граничит с государствами:</span></p>
            <ul>
                <li style="font-weight:400"><span style="font-weight:400">Китай</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Мьянма</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Пакистан</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Непал</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Бутан</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Афганистан</span></li>
                <li style="font-weight:400"><span style="font-weight:400">Бангладеш</span></li>
            </ul>
            <p><span style="font-weight:400">Омывается Индия водами Аравийского, Лаккадивского морей и Бенгальского залива. Самая высокая точка страны – гора Канченджанга (около 8850 м).</span></p>
            <p><span style="font-weight:400">Индия многонациональная страна, где говорят на разных языках и диалектах. Здесь много традиций и религий. Национальные праздники и фестивали – яркое отображение индийской культуры.</span></p>
            <p><span style="font-weight:400">Индийская цивилизация возникла более 5 тыс. возле долины реки Инд, которая сегодня протекает по территории современного Пакистана. В 1500 году до н. э. пришедшие из Центральной Азии арийцы заложили основу индуистской религии. Именно тогда была написана основная часть священных писаний и ведических текстов на санскрите.</span></p>
            <p><span style="font-weight:400">Наибольшее развитие государства приходится на период (IV-VI вв. н. э.), во время правления династии Гуптов. Тогда в Индии процветали ремесло, искусство и наука. В стране добывали драгоценные камни и золото.</span></p>
            <p><span style="font-weight:400">В XVI в. мусульманские войска вторглись на территорию Индии и основали здесь империю Великих Моголов, за время которой было построено множество дорог и храмов.</span></p>
            <p><span style="font-weight:400">Позже Индия находилась под влиянием Британии и только в 1947 году страна стала независимым государством.</span></p>
        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/indiya/2.jpg')}}" alt="">
            <h3><strong>Отдых в Индии</strong></h3>
            <h4><b>Курорты Индии:</b></h4>
            <ul>
                <li><b>Мумбай</b><span style="font-weight:400"> – город на северном побережье Аравийского моря. Здесь расположена известная кинокомпания Болливуд.</span></li>
                <li><b>Аули</b><span style="font-weight:400"> – горнолыжный курорт в Индии, где проводятся национальные чемпионаты. В Аули оборудованы трассы общей длинной 10 км, курорт защищен от ветров хвойными лесами.</span></li>
                <li><b>Варанаси</b><span style="font-weight:400"> – древнейший священный город, в котором проживает около миллиона человек. Здесь много достопримечательностей, среди которых Мечеть Гьянвапи, святилище Вишванатх и Храм обезьян.</span></li>
                <li><b>Керала</b><span style="font-weight:400"> – Славится чистыми пляжами, уютными отелями, плантациями кофе, чая и специй. Также в Керале находится национальный заповедник Перияр.</span><span style="font-weight:400"></span></li>
            </ul>
            <h4><b>Виды отдыха:<br></b></h4>
            <p><strong></strong></p>
            <ul>
                <li><span style="font-weight:400"><strong>Пляжный отдых.</strong> Побережье Индии омывается Аравийским морем и Бенгальским заливом. На курортах Индии много пляжей – песчаных, галечных и скалистых.</span></li>
                <li><span style="font-weight:400"><strong>Экскурсионный отдых.</strong> В стране множество древнейших памяток, живописная природа и огромное количество музеев.</span></li>
                <li><span style="font-weight:400"><strong>Паломнический и религиозный туризм.</strong> Индия – страна не одной религии. По всей ее территории построены святыни и храмы, которые являются местами паломничества.</span></li>
                <li><span style="font-weight:400"><strong>Экологические и лечебно-оздоровительные поездки.</strong> В Индии много центров аюрведической медицины.<br></span><strong>Шоппинг-туры.</strong></li>
            </ul>
            <h4>Лучше время для отдыха:</h4>
            <p><span style="font-weight:400">Высоким туристическим сезоном считается <strong>декабрь-февраль</strong>, в это время лучше всего отправится на западное и восточное побережье. С <strong>марта по июнь</strong> в Индию рекомендуется ехать любителям жаркого климата – температура воздуха в этот период +38°С…+41°С. Низкий сезон в Индии во время тропических дождей. Максимальное количество осадков выпадает <strong>с июня по сентябрь.</strong> Отдыхать летом не рекомендуется из-за высокой влажности и температуры воздуха до +40°С.</span></p>
        </div>
    </section>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/indiya/3.jpg')}}" alt="">
        <h3>Путеводитель по Индии</h3>
        <h4><b>Топ достопримечательностей:</b></h4>
        <ul>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Тадж-Махал</strong> – мечеть из белого мрамора высота которой 74 м. Находится в Агре.</span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Пещерная святыня Аджанта</strong> – вытесанная в скале, является хранилищем произведений искусства буддийской культуры.</span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Хармандир-Сахиб</strong> – самая почитаемая и древнейшая святыня в Индии. Золотой храм расположен посреди искусственного озера.</span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Храм Вирупакши</strong> – величественная постройка в Хампи. Самая высокая храмовая башня, высотой 50 м, представляет собой 9-ти ярусную постройку.</span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Озерный дворец</strong> – расположен недалеко от города Удайпура возле озера Пикола на острове Нивас. Для его строительства использован дорогой белый мрамор, меняющий свой оттенок в разное время суток. Общая площадь дворца – 16 тыс. кв. м.</span></li>
        </ul>
        <h4><strong>Полезно знать:<br></strong></h4>
        <ul>
            <li style="font-weight:400"><span style="font-weight:400">Не рекомендуется употреблять воду из крана. Пить и мыть фрукты с овощами <strong>лучше бутилированной водой.</strong></span></li>
            <li style="font-weight:400"><span style="font-weight:400">Чтобы попасть к месту назначения, лучше всего пользоваться <strong>такси, авто- или велорикшей.</strong></span></li>
            <li style="font-weight:400"><span style="font-weight:400"> Купаясь в море, <strong>не заплывайте далеко</strong> – <strong>местные жители плохо плавают</strong>, чтобы прийти на помощь, также <strong>не рекомендуется прикасаться</strong> к медузам и некоторым видам рыб – &nbsp;можно получить ожог.</span></li>
            <li style="font-weight:400"><span style="font-weight:400">Для посещения религиозных мест и святынь выбирайте <strong>закрытую одежду.</strong></span></li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

