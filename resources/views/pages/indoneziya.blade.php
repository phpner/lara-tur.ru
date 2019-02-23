@extends('layouts.app')
@section('title')Туры в Индонезию – заказ онлайн горящую путевку. Лучшие цены на отдых!@endsection
@section('description')Купить путевку на отдых в Индонезию по самым низким ценам! онлайн заказ туров!@endsection
@section('keywords')туры в Индонезию@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в Индонезию</h1>
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/indoneziya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; О Болгарии">
                <span>Об Индонезии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/indoneziya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты об Индонезии">
                <span>Отдых в Индонезии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/indoneziya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Полезно знать об Индонезии">
                <span>Полезно знать</span>
            </a>
        </div>
        <!-- End block info -->
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

        <!-- block info popup-->
        <div id="about-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/indoneziya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; Об Индонезии">
            <h3>Об Индонезии</h3>
            <div style="text-align:justify">
                <p><span style="font-weight:400">Туризм — неотъемлемая часть экономики Индонезии. С конца прошлого века в развитие и модернизацию соответствующей инфраструктуры вкладываются значительные средства. В Индонезии красивые морские пейзажи, экзотические флора и фауна и множество достопримечательностей.</span></p>
                <p><span style="font-weight:400">Страна расположена в юго-восточной части Азии, омывается Индийским и Тихим океанами. </span></p>
                <p><span style="font-weight:400">Согласно исследованиям ученых, первые поселения на территории Индонезии возникли 73 тыс. лет назад. В Индонезии образовалось несколько государств в I-III столетиях нашей эры, наиболее могущественное из них — империя Маджапахит. </span></p>
                <p><span style="font-weight:400">Однако пряности и специи которые растут в Индонезии, вызывали особый интерес у европейских колонизаторов. В 1512 году территорией завладели португальцы, после них за земли соревновались голландцы, англичане и японцы. В 1945 году последние помогли государству получить независимость. &nbsp;&nbsp;</span></p>
                <p><span style="font-weight:400">Климат страны преимущественно экваториальный. На протяжении года температурные колебания незначительны: +-3°С. В среднем показатели термометра держатся в пределах +26°С. Однако в горах, выше 1500 м, бывают заморозки. Уровень влажности в Индонезии составляет 80%, в год выпадает от 2 тыс. мм (на равнинах) до 6 тыс. мм осадков (в горах). &nbsp;</span></p>
            </div>
        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/indoneziya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты об Индонезии">
            <h3><strong>Отдых в Индонезии</strong></h3>
            <h4><strong>Курорты Индонезии:</strong></h4>
            <ul>
                <li><b>Джакарта</b><span style="font-weight:400"> — столица государства. Здесь крупнейшая мечеть в Юго-Восточной Азии, этнографический парк, где можно познакомиться с архитектурой и культурой каждой из 33 провинций Индонезии, и множество других достопримечательностей.</span></li>
                <li><b>Бали</b><span style="font-weight:400"> — популярный курорт, привлекающий чистыми пляжами, красивыми ландшафтами и древними храмами.</span></li>
                <li><b>Кута</b><span style="font-weight:400"> — курорт, ориентированный на молодежь. Здесь множество баров и клубов.</span></li>
                <li><b>В Сулавеси</b><span style="font-weight:400"> красивая природа, горные озера, лучший дайвинг и много местных традиций.</span><strong></strong></li>
            </ul>
            <h4><strong>Виды отдыха:<br></strong></h4>
            <ul>
                <li><strong>Пляжный.</strong> Все популярные индонезийские пляжи чистые, с прозрачной водой, и хорошо развитой инфраструктурой.</li>
                <li><strong>Водный спорт.</strong> Лучшим местом для подводного плавания считается залив Манадо вблизи Сулавеси, а для серфинга — курорт Кута.</li>
                <li><strong>Экскурсионный.</strong> На территории Индонезии 8 объектов ЮНЕСКО, ещё 11 в числе кандидатов на включение в список всемирного наследия.</li>
                <li><strong>Шоппинг.</strong></li>
            </ul>
            <h4><strong>Лучшее время для отдыха:</strong></h4>
            <p><span style="font-weight:400">Цены на путевки в Индонезию зависят от сезона. Большинство туристов сюда приезжает <strong>с апреля по октябрь.</strong> А <strong>с ноября по март</strong>&nbsp;в Индонезии часто бывают дожди. Температура воздуха в зимний период держится отметки +26<span>°С.</span></span>
            </p>
        </div>


    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/indoneziya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Полезно знать об Индонезии">
        <h3>Путеводитель по Индонезии</h3>
        <h4><strong>Топ достопримечательностей:</strong></h4>
        <ul>
            <li style="font-weight:400"><strong>Боробудур на острове Ява.</strong> Это древнейший храмовый комплекс страны, охраняется ЮНЕСКО.</li>
            <li style="font-weight:400"><strong>Лес обезьян,</strong> расположенный в Убуде, здесь живописная природа и множество шустрых обитателей парка.</li>
            <li style="font-weight:400"><strong>Парамбанан на острове Ява.</strong> Еще один храмовый комплекс из списка ЮНЕСКО, отличается особой каменной резьбой в качестве декора.</li>
            <li style="font-weight:400"><strong>Таман Сари</strong> — водный замок вблизи Джокьякарта.</li>
            <li style="font-weight:400"><strong>На горе Гунунг</strong> на острове Бинтан леса, реки и водопады, которыми можно насладиться по пути на смотровую площадку.</li>
            <li style="font-weight:400"><strong>Храм Пура Бесаких</strong>, расположенный на самой высокой горе Бали.</li>
        </ul>
        <h4>Полезно знать:</h4>
        <ul>
            <li style="font-weight:400"><strong>Не оставляйте без присмотра</strong> сумочки и ценные вещи на пляже;</li>
            <li style="font-weight:400">вода из-под крана <strong>плохого качества</strong>, отдавайте предпочтение <strong>бутилированной</strong>, кроме того, следите за качеством льда, который добавляют в напитки;</li>
            <li style="font-weight:400">на большей части побережья <strong>коралловые рифы</strong>, поэтому чтобы не пораниться, приобретите заранее <strong>специальные резиновые тапочки</strong>;</li>
            <li style="font-weight:400">используйте <strong>репелленты и москитные сетки;</strong></li>
            <li style="font-weight:400">меняйте валюту только <strong>в банках или обменных пунктах.</strong></li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

