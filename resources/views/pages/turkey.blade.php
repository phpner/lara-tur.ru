@extends('layouts.app')
@section('title')Туры в Турцию – купить горящую путевку на отдых в Турции | Стоимость на поездку в Турцию@endsection
@section('description')Купить путевку на отдых в Турцию по самым низким ценам на <?php echo date("Y");?> год! онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, Турцию,отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Турцию</h1>
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/tursia/turtsiya-1.jpg')}}" alt="">
                <span>О Турции</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/tursia/turtsiya-2.jpg')}}" alt="">
                <span>Отдых в Турции</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/tursia/turtsiya-3.jpg')}}" alt="">
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
            <img class="main_img" src="{{asset('public/img/tursia/turtsiya-1.jpg')}}" alt="">
            <h3>О Турции</h3>

            <p>Турция занимает шестую позицию в списке наиболее популярных направлений для туризма. Ежегодно сюда приезжает более 10 млн путешественников.</p>
            <p>
                Государство находится в юго-западной части Азии и на юге Европы. Омывается Турция сразу четырьмя морями: Черным, Мраморным, Эгейским и Средиземным морями.
            </p>
            <p>
                История Турции началась с Византийской империи, которая была захвачена в 1453 году турками-османами. После чего павшая Византия превратилась в великий султанат, Османское государство. Эта династия правила около 623 лет. История империи оборвалась после Первой мировой войны, где та потерпела поражение и утратила самостоятельность. Местным жителям не понравилась оккупация собственных земель, по всей территории появились партизанские отряды, боровшиеся за независимость. И в конце концов, в 1923 году Турция во главе с Мустафой Кемалем получила статус республики.
            </p>
            <p>
                Турция относится к нескольким климатическим поясам, однако территориальные изменения погодных условий незначительные. Летом температура воздуха колеблется от +23°С до +45°С, зимой термометр показывает +5°С, за исключением горных регионов, где холоднее. Осадки наиболее часто регистрируются на побережье Черного моря. Вода прогревается до +28°С в Средиземном море, до +26-27°С в Мраморном и Эгейском, до +25°С в Черном.
            </p>
        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/tursia/turtsiya-2.jpg')}}" alt="">
            <h3>Отдых в Турции</h3>
            <h4>Популярные курорты:</h4>
            <ul>
                <li><strong>Стамбул&nbsp;</strong>— город двух частей света: традиционной Азии и современной Европы. Здесь можно отдохнуть на побережьях сразу двух морей. Также Стамбул известен историческими достопримечательностями.</li>
                <li><strong>Анталия&nbsp;</strong><strong></strong>— крупнейший город Средиземноморского побережья. Отличное место для отдыха молодежи. Привлекает отелями, кофейнями, ресторанчиками,барами, магазинами и аквапарками.</li>
                <li><strong>Мармарис </strong>считается самым “европейским” курортом для <strong>отдыха в Турции</strong>. Побережье подходит для отдыха с детьми. Курорт защищен от ветров, вход в море пологий, пляжи песчаные.</li>
                <li><strong>Аланья </strong>курорт с чистыми пляжами, многие из которых награждены&nbsp;Голубым флагом и с относительно низкими ценами в ресторанах и туристических зонах. Отсюда удобно добираться ко многим достопримечательностям.</li>
                <li><strong>Кемер&nbsp;</strong>— отличное место для занятий дайвингом. Местные дайв-сайты предлагают к осмотру подводные пещеры и красочных морских жителей.</li>
                <li><strong>Бодрум&nbsp;</strong>— популярный курорт на побережье Эгейского моря, один из самых тусовочных городов Турции с большим количеством ресторанов, баров и ночных клубов на набережной.</li>
                <li><strong>Удулаг</strong>&nbsp;<span>— главный горнолыжный курорт Турции. Общая протяженность трасс составляет более&nbsp;16 тыс. метров. Оборудован спусками разного уровня сложности. Отлично подходит для семей с детьми и начинающих лыжников.&nbsp;</span></li>
            </ul>
            <h4>Популярные виды отдыха:</h4>
            <ul>
                <li><strong>Пляжный отдых.</strong>&nbsp;Большинство туристов приобретают<strong> путевки в Турцию</strong> с целью отдыха на пляже. Тип побережья зависит от региона. В Бодруме — галечные, в Сиде и Белеке — песчаные, а в Анталии — и галька, и песок, и камни.</li>
                <li><strong>Экскурсионный отдых. </strong>Каппадокия, Голубая мечеть, дворец Топкапы и десятки других достопримечательностей стоят внимания каждого туриста.</li>
                <li><strong>Водный отдых. </strong>Средиземное море предлагает дайверам подводные пещеры и их необычных жителей. Также <strong>поездка в Турцию</strong> может быть с целью занятий виндсерфингом, <span>снорклингом и другими видами водного спорта</span>.</li>
                <li><strong>Шопинг. </strong>Гранд-базар Стамбула — огромный крытый рынок, уже давно ставший одним из популярных мест в Турции.</li>
                <li><strong>Горнолыжный отдых. </strong>Турция располагает простыми и не экстремальными горными спусками. Отлично подходит новичкам и желающим насладиться пейзажами.</li>
            </ul>
            <h4>Лучшее время для отдыха:</h4>
            <div class="text_block_about_tour">
                Турция интересна туристам в любое время года. Самые дорогие путевки в Турцию в период пляжного сезона, который наступает в конце мая и длится до середины сентября. В это время стоимость путевки в Турцию варьируется в пределах от 600$ до 1500$ за 7 дней отдыха на двоих в Аланьи, Анталии, Кемере, Мармарисе или Бодруме. Цена зависит от категории отеля, системы питания и удаленности гостинницы от пляжа.
            </div>
            <div class="text_block_about_tour">
                В апреле-мае и октябре можно приобрести горящий тур в Турцию и существенно сэкономить на поездке. Хотя в этот период погодные условия комфортны для длительных прогулок и отдыха на пляже, вода в море может быть прохладной для купания. На горнолыжных курортах сезон длится с декабря по март. Лучший период для экскурсионного отдыха — весна и осень. Температурные показатели колеблются в пределах +18°С…+26°С, а купить тур в Турцию можно по низкой цене.
                На шопинг лучше ехать зимой, когда в торговых центрах организовывают грандиозные распродажи.
            </div>
        </div>
    </section>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/tursia/turtsiya-3.jpg')}}" alt="">
        <h3>Путеводитель по Египту</h3>
        <h4>Топ достопримечательностей</h4>
        <ul>
            <li style="text-align:justify"><strong>Карнакский храм</strong> — крупнейший храмовый комплекс Древнего Египта.</li>
            <li style="text-align:justify"><strong>Луксорский храм</strong>, первые сведения о котором датируются XIV веком до н. э.</li>
            <li style="text-align:justify"><strong>Исламский Каир</strong> — средневековая цитадель Египта.</li>
            <li style="text-align:justify"><strong>Вади-аль-Хитан</strong>, где узнаете факты происхождения китов от животных, обитавших на суше.</li>
            <li style="text-align:justify"><strong>Пирамиды Гизы</strong> с единственным сохранившимся памятником из Семи чудес древнего мира, пирамидой Хеопса.</li>
            <li style="text-align:justify"><strong>Большой Сфинкс</strong> — древнейшая монументальная скульптура, которая осталась на Земле.</li>
            <li style="text-align:justify"><strong>Памятники Нубии</strong> с высеченными на скалах храмами.</li>
            <li style="text-align:justify"><strong>Монастырь святой Екатерины</strong> — один из древнейших постоянно действующих христианских монастырей в мире.</li>
        </ul>
        <p style="text-align:justify">
            Все, кроме последнего, размещены на континентальной части страны, а монастырь — на Синайском полуострове. Вдоль берегов Нила устраиваются туристические поездки, где покажут большинство этих памяток.</p>
        <h4>Полезно знать</h4>
        <ul>
            <li style="text-align:justify">В период <strong>Рамадана</strong> в Египте <strong>запрещается пить, курить</strong> и даже есть <strong>в общественных местах</strong>.</li>
            <li style="text-align:justify">На пляжах египетских курортов <strong>нельзя загорать топлес</strong>, а гуляя по городу — одеваться откровенно.</li>
            <li style="text-align:justify">Помните, что <strong>катаются на верблюдах</strong> бесплатно, а вот слезть с животного можно только <strong>за деньги</strong>.</li>
            <li style="text-align:justify"><strong>Не</strong> рекомендуется <strong>пить</strong> воду <strong>из-под крана</strong> и мыть в ней овощи и фрукты, для этого лучше использовать кипяченую или бутилированную воду.</li>
            <li style="text-align:justify">Из Египта <strong>запрещено вывозить кораллы</strong> и другие дары моря.</li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

