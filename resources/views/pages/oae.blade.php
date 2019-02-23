@extends('layouts.app')
@section('title')Туры в ОАЭ – заказ онлайн горящую путевку на отдых в Арабских Эмиратах@endsection
@section('description')Купить путевку на отдых в Арабских Эмиратах по самым низким ценам на <?php echo date("Y");?> год! онлайн заказ туров на веб-сайте &laquo;5 сезонов&raquo;.@endsection
@section('keywords')туры, Луганск, отпуск, отдых,  Арабских Эмиратах, ОАЭ,отдых, турагенство, горящие, Ростов на Дону, подбор@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры в ОАЭ</h1>
        <hr class="style-seven">
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/oae/1.jpg')}}" alt="">
                <span>Об ОАЭ</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/oae/2.jpg')}}" alt="">
                <span>Отдых в ОАЭ</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/oae/3.jpg')}}" alt="">
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
            <img class="main_img" src="{{asset('public/img/oae/1.jpg')}}" alt="">
            <h3>Об Объединенных Арабских Эмиратах</h3>
            <p>
                Объединенные Арабские Эмираты являются одним из самых развитых государств в мире и занимают лидирующие позиции по посещению страны туристами. Лишь в прошлом году, курорты ОАЭ посетили более 15 млн. путешественников со всего мира.
            </p>
            <p>
                Страна находится на северо-востоке Аравийского полуострова. Омывают ОАЭ воды Персидского и Оманского заливов.
            </p>
            <p>
                Территориально ОАЭ поделены на 7 эмиратов. В каждом из них свои законы. Все 7 эмиратов обладают правом распоряжаться запасами полезных ископаемых на своей территории. Именно экспорт и торговля нефтью и газом – основная составляющая экономики ОАЭ. А жаркий климат, отсутствие дождей и теплое море способствуют комфортному отдыху на местных курортах круглый год
            </p>
            <p>
                Государственный язык в ОАЭ – арабский, но английский знают многие. Религия – ислам.
            </p>
            <p>
                Туристический сезон в ОАЭ – круглый год. Зимой сухо и тепло, средняя температура воздуха +26°C днем и 15°C ночью. Летом жарко – до +34-37°C. Температура воды в Персидском заливе практически не зависит от времени года и составляет летом около 30°C, а зимой никогда не опускается ниже 19°C. Количество солнечных дней в году – 355.
            </p>
        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/oae/2.jpg')}}" alt="">
            <h3>Отдых в ОАЭ</h3>
            <h4>Курорты ОАЭ:</h4>
            <ul>
                <li><b>Абу-Даби</b><span> – самый крупный эмират и одновременно столица ОАЭ. </span><span>&nbsp;Город, которому насчитывается более 4000 лет. </span><span>Туристы пользуются возможностью </span>купить путевку в ОАЭ, <span>чтобы полюбоваться музыкальными фонтанами, отдохнуть на чистых пляжах с белым песком и &nbsp;посетить огромный тематический парк развлечений Ferrari World.</span></li>
                <li><b>Дубай</b><span> – большой мегаполис с ультрасовременной архитектурой, множеством роскошных магазинов, небоскребами, дорогими ресторанами и ночными клубами. Известный на весь мир своими проектами: Парк Чудес, самый высокий в мире отель, самый большой искусственный остров и танцующие фонтаны. </span></li>
                <li><b>Фуджейра</b><span> – подойдет любителям дайвинга, так как находится на берегу Индийского океана, вдоль побережья расположен красивый коралловый риф. По пятницам на набережной устраивают зрелищные бои быков.</span></li>
                <li><b>Рас-Эль-Хайм</b><span> – место, где ранее находился Джульфар – центр торговли жемчугом. Сейчас это лечебный курорт с термальными источниками. Здесь находится самый большой аквапарк в стране. В высокий сезон нередко попадаются </span>горящие туры в ОАЭ <span>с проживанием в одном из отелей Рас-эль-Хайма.</span></li>
                <li><b>Аджман </b>–<b> </b><span>Протяженность береговой линии Аджмана – более 8 км. Известен производством одномачтовых кораблей. Также здесь расположено множество термальных источников, торговые центры, музеи и архитектурные достопримечательности.</span></li>
                <li><strong><b>Шарджа</b><span> – популярный фешенебельный курорт. Отправляясь </span></strong>на отдых в Арабских Эмиратах<b> </b><strong><span>в Шарджу, учтите, что здесь действует </span></strong>«сухой закон»<strong><span>, а также запрещено носить открытую одежду. Кроме того, в Шардже много достопримечательностей и исторических памяток.&nbsp;</span></strong></li>
            </ul>

            <h4>Виды отдыха:</h4>

            <ul>
                <li><b>Пляжный. </b><span>&nbsp;Большинство путешественников покупают </span>туры в Эмираты <span>с целью пляжного отдыха на берегах Персидского или Оманского заливов. Высокий уровень сервиса в отелях и высокоразвитая туристическая инфраструктура обеспечат комфортный отдых на песчаном побережье.</span></li>
                <li><b>Экскурсионный. </b><span>Интересны для посещения множество музеев, исторических памяток. Разнообразие экскурсий обеспечивает обилие высокотехнологичных современных развлекательных комплексов.</span></li>
                <li><b>Водный.</b><span> Здесь популярны дайвинг, снорклинг и другие виды водного спорта.</span></li>
                <li><strong><b>Шоппинг. </b></strong>Купить тур в ОАЭ<strong><span> стоит и любителям шопинга.</span> <span>В Абу-Даби и Дубае много роскошных магазинов и огромных торговых центров, куда за покупками приезжают туристы со всего мира.</span></strong></li>
            </ul>
            <h4>Лучшее время для отдыха:</h4>
            <p>
                Наиболее комфортный отдых в Эмиратах – с октября по май. Летом из-за жаркой погоды стоимость туров снижается, поэтому есть высокий шанс приобрести горящие путевки в ОАЭ по выгодной цене.
            </p>
        </div>
    </section>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/oae/3.jpg')}}" alt="">
        <h3>Путеводитель по Объединенным Арабским Эмиратам</h3>
        <h4>Топ достопримечательностей:</h4>
        <ul>
            <li><strong>Бурдж-Халифа</strong>. Самый высокий небоскреб в мире. Высота здания – 800 метров.</li>
            <li><strong>Парк Феррари</strong>. Тематический парк развлечений Ferrari World &nbsp;на острове Яс, где представлены все модели известной марки автомобиля. Фасад выполнен в стиле Ferrari GT.</li>
            <li><strong>Дубай Молл</strong>. Самый большой в мире торгово-развлекательный центр. На территории ТРЦ в свою очередь расположены самый большой аквариум, где обитают более 33 тыс. морских жителей и крытый горнолыжный комплекс Ski Dubai, который вмещает до 1500 посетителей.</li>
            <li><strong>Падающая &nbsp;башня Абу-Даби</strong>. Небоскреб Сapital Gate построен в футуристическом стиле. Занесен в Книгу рекордов Гиннеса как здание с самым большим наклоном.</li>
            <li><strong>Острова Пальм</strong>.<strong>&nbsp;</strong>Три искусственно созданных острова, напоминающие по своей форме финиковые пальмы</li>
            <li><strong> Мечеть Джумейра</strong>. Один из самых красивых храмов ОАЭ.</li>
            <li><strong>Музыкальный фонтан</strong>. Самый большой фонтан в мире. Его высота составляет 150 метров. Подсвечивается 6000 прожекторами. В музыкальном сопровождении более 30 композиций.</li>
        </ul>

        <h4>Полезно знать:</h4>

        <ul>
            <li>В ОАЭ вода из-под крана хорошего качества, однако перед употреблением <strong>ее лучше прокипятить</strong>;</li>
            <li>в общественных местах туристам <strong>запрещено</strong> пить алкоголь и носить открытую одежду;</li>
            <li>в ОАЭ <strong>запрещено</strong> употреблять наркотики и играть в азартные игры;</li>
            <li><strong>не стоит</strong> <strong>фотографировать</strong> мусульманских женщин.</li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

