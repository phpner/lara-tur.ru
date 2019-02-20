@extends('layouts.app')
@section('menu')
@endsection
@section('center')
    <div class="wrapper pt-118px">
        <h2>Туры в Болгарию</h2>
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/bolgariya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; О Болгарии">
                <span>О Болгарии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/bolgariya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты о Болгарии">
                <span>Отдых в Болгарии</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/bolgariya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Полезно знать о Болгарии">
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
            <img class="main_img" src="{{asset('public/img/bolgariya/1.jpg')}}" alt="&laquo;5 сезонов&raquo; О Болгарии">
            <h3>О Болгарии</h3>

            <p> Болгария расположена на востоке Балканского полуострова. Восточные берега страны омывает Черное море.</p>
            <p>Туризм составляет важную часть экономики Болгарии, поэтому интенсивно развивается. Ежегодно страну посещает около 9 млн иностранных туристов.</p>
            <p>Первые упоминания о болгарах датируются 354 годом, хотя история некоторых болгарских городов, например, Пловдива, тянется корнями еще глубже. Протогосударство современной Болгарии было создано в 681 году, называлось Первое Болгарское Царство. Позже страна то завоевывалась, то вновь получала независимость. Так, Болгария побывала в составе Византийской империи, Видинского царства, Оттоманского господства.</p>
            <p>В XX столетии здесь начал развиваться туризм, с 1960 года активно строились “дома отдыха”, горные и морские курорты, а с наступлением XXI века тут заработали сотни частных отелей и ресторанов с отличным сервисом.</p>
            <p>Болгария относится к континентально-средиземноморскому климатическому поясу. Летом здесь сухо и жарко. Температура воздуха днем достигает +35°С, вода в Черном море прогревается до +25°С...+27°С. Зимой в Болгарии регистрируются снегопады, термометр показывается ниже +0°С, что обеспечивает стабильный снежный покров на горнолыжных курортах.</p>

        </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/bolgariya/2.jpg')}}" alt="&laquo;5 сезонов&raquo; Увлекательные факты о Болгарии">
            <h3><strong>Отдых в Болгарии</strong></h3>
            <h4>Популярные курорты:</h4>
            <ul>
                <li><b>Созополь</b><span style="font-weight:400"> — популярный морской курорт Болгарии, который привлекает&nbsp;</span><span style="font-weight:400">старинными улочками, виноградными рощами и Каменным лесом. Если вас интересует </span>отдых в Болгарии с детьми,<b> </b><span style="font-weight:400">то Созополь отлично подходит для такой поездки. Популярные достопримечательности&nbsp;<span>— архитектурный заповедник Харманит, который охраняется&nbsp;</span>ЮНЕСКО</span><span style="font-weight:400">&nbsp;и природный парк Ропотамо.</span></li>
                <li><b>Золотые Пески</b><span style="font-weight:400"> — один из самых посещаемых курортов страны. Здесь найдутся гостиницы и рестораны на любой вкус, а также оздоровительные центры, аквапарк и другие развлечения.</span></li>
                <li><b>Солнечный Берег </b><span style="font-weight:400">—</span> <span style="font-weight:400">популярный район, куда можно </span>купить тур в Болгарию на двоих <span style="font-weight:400">недорого. Излюбленная студентами курортная зона, где наряду с отелями категории 5* есть много недорогих трехзвездочных гостиниц. Многие пляжи награждены «Голубым флагом».</span></li>
                <li><b>Пампорово</b><span style="font-weight:400"> славится радоновыми и серными ваннами, а с декабря по март привлекает путешественников горнолыжными трассами.</span></li>
                <li><b>Боровец (Чамкория)</b><span style="font-weight:400"> — крупнейший и старейший в Болгарии курорт для любителей зимних развлечений. Протяженность трасс разных сложностей более 40 км.</span></li>
                <li><b>Албена </b><span style="font-weight:400">—</span> <span style="font-weight:400">третья по популярности пляжная зона. В июле и августе сложно найти </span>горящие туры в Болгарию<b> </b><span style="font-weight:400">с остановкой в гостиницах Албены.</span></li>
                <li><b>Велинград</b> <span style="font-weight:400">— болгарская бальнеологическая столица, СПА-курорт с десятками термальных источников.</span></li>
            </ul>
            <h4><b>Виды отдыха:</b></h4>
            <ul>
                <li><span style="font-weight:400"><strong>Пляжный.</strong> На многих черноморских курортах страны можно отдохнуть бюджетно и с комфортом, </span>путевки в Болгарию все включено <span style="font-weight:400">стоят дешевле аналогичных туров в Испанию или другие приморские страны Европы.</span></li>
                <li><span style="font-weight:400"><strong>Оздоровительный.</strong> Болгарские рекреационные центры с термальными минеральными источниками расположены в горах или возле моря, что приумножает эффект от терапии. &nbsp;</span></li>
                <li><span style="font-weight:400"><strong>Паломнический.</strong> Десятки древних святынь сохранились в прекрасном состоянии до наших времен.</span><span style="font-weight:400">· &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                <li><span style="font-weight:400"><strong>Горнолыжный.</strong> В стране более 10 центров для лыжников и сноубордистов, как для новичков, так и для опытных спортсменов. Многие туристы предпочитают </span>раннее бронирование туров в Болгарию <span style="font-weight:400">на зиму, что позволяет найти хорошее место и существенно сэкономить на проживании в отелях вблизи горнолыжных трасс.</span></li>
                <li><span style="font-weight:400"><strong>Экскурсионный.</strong> Древние соборы и монастыри, гробницы, пещерные церкви и город-музей Несебр привлекают туристов со всего мира.</span></li>
                <li><span style="font-weight:400"><strong>Спелеологический.</strong> В пещерах Магуры можно осмотреть наскальные рисунки древних поселений Балканского полуострова.</span></li>
            </ul>
            <h4><b>Лучшее время для отдыха:</b></h4><span style="font-weight:400">Больше всего отдыхающих в Болгарии <strong>с мая по октябрь</strong>, когда вода в море прогревается до +25°С…+27°С. В начале и конце сезона цены на туры значительно ниже, чем в летний период. На горных трассах можно покататься на лыжах или сноуборде <strong>с декабря по середину апреля</strong>. </span>Купить путевку в Болгарию<b> </b><span style="font-weight:400">для экскурсионного отдыха стоит <strong>на весну или осень</strong>, а для рекреационной поездки актуально любое время года.</span>
        </div>
    </div>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/bolgariya/3.jpg')}}" alt="&laquo;5 сезонов&raquo; Полезно знать о Болгарии">
        <h3>Путеводитель по Болгарии</h3>
        <h4>Топ достопримечательностей:</h4>
        <ul>
            <li><strong>Каменный лес</strong> — уникальное творение природы в Созополе, напоминающее священные построения язычников. Исследователи предполагают, что здесь когда-то было море.</li>
            <li><strong>Несебр</strong> — город-музей под открытым небом, охраняемый ЮНЕСКО.</li>
            <li><strong>Пловдив</strong> — город с сотнями исторических памяток. Он старше Афин и Рима.</li>
            <li><strong>Рыльский монастырь</strong> — монастырь в скале, датируемый X столетием, действующий по сегодняшний день.</li>
            <li><strong>Ивановский монастырь</strong> — скальный монастырь над рекой на высоте 36 м, охраняется ЮНЕСКО.</li>
            <li><strong>Боянская церковь</strong>, знаменитая фресками XIII столетия, включена в список ЮНЕСКО.</li>
            <li><strong>Римские термы</strong>, построенные 19 столетий назад, находятся в Варне.</li>
        </ul>
        <h4>Полезно знать:</h4>
        <ul></ul>
        <ul>
            <li><strong>Не носите</strong> с собой много денег наличными, так как в людных местах работают карманники;</li>
            <li>в обменных пунктах <strong>внимательно смотрите на курс</strong> покупки евро, часто в самом видном месте указывают курс продажи, что более выгоден, но не вам;</li>
            <li>оставляйте машину на<strong> платных стоянках</strong>;</li>
            <li><strong>избегайте</strong> цыганских районов, например, квартал Столпиново в Пловдиве считается одним из самых небезопасных;</li>
            <li>воду пейте <strong>бутилированную</strong>, еду и алкоголь приобретайте только в магазинах.</li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

