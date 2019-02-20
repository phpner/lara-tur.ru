@extends('layouts.app')
@section('menu')
@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Туры на Шри-Ланку</h1>
        <!-- block info -->
        <div class="info_img">

            <a class="popup-with-zoom-anim" href="#about-tour">
                <img src="{{asset('public/img/shri-lanka/1.jpg')}}" alt="">
                <span>О Шри-Ланке</span>
            </a>

            <a class="popup-with-zoom-anim" href="#felax-tour">
                <img src="{{asset('public/img/shri-lanka/2.jpg')}}" alt="">
                <span>Отдых на Шри-Ланке</span>
            </a>

            <a class="popup-with-zoom-anim" href="#have-to-know">
                <img src="{{asset('public/img/shri-lanka/3.jpg')}}" alt="">
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
            <img class="main_img" src="{{asset('public/img/shri-lanka/1.jpg')}}" alt="">
            <h3>О Шри-Ланке</h3>
            <div style="text-align:justify">
                <p><span style="font-weight:400">Более 10% ВВП Шри-Ланки принадлежит туризму. И это не удивительно, ведь здесь есть что посмотреть: множество исторических достопримечательностей, национальные парки, чайные плантации, океан и горы. Ежегодно страну посещают тысячи туристов, к примеру, в прошлом году на Шри-Ланке отдыхало почти 10 тыс. соотечественников. </span></p>
                <p><span style="font-weight:400">Расположено государство на одноименном острове, вблизи Индостана. Омывается Индийским океаном, Лаккадивским морем, Бенгальским заливом и двумя проливами. &nbsp;</span></p>
                <p><span style="font-weight:400">Считается, что первые коренные жители прибыли на остров из соседней Индии в VI веке до н. э и разделили земли на сингальские королевства. Со временем на остров проникли тамилы и тоже объединились в крупную общину. Однако в XVI столетии династия сингалов распалась и Цейлон был оккупирован португальцами, в XVII веке земли перешли во владения голландцев, а в конце XVIII века остров был завоеван англичанами. Только в 1948 году государство стало независимым и было переименовано на Шри-Ланку. &nbsp;</span></p>
                <p><span style="font-weight:400">Остров открыт для туристов круглый год, расположен в зоне субэкваториального и экваториального поясов. Температурные колебания на протяжении года незначительные. Средняя дневная температура составляет +24°С...+27°С. Лучший период для посещения острова с декабря по март или с июля по октябрь, в другое время здесь часто бывают дожди, хотя они кратковременные и не станут преградой отдыху. </span></p>
            </div>
       </div>

        <div id="felax-tour" class="zoom-anim-dialog-info mfp-hide">
            <img class="main_img" src="{{asset('public/img/shri-lanka/2.jpg')}}" alt="">
            <h3><strong>Курорты Шри-Ланки:</strong></h3>
            <ul>
                <li><b>Коломбо</b><span style="font-weight:400"> — город с тысячелетней историей, был оккупирован римлянами, голландцами, греками, арабами, португальцами, персами и англичанами, поэтому&nbsp;</span><span style="font-weight:400">архитектура здесь в разных стилях. Украинцам доступны </span>прямые перелеты <span style="font-weight:400">в аэропорт Коломбо из Киева.</span></li>
                <li><b>Канди</b><span style="font-weight:400"> — культурная столица острова. Интересна памятками древней цивилизации сингалов и буддийской религии. Один из самых спокойных городов страны. Исторический центр Канди внесен в список охраняемых территорий ЮНЕСКО.</span></li>
                <li><b>Нувара-Элия </b><span style="font-weight:400">— курорт на высоте более 1880 м. Здешние дома напоминают здания средневековой Англии. Туристы могут посетить чайные плантации и продегустировать настоящий цейлонский чай.</span></li>
                <li><b>Джафна</b><span style="font-weight:400"> <span>—</span> жаркий регион на севере Шри-Ланки. Среди путешественников востребованы </span>туры на Шри-Ланку с перелетом <span style="font-weight:400">в аэропорт Джафны. Здесь находятся десятки исторических и архитектурных памяток, море теплое, а пляжи чистые.</span></li>
                <li><b>Хиккадува </b><span style="font-weight:400">— самый популярный курорт среди дайверов. В прибрежных водах находится Коралловый заповедник, где можно рассмотреть более 7 видов различных кораллов.</span></li>
                <li><strong><b>Калутара </b><span style="font-weight:400">— спортивный центр Шри-Ланки. Сюда приезжают любители водных развлечений для занятий виндсерфингом, подводной охотой, парусным и другими видами спорта. В Калутаре </span></strong>лучший отдых на Шри-Ланке «все включено», <strong><span style="font-weight:400">с отелями класса 4* и 5*.</span></strong></li>
            </ul>
            <h3><strong>Виды отдыха:</strong></h3>
            <ul>
                <li style="font-weight:400"><span style="font-weight:400"><strong>Пляжный</strong>. Пляжи Шри-Ланки являются одними из лучших в мире, например, Бентота входит в ТОП-10 самых красивых пляжей Азии согласно рейтингу Forbes.</span></li>
                <li style="font-weight:400"><span style="font-weight:400"><strong>Экскурсионный</strong>. 8 памяток страны находятся под охраной ЮНЕСКО. В&nbsp;</span><span style="font-weight:400">список входят украшенные фресками буддистские сооружения, крепости и форты.</span></li>
                <li style="font-weight:400"><span style="font-weight:400"><strong>Активный отдых</strong>. </span>Купить тур на Шри-Ланку <span style="font-weight:400">стоит и любителям водных видов спорта. На курортах популярны занятия кайтсерфингом, виндсерфингом, катание на каноэ и катамаранах и т.д.</span></li>
                <li style="font-weight:400"><span style="font-weight:400"><strong>Дайвинг</strong>. Туристов привлекает подводный мир острова с его разноцветными кораллами, красивыми рыбками ярких окрасов и другими морскими обитателями. В марте и апреле с берегов можно увидеть дельфинов и китовых акул.</span></li>
                <li style="font-weight:400"><span style="font-weight:400"><strong>Посещение чайных плантаций</strong>.</span></li>
            </ul>
            <h3><strong>Лучшее время для отдыха:</strong></h3>
            <p><span style="font-weight:400">Оптимальным временем для путешествия на остров принято считать период с конца осени по середину весны. В это время </span>горящие туры в Шри-Ланку<b> </b><span style="font-weight:400">найти сложно. Летом идут дожди, поэтому спрос на туры снижается и появляются выгодные предложения. Однако осадки, как правило, выпадают ночью, и отпуску может помешать только повышенная влажность воздуха. Море летом нередко штормит. Если хотите поплавать без волн, выбирайте для отдыха бухты, защищенные от ветров.</span></p>

        </div>
    </section>

    <div id="have-to-know" class="zoom-anim-dialog-info mfp-hide">
        <img class="main_img" src="{{asset('public/img/shri-lanka/3.jpg')}}" alt="">
        <h3>Путеводитель по Шри-Ланке</h3>
        <h4><strong>Топ достопримечательностей:<br></strong></h4>
        <ul>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Львиная скала</strong> — символ острова, внесена в список ЮНЕСКО. </span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Дамбулла</strong> — комплекс пещерных монастырей и крупнейшей коллекции статуй Будды. </span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Голландский форт в Галле</strong>, датируемый XVII столетием. </span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Сад пряностей в Матале,</strong> где растут деревья какао, коричные деревья, анис, гвоздика, ваниль, мускатный орех и другие. </span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Королевский ботанический сад</strong>. Здесь туристов впечатлит огромный фикус Бенджамин. </span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Высокогорные плантации цейлонского чая.</strong> Самыми лучшими считаются листья с Нувара-Элии.</span></li>
            <li style="font-weight:400"><strong>Приют для слонов в Пиннавеле.</strong></li>
        </ul>
        <h4><strong>Полезно знать:</strong></h4>
        <ul>
            <li style="font-weight:400"><span style="font-weight:400"><strong>Пить водопроводную воду</strong> на Шри-Ланке <strong>не рекомендуется</strong>, лучше используйте бутилированную;</span></li>
            <li style="font-weight:400"><span style="font-weight:400"><strong>запаситесь репеллентами,</strong> Шри-Ланка — жаркая страна и здесь много насекомых</span></li>
            <li style="font-weight:400"><span style="font-weight:400">перед походом на<strong> «дикий» пляж</strong> поинтересуйтесь у местных жителей безопасно ли там купаться, <strong>бывают подводные течения;</strong></span></li>
            <li style="font-weight:400"><span style="font-weight:400">при входе в храм обязательно <strong>разувайтесь</strong>, одежда должна быть <strong>закрытой</strong>;</span></li>
            <li style="font-weight:400"><span style="font-weight:400">покидая номер, проверьте, чтобы <strong>все окна были закрыты,</strong> так как в ваше отсутствие могут проникнуть<strong> обезьяны</strong>, которых очень много на острове.</span></li>
        </ul>
    </div>
    <!-- End block info popup-->
@endsection

