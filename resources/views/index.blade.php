@extends('layouts.app')
@section('title')Горящие туры и путевки из Луганска - турагентство 5 сезонов@endsection
@section('description')Туристическое агентство 5 сезонов - это более 50 000 горящих туров в Азию, Африку и Америку, Европу,  путевки в Египет, ОАЭ, Турцию, Тайланд и другие популярные страны!@endsection
@section('keywords')турагентство, 5 сезонов, горящие путевки, туроператор горящий тур, Европа, ОАЭ, Азию, Африку и Америку, путевки в Египет, Турцию, Тайланд, Луганск, ЛНР@endsection
@section('header')
    <div class="wrapper-slider">
    <div class="slider_top">
        <img src="{{asset('public/img/slider_header/1.jpg')}}" alt="Турагентство 5 сезонов Европу">
        <img src="{{asset('public/img/slider_header/2.jpg')}}" alt="Турагентство Луганск">
        <img src="{{asset('public/img/slider_header/3.jpg')}}" alt="Турагентство лнр">
        <img src="{{asset('public/img/slider_header/4.jpg')}}" alt="горящие туры">
    </div>
        <h1  class="h1">Туристическое агентство <span>&laquo;5 сезонов&raquo;</span></h1>
    </div>
    <div class="search_block_header">
        <div class="tv-search-form tv-moduleid-187833"></div>
       <!-- <script  src="//tourvisor.ru/module/init.js"></script>-->
    </div>
@endsection
@section("center")
    <div class="wrapper">
        <div class="text_block">
            <b class="text_center">Туристическое агентство «5 сезонов»</b>
            <p>предлагает Вам туры по самым низким ценам и бронирование путевок в городе Луганск.
                Мы подготовим для Вас самый незабываемый и неповторимый отпуск во многих странах мира!</p>
            <p> Туристическое агентство <i class="sezon">&laquo;5 сезонов&raquo;</i>- это более 50 000 горящих туров в Европу, ОАЭ, Азию, Африку и
                Америку, Египет, Турцию, Таиланд, Индию, Мексику и другие популярные страны!
                Не упустите свой шанс на незабываемый отдых и теплые воспоминания о нем!</p>
             Мы рады ответить на любые Ваши Вопросы.
            <div class="header_contact text_contact">
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
                <span class="header_tel"><i class="icon-phone_android"></i><a href="tel:0721608584">072 160 85 84</a></span>
                <span class="header_mail"><i class="icon-gmail"></i><a href="mailto:zakaz@5-sezonov.ru">zakaz@5-sezonov.ru</a></span>
                <span class="header_mail"><i class="icon-mail"></i><a href="#callbackChoose" class="btn btn-brand popup-with-form">Оставить заявку </a></span>
            </div>
            <em>Поторопитесь! То, что есть сегодня, возможно, не будет завтра!</em>
        </div>
    </div>
        <section class="section-calculate py-4 py-lg-5" id="section-2">
                        <h2 class="text-center text-white mb-4">Хотите узнать сколько будет стоить ваш тур?</h2>
                        <div class="card text-center">
                            <div class="card-header">
                                <div class="stepper">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item stepper__item"><a href="#step-1" class="stepper__link"><span
                                                    class="circle-badge circle-badge_green">1</span></a></li>
                                        <li class="list-inline-item list-inline__separator d-none d-md-inline-block"><img
                                                src="/public/img/arrow.svg" width="12"></li>
                                        <li class="list-inline-item stepper__item"><a href="#step-2" disabled
                                                                                      class="stepper__link"><span
                                                    class="circle-badge circle-badge_gray">2</span></a></li>
                                        <li class="list-inline-item list-inline__separator d-none d-md-inline-block"><img
                                                src="/public/img/arrow.svg" width="12"></li>
                                        <li class="list-inline-item stepper__item"><a href="#step-3" disabled
                                                                                      class="stepper__link"><span
                                                    class="circle-badge circle-badge_gray">3</span></a></li>
                                        <li class="list-inline-item list-inline__separator d-none d-md-inline-block"><img
                                                src="/public/img/arrow.svg" width="12"></li>
                                        <li class="list-inline-item stepper__item"><a href="#step-4" disabled
                                                                                      class="stepper__link"><span
                                                    class="circle-badge circle-badge_gray">4</span></a></li>
                                        <li class="list-inline-item list-inline__separator d-none d-md-inline-block"><img
                                                src="/public/img/arrow.svg" width="12"></li>
                                        <li class="list-inline-item stepper__item"><a href="#step-5" disabled
                                                                                      class="stepper__link"><span
                                                    class="circle-badge circle-badge_gray">5</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <form  method="post"  action="{{route('send-mail')}}" class="jq_modal_form" data-formtype="step_by_step">
                                    {{ csrf_field() }}
                                    <div class="steps">
                                        <div class="steps__step step1" id="step-1">
                                            <p class="h3 mb-4">Где вы хотите отдохнуть?</p>
                                            <div class="input-group input-group-lg">
                                                <div class="form-group form-control-wrapper">
                                                    <select name="country" class="form-control custom-select custom-select-lg">
                                                        <option value="Абхазия">Абхазия</option>
                                                        <option value="Австралия">Австралия</option>
                                                        <option value="Австрия">Австрия</option>
                                                        <option value="Азербайджан">Азербайджан</option>
                                                        <option value="Албания">Албания</option>
                                                        <option value="Алжир">Алжир</option>
                                                        <option value="Ангилья">Ангилья</option>
                                                        <option value="Ангола">Ангола</option>
                                                        <option value="Андорра">Андорра</option>
                                                        <option value="Антигуа и Барбуда">Антигуа и Барбуда</option>
                                                        <option value="Антильские острова">Антильские острова</option>
                                                        <option value="Аргентина">Аргентина</option>
                                                        <option value="Армения">Армения</option>
                                                        <option value="Аруба">Аруба</option>
                                                        <option value="Багамы">Багамы</option>
                                                        <option value="Бангладеш">Бангладеш</option>
                                                        <option value="Барбадос">Барбадос</option>
                                                        <option value="Бахрейн">Бахрейн</option>
                                                        <option value="Беларусь">Беларусь</option>
                                                        <option value="Белиз">Белиз</option>
                                                        <option value="Бельгия">Бельгия</option>
                                                        <option value="Бенин">Бенин</option>
                                                        <option value="Бермудские острова">Бермудские острова</option>
                                                        <option value="Болгария">Болгария</option>
                                                        <option value="Боливия">Боливия</option>
                                                        <option value="Бонэйр">Бонэйр</option>
                                                        <option value="Босния и герцеговина">Босния и Герцеговина</option>
                                                        <option value="Ботсвана">Ботсвана</option>
                                                        <option value="Бразилия">Бразилия</option>
                                                        <option value="_25D0_2591_25D1_2580_25D0_25B8_25D1_2582. _25D0_25B2_25D0_25B8_25D1_2580_25D0_25B3_25D0_25B8_25D0_25_092E760096">Брит. Виргинские острова
                                                        </option>
                                                        <option value="Бруней">Бруней</option>
                                                        <option value="Буркина-фасо">Буркина-Фасо</option>
                                                        <option value="Бурунди">Бурунди</option>
                                                        <option value="Бутан">Бутан</option>
                                                        <option value="Вануату">Вануату</option>
                                                        <option value="Великобритания">Великобритания</option>
                                                        <option value="Венгрия">Венгрия</option>
                                                        <option value="Венесуэла">Венесуэла</option>
                                                        <option value="Вьетнам">Вьетнам</option>
                                                        <option value="Гаити">Гаити</option>
                                                        <option value="Гайана">Гайана</option>
                                                        <option value="Гамбия">Гамбия</option>
                                                        <option value="Гана">Гана</option>
                                                        <option value="Гваделупа">Гваделупа</option>
                                                        <option value="Гватемала">Гватемала</option>
                                                        <option value="Гвиана">Гвиана</option>
                                                        <option value="Германия">Германия</option>
                                                        <option value="Голландия">Голландия</option>
                                                        <option value="Гондурас">Гондурас</option>
                                                        <option value="Гонконг">Гонконг</option>
                                                        <option value="Гренада">Гренада</option>
                                                        <option value="Гренландия">Гренландия</option>
                                                        <option value="Греция">Греция</option>
                                                        <option value="Грузия">Грузия</option>
                                                        <option value="Дания">Дания</option>
                                                        <option value="Джибути">Джибути</option>
                                                        <option value="Доминика">Доминика</option>
                                                        <option value="Доминикана">Доминикана</option>
                                                        <option value="Египет">Египет</option>
                                                        <option value="Замбия">Замбия</option>
                                                        <option value="Зимбабве">Зимбабве</option>
                                                        <option value="Израиль">Израиль</option>
                                                        <option value="Индия">Индия</option>
                                                        <option value="Индонезия">Индонезия</option>
                                                        <option value="Иордания">Иордания</option>
                                                        <option value="Иран">Иран</option>
                                                        <option value="Ирландия">Ирландия</option>
                                                        <option value="Исландия">Исландия</option>
                                                        <option value="Испания">Испания</option>
                                                        <option value="Италия">Италия</option>
                                                        <option value="Йемен">Йемен</option>
                                                        <option value="Кабо-Верде">Кабо-Верде</option>
                                                        <option value="Казахстан">Казахстан</option>
                                                        <option value="Каймановы о-ва">Каймановы о-ва</option>
                                                        <option value="Камбоджа">Камбоджа</option>
                                                        <option value="Камерун">Камерун</option>
                                                        <option value="Канада">Канада</option>
                                                        <option value="Карибские острова">Карибские острова</option>
                                                        <option value="Катар">Катар</option>
                                                        <option value="Кения">Кения</option>
                                                        <option value="Кипр">Кипр</option>
                                                        <option value="Киргизия">Киргизия</option>
                                                        <option value="Китай">Китай</option>
                                                        <option value="Колумбия">Колумбия</option>
                                                        <option value="Коморские острова">Коморские острова</option>
                                                        <option value="Конго">Конго</option>
                                                        <option value="Коста-рика">Коста-Рика</option>
                                                        <option value="Кот-д’Ивуар">Кот-д’Ивуар</option>
                                                        <option value="Куба">Куба</option>
                                                        <option value="Кувейт">Кувейт</option>
                                                        <option value="Кыргызстан">Кыргызстан</option>
                                                        <option value="Кюрасао">Кюрасао</option>
                                                        <option value="Лаос">Лаос</option>
                                                        <option value="Латвия">Латвия</option>
                                                        <option value="Ливан">Ливан</option>
                                                        <option value="Ливия">Ливия</option>
                                                        <option value="Литва">Литва</option>
                                                        <option value="Лихтенштейн">Лихтенштейн</option>
                                                        <option value="Лутраки">Лутраки</option>
                                                        <option value="Люксембург">Люксембург</option>
                                                        <option value="Маврикий">Маврикий</option>
                                                        <option value="Мадагаскар">Мадагаскар</option>
                                                        <option value="Македония">Македония</option>
                                                        <option value="Малайзия">Малайзия</option>
                                                        <option value="Мали">Мали</option>
                                                        <option value="Мальдивы">Мальдивы</option>
                                                        <option value="Мальта">Мальта</option>
                                                        <option value="Марианские острова">Марианские острова</option>
                                                        <option value="Марокко">Марокко</option>
                                                        <option value="Мартиника">Мартиника</option>
                                                        <option value="Мексика">Мексика</option>
                                                        <option value="Мозамбик">Мозамбик</option>
                                                        <option value="Молдавия">Молдавия</option>
                                                        <option value="Молдова">Молдова</option>
                                                        <option value="Монако">Монако</option>
                                                        <option value="Монголия">Монголия</option>
                                                        <option value="Мьянма">Мьянма</option>
                                                        <option value="Намибия">Намибия</option>
                                                        <option value="Непал">Непал</option>
                                                        <option value="Нигерия">Нигерия</option>
                                                        <option value="Нидерланды">Нидерланды</option>
                                                        <option value="Никарагуа">Никарагуа</option>
                                                        <option value="Новая Гвинея">Новая Гвинея</option>
                                                        <option value="Новая Зеландия">Новая Зеландия</option>
                                                        <option value="Новая Каледония">Новая Каледония</option>
                                                        <option value="Норвегия">Норвегия</option>
                                                        <option value="_25D0_259E. _25D0_259A_25D1_2583_25D0_25BA_25D0_25B0">О. Кука</option>
                                                        <option value="ОАЭ">ОАЭ</option>
                                                        <option value="Оман">Оман</option>
                                                        <option value="Остров Крит">Остров Крит</option>
                                                        <option value="Пакистан">Пакистан</option>
                                                        <option value="Палау">Палау</option>
                                                        <option value="Панама">Панама</option>
                                                        <option value="Папуа Новая Гвинея">Папуа Новая Гвинея</option>
                                                        <option value="Парагвай">Парагвай</option>
                                                        <option value="Перу">Перу</option>
                                                        <option value="Полинезия">Полинезия</option>
                                                        <option value="Польша">Польша</option>
                                                        <option value="Португалия">Португалия</option>
                                                        <option value="Прибалтика">Прибалтика</option>
                                                        <option value="Пуэрто-Рико">Пуэрто-Рико</option>
                                                        <option value="Республика Тринидад и Тринидад">Республика Тринидад и
                                                            Тринидад
                                                        </option>
                                                        <option value="Реюньон">Реюньон</option>
                                                        <option value="Россия">Россия</option>
                                                        <option value="Румыния">Румыния</option>
                                                        <option value="Сан Сальвадор">Сан Сальвадор</option>
                                                        <option value="Сан-Марино">Сан-Марино</option>
                                                        <option value="Саудовская Аравия">Саудовская Аравия</option>
                                                        <option value="Свазиленд">Свазиленд</option>
                                                        <option value="Сейшелы">Сейшелы</option>
                                                        <option value="Сен-Бартелеми">Сен-Бартелеми</option>
                                                        <option value="Сен-Мартен">Сен-Мартен</option>
                                                        <option value="Сенегал">Сенегал</option>
                                                        <option value="Сент-Винсент и Гренадины">Сент-Винсент и Гренадины
                                                        </option>
                                                        <option value="Сент-Китс и Невис">Сент-Китс и Невис</option>
                                                        <option value="Сент-Дюсия">Сент-Люсия</option>
                                                        <option value="Сербия">Сербия</option>
                                                        <option value="Сингапур">Сингапур</option>
                                                        <option value="Сирия">Сирия</option>
                                                        <option value="Скандинавия">Скандинавия</option>
                                                        <option value="Словакия">Словакия</option>
                                                        <option value="Словения">Словения</option>
                                                        <option value="Судан">Судан</option>
                                                        <option value="Суринам">Суринам</option>
                                                        <option value="США">США</option>
                                                        <option value="Сьерра Леоне">Сьерра Леоне</option>
                                                        <option value="Таджикистан">Таджикистан</option>
                                                        <option value="Таиланд">Таиланд</option>
                                                        <option value="Таити">Таити</option>
                                                        <option value="Тайвань">Тайвань</option>
                                                        <option value="Тайланд">Тайланд</option>
                                                        <option value="Танзания">Танзания</option>
                                                        <option value="Теркс и кайкос">Теркс и Кайкос</option>
                                                        <option value="Тибет">Тибет</option>
                                                        <option value="Того">Того</option>
                                                        <option value="Тринидад и Тобаго">Тринидад и Тобаго</option>
                                                        <option value="Тунис">Тунис</option>
                                                        <option value="Туркменистан">Туркменистан</option>
                                                        <option value="Турция" selected>Турция</option>
                                                        <option value="Уганда">Уганда</option>
                                                        <option value="Узбекистан">Узбекистан</option>
                                                        <option value="Украина">Украина</option>
                                                        <option value="Уругвай">Уругвай</option>
                                                        <option value="Фиджи">Фиджи</option>
                                                        <option value="Филиппины">Филиппины</option>
                                                        <option value="Финляндия">Финляндия</option>
                                                        <option value="Франция">Франция</option>
                                                        <option value="Французская Гвиана">Французская Гвиана</option>
                                                        <option value="Французская Полинезия">Французская Полинезия</option>
                                                        <option value="Хорватия">Хорватия</option>
                                                        <option value="ЦАР">ЦАР</option>
                                                        <option value="Чад">Чад</option>
                                                        <option value="Черногория">Черногория</option>
                                                        <option value="Чехия">Чехия</option>
                                                        <option value="Чили">Чили</option>
                                                        <option value="Швейцария">Швейцария</option>
                                                        <option value="Швеция">Швеция</option>
                                                        <option value="Шри-Ланка">Шри-Ланка</option>
                                                        <option value="Эквадор">Эквадор</option>
                                                        <option value="Экваториальная Гвинея">Экваториальная Гвинея</option>
                                                        <option value="Эль-Сальвадор">Эль-Сальвадор</option>
                                                        <option value="Эритрея">Эритрея</option>
                                                        <option value="Эстония">Эстония</option>
                                                        <option value="Эфиопия">Эфиопия</option>
                                                        <option value="ЮАР">ЮАР</option>
                                                        <option value="Южная корея">Южная корея</option>
                                                        <option value="Ямайка">Ямайка</option>
                                                        <option value="Япония">Япония</option>
                                                    </select>
                                                    <img src="/public/img/ico-location.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="input-group-append">
                                                    <a href="#" class="btn-step btn-secondary btn-block next-step">Далее</a>
                                                </div>
                                            </div>
                                            <p class="pt-4">
                                                Осталось всего <b>4 шага</b> и не более 30 секунд, чтобы получить цену вашего
                                                тура прямо сейчас
                                            </p>
                                        </div>
                                        <div class="steps__step step2" id="step-2">
                                            <p class="h3 mb-4">Выберите удобные даты вылета</p>
                                            <div class="input-group input-group-lg">
                                                <div class="form-group form-control-wrapper">
                                                    <input name="dates" type="text" class="form-control datepick" readonly
                                                           data-range="true" data-multiple-dates-separator="–"
                                                           placeholder="Выберите даты">
                                                    <img src="/public/img/ico-calendar.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="input-group-append">
                                                    <a href="#" class="btn-step btn-secondary btn-block next-step">Далее</a>
                                                </div>
                                            </div>
                                            <p class="pt-4">
                                                Осталось всего <b>3 шага</b> и не более 30 секунд, чтобы получить цену вашего
                                                тура прямо сейчас
                                            </p>
                                        </div>
                                        <div class="steps__step step3" id="step-3">
                                            <p class="h3 mb-4">Количество ночей</p>
                                            <div class="input-group input-group-lg">
                                                <div class="form-group form-control-wrapper">
                                                    <select name="nights_from"
                                                            class="form-control custom-select custom-select-lg">
                                                        <option value="0">от 1 ночи</option>
                                                        <option value="1">от 2 ночей</option>
                                                        <option value="2">от 3 ночей</option>
                                                        <option value="3">от 4 ночей</option>
                                                        <option value="4">от 5 ночей</option>
                                                        <option value="5" selected>от 6 ночей</option>
                                                        <option value="6">от 7 ночей</option>
                                                        <option value="7">от 8 ночей</option>
                                                        <option value="8">от 9 ночей</option>
                                                        <option value="9">от 10 ночей</option>
                                                        <option value="10">от 11 ночей</option>
                                                        <option value="11">от 12 ночей</option>
                                                        <option value="12">от 13 ночей</option>
                                                        <option value="13">от 14 ночей</option>
                                                    </select>
                                                    <img src="/public/img/ico-calendar.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="form-group form-control-wrapper">
                                                    <select name="nights_to"
                                                            class="form-control custom-select custom-select-lg">
                                                        <option value="0">до 1 ночи</option>
                                                        <option value="1">до 2 ночей</option>
                                                        <option value="2">до 3 ночей</option>
                                                        <option value="3">до 4 ночей</option>
                                                        <option value="4">до 5 ночей</option>
                                                        <option value="5">до 6 ночей</option>
                                                        <option value="6">до 7 ночей</option>
                                                        <option value="7">до 8 ночей</option>
                                                        <option value="8" selected>до 9 ночей</option>
                                                        <option value="9">до 10 ночей</option>
                                                        <option value="10">до 11 ночей</option>
                                                        <option value="11">до 12 ночей</option>
                                                        <option value="12">до 13 ночей</option>
                                                        <option value="13">до 14 ночей</option>
                                                    </select>
                                                    <img src="/public/img/ico-calendar.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="input-group-append">
                                                    <a href="#" class="btn-step btn-secondary btn-block next-step">Далее</a>
                                                </div>
                                            </div>
                                            <p class="pt-4">
                                                Осталось всего <b>2 шага</b> и не более 30 секунд, чтобы получить цену вашего
                                                тура прямо сейчас
                                            </p>
                                        </div>
                                        <div class="steps__step step4" id="step-4">
                                            <p class="h3 mb-4">Укажите количество человек</p>
                                            <div class="input-group input-group-lg">
                                                <div class="form-group form-control-wrapper">
                                                    <select name="adults" class="form-control custom-select custom-select-lg">
                                                        <option value="1">1 взрослый</option>
                                                        <option value="2" selected>2 взрослых</option>
                                                        <option value="3">3 взрослых</option>
                                                        <option value="4">4 взрослых</option>
                                                        <option value="5">5 взрослых</option>
                                                        <option value="6">6 взрослых</option>
                                                        <option value="7">7 взрослых</option>
                                                    </select>
                                                    <img src="/public/img/ico-user.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="form-group form-control-wrapper">
                                                    <select name="kids" class="form-control custom-select custom-select-lg">
                                                        <option value="0" selected>Без детей</option>
                                                        <option value="1">1 ребенок</option>
                                                        <option value="2">2 детей</option>
                                                        <option value="3">3 детей</option>
                                                        <option value="4">4 детей</option>
                                                        <option value="5">5 детей</option>
                                                        <option value="6">6 детей</option>
                                                        <option value="7">7 детей</option>
                                                    </select>
                                                    <img src="/public/img/ico-baby.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="input-group-append">
                                                    <a href="#" class="btn-step btn-secondary btn-block next-step">Далее</a>
                                                </div>
                                            </div>
                                            <p class="pt-4">
                                                Остался <b>1 шаг</b>, чтобы получить цену вашего тура прямо сейчас
                                            </p>
                                        </div>
                                        <div class="steps__step step5" id="step-5">
                                            <p class="h3 mb-4">Готово! Как мы можем с вами связаться?</p>
                                            <div class="input-group input-group-lg">
                                                <div class="form-group form-control-wrapper">
                                                    <input name="tel" type="tel" class="form-control input-phone"
                                                           placeholder="Ваш номер телефона" required>
                                                    <img src="/public/img/ico-phone.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="form-group form-control-wrapper">
                                                    <input name="email" type="email" class="form-control"
                                                           placeholder="Ваш e-mail">
                                                    <img src="/public/img/ico-mail.svg" width="21" class="form-control__ico">
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn-step btn-secondary btn-lg btn-block" type="submit">Получить
                                                        расчет цены тура
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="pt-4">
                                                Это <b>последний шаг</b>, чтобы получить цену вашего тура прямо сейчас
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
        </section>

    <section class="section-advantages" id="section-1">
            <h2 class="text-center mb-4">Почему 5 сезонов?</h2>
            <div class="row">

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-1.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Широкие возможности для отдыха</h5>
                            Наш профиль – высококачественное обслуживание туристов на самых популярных направлениях
                            зарубежного туризма.
                        </div>
                    </div>

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-2.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Мы лучшие в индустрии</h5>
                            Высокие технологии позволяют нам бесперебойно и четко обслуживать тысячи туристов даже в пик
                            туристического сезона
                        </div>
                    </div>

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-3.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Угадываем ваши желания</h5>
                            Принцип работы Тез тур помогает клиентам чувствовать себя как дома, на любом этапе путешествия
                        </div>
                    </div>

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-4.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">У нас работают лучшие специалисты</h5>
                            Мы тщательно отслеживаем каждую заявку с момента поступления в TEZ TOUR до возвращения туриста
                            домой.
                        </div>
                    </div>

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-5.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Помогаем экономить на отдыхе</h5>
                            Мы всегда найдем для вас самые выгодные цены под любые ваши запросы
                        </div>
                    </div>

                    <div class="media">
                        <div class="text-center">
                            <img class="mr-3 mr-md-4" src="/public/img/advantages-6.svg" width="60">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Мы&nbsp;&mdash; надежный туроператор</h5>
                            Мы работаем только с проверенными и надежными партнерами. Авиаперевозки осуществляются
                            крупнейшими авиакомпаниями мира. Среди них "Аэрофлот", I Fly, Thai Airways, Emirates, QATAR
                            AIRWAYS, Air Baltic, Air Europa и другие.
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
    <h2 class="h1">Календарь цен</h2>
        <div class="calendar">
            @foreach($calendar as $item)
                <div class='calendar_item'>
                    <div class="block_img">
                    @if(file_exists(public_path().$item['img']))
                        <img class="img_header" src="<?php  echo $item['img']?>" alt="">

                    @endif
                        <h4><?php  echo  $item['name']?></h4>
                    </div>

                    @isset($item['country_price'])
                      <?php echo $item['country_price']?>
                    @endisset

                    <button class="btn-more">Показать всё</button>
                    <span class="text_bottom">Цены указаны в расчете на одного взрослого в стандартном размещении на двоих</span>
                </div>
            @endforeach
            <a href="{{route('calender-price')}}" class="all_calender">Весь календарь</a>
        </div>


    <div class="tv-hot-tours tv-moduleid-974374"></div>
   <!-- <script  src="//tourvisor.ru/module/init.js"></script>-->
    </div>
    <!-- Отзывы-->
    <div class="section-reviews bg_gray">
        <div class="container">
            <h2 class="h-heading">Наши туристы остались довольны</h2>
            <hr class="style-seven">
        </div>
            <div class="slick-feedback">
                <div class="item_slider">
                        <div class="reviews-card__item">
                            <div class="reviews-card__right-col">
                                <div class="reviews-card__content">
                                    <div class="reviews-card__name">Евгения </div>
                                    <div class="reviews-card__date">
                                        08 февраль 2019 г.
                                    </div>
                                    <div class="reviews-card__text">
                                        Очень понравился отдых в чудесной стране - Королевстве Таиланд в феврале 2019 года. Отель Амбассадор Инн в Патайе  - это просто чудо. Прекрасный отель, удивительный подбор экскурсий и самое главное, прекрасная локация отеля по отношению к центру. Патаей сделал наш отдых с детьми незабываемым.  Огромное спасибо директору Илье, за организацию этого чудесного отдыха!
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item_slider">
                        <div class="reviews-card__item">
                            <div class="reviews-card__right-col">
                                <div class="reviews-card__content">
                                    <div class="reviews-card__name">Елена Горященко</div>
                                    <div class="reviews-card__date">
                                        26 ноября 2018 г.
                                    </div>
                                    <div class="reviews-card__text">
                                        Понравилась удивительная поездка в Тунис. сказочный отдых и прекрасная страна. Понравилась не только мне, но и нашим деткам. Путешествуйте с агентством 5 сезонов, и вы получите удивительное наслаждение от отдыха и ярких эмоций!
                                        Буду советовать своим близким и друзьям!
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="item_slider">
                        <div class="reviews-card__item">
                            <div class="reviews-card__right-col">
                                <div class="reviews-card__content">
                                    <div class="reviews-card__name">Владислав</div>
                                    <div class="reviews-card__date">
                                        14 ноября 2018 г.
                                    </div>
                                    <div class="reviews-card__text">
                                        Мы довольны услугами турагентства "5 сезонов". Отдельное спасибо менеджеру Илье, который в кротчайшие сроки подобрал нам хороший тур в Шарм Эль Шейх. Отдых удался. Рекомендуем.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item_slider">
                        <div class="reviews-card__item">
                            <div class="reviews-card__right-col">
                                <div class="reviews-card__content">
                                    <div class="reviews-card__name">Наталья</div>
                                    <div class="reviews-card__date">
                                        12 ноября 2018 г.
                                    </div>
                                    <div class="reviews-card__text">
                                        Очень долго подбирали разные варианты для того, чтобы отпраздновать свой юбилейный День рождения в путешествии и не могли определиться... Решили обратиться за помощью в турагентство 5 сезонов. Илья, выслушав все пожелания, предложил отдых в Турции, отель Justiniano Club Park Conti...
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        <a href="#callbackCommetn" class="btn btn-brand popup-with-form btn_feed_back">
                Оставить отзыв
        </a>
    </div>

    <!--Конец отзывы-->
    @endsection
@section('footer-script')
    <script src="/public/js/libs/datepicker.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.datepick').datepicker({
                autoClose: true
            })

            $(".slider_top").slick({
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                speed: 2000,
                fade: true,
                cssEase: 'linear',
                pauseOnHover:false,
                touchMove:false,
                pauseOnFocus:false
            });

            if (Modernizr.touchevents){
                $("header .search_block_header").css({
                    marginTop: "20px",
                    position: "relative"
                })
                $("header .wrapper-slider , .wrapper_header").css('display','none');

            } else {
                console.log("NO !! touch!!");

            }


        })
    </script>
@endsection
