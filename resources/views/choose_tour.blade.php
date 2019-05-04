@extends('layouts.app')
@section('title')Поиск туров онлайн, горящие путевки от &laquo;5 сезонов&raquo; по низкой цене в Луганске!@endsection
@section('description')Поиск онлайн и подбор тура на отдых  на сайте турагентства &laquo;5 сезонов&raquo; по лучшим ценам в Луганске!@endsection
@section('keywords')Поиск туров@endsection
@section('style')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/search.css') }}">
@endsection

@section('center')
    <section class="wrapper pt-118px page_choose_tour">
        <h2 class="h1">Подбор тура</h2>
        <hr class="style-seven">

        <div id="dm_content">
            <div class="dm_area dm_page_content">

                <div class="dm_widget search_page">

                  <!--
                    <div class="wrap b-markdown gagarin">
                        <div class="notice">

                        </div>
                    </div>
                    -->

                    <div class="b-tour-search-form">

                        <!--НЕЛЬЗЯ ИСПОЛЬЗОВАТЬ АВТОФОРМАТИРОВАНИЕ!!!  -->

                        <div class='otour_search'>
                            <form class="b-form small gagarin b-round b-shadow">
                                <div class='header'>
                                    <div class="inner">
                                        <h1>Поиск туров по всем туроператорам онлайн</h1>
                                    </div>
                                </div>
                                <div class="loader_wrapper">
                                    <div class="flex-for-mob">
                                        <div class="b-column half">
                                            <li class="dm_form_element">
                                                <label class="lebel-form">Город вылета</label>
                                                <select class="departures b-select gagarin" data-placeholder="Выберите город вылета"></select>
                                            </li>
                                        </div>

                                        <div class="b-column half">
                                            <li class="dm_form_element">
                                                <label class="lebel-form">Направление</label>
                                                <select class="destinations b-select gagarin" data-placeholder="Выберите направление"></select>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="additional">

                                        <hr/>

                                        <div class="b-column half">
                                            <li class="dm_form_element">
                                                <label class="lebel-form">Курорт</label>
                                                <select class="curorts b-select gagarin" multiple=true data-placeholder="Выберите курорт"></select>
                                            </li>
                                        </div>
                                        <!--
-->
                                        <div class="b-column half">
                                            <li class="dm_form_element">
                                                <label  class="lebel-form">Тип отеля</label>
                                                <input class="b-checkbox gagarin" value=1 checked type=checkbox id=hotel-type1 name=hotel-type[] />
                                                <label class="b-label gagarin hotel-types" for=hotel-type1>1<span class="stars"></span></label>
                                                <input class="b-checkbox gagarin" value=2 checked type=checkbox id=hotel-type2 name=hotel-type[] />
                                                <label class="b-label gagarin hotel-types" for=hotel-type2>2<span class="stars"></span></label>
                                                <input class="b-checkbox gagarin" value=3 checked type=checkbox id=hotel-type3 name=hotel-type[] />
                                                <label class="b-label gagarin hotel-types" for=hotel-type3>3<span class="stars"></span></label>
                                                <input class="b-checkbox gagarin" value=4 checked type=checkbox id=hotel-type4 name=hotel-type[] />
                                                <label class="b-label gagarin hotel-types" for=hotel-type4>4<span class="stars"></span></label>
                                                <input class="b-checkbox gagarin" value=5 checked type=checkbox id=hotel-type5 name=hotel-type[] />
                                                <label class="b-label gagarin hotel-types" for=hotel-type5>5<span class="stars"></span></label>
                                            </li>
                                        </div>


                                    <div class="block-sec">
                                            <div class="b-column half">
                                                <li class="dm_form_element date first date_from" style="margin-right: 20px;">
                                                    <label class="lebel-form">Вылет с:</label>
                                                    <input style="float: left;" readonly="readonly" class="b-text small datepicker-start  datepicker-from" type="text" data-position="bottom left"  />
                                                </li>

                                            </div>
                                            <!--
-->
                                            <div class="b-column half">
                                                <li class="dm_form_element date first date_to" style="margin-right: 20px;">
                                                    <label class="lebel-form">по:</label>
                                                    <input style="float: left;" readonly="readonly" class="b-text small datepicker-start  datepicker-to" type="text" data-position="bottom left"  />
                                                </li>
                                            </div>

                                            <div class="b-column half nights">
                                                <div class="wrapper-search">
                                                    <label class="lebel-form">Ночей</label>
                                                    <div class="wrapper-night">
                                                        <li class="dm_form_element nights_to">
                                                            <div class="sub ot" style="float: left; padding-top: 5px;">
                                                                <label>от:</label>
                                                            </div>
                                                            <!--
    -->
                                                            <div class="sub">
                                                                <select class="nights_start b-select gagarin small">
                                                                    <option value="2" selected="selected">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <!--
    -->
                                                        <li class='separate' style="width: 6%; height: 5px;"></li>
                                                        <!--
    -->
                                                        <li class="dm_form_element nights_from">
                                                            <div class="sub do" style="float: left; padding-top: 5px;">
                                                                <label >до:</label>
                                                            </div>
                                                            <!--

    -->
                                                            <div class="sub">
                                                                <select class="nights_end b-select gagarin small">
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14" selected="selected">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="b-column half counts">
                                                <div class="wrapper-search">
                                                    <li class="dm_form_element jump first">
                                                        <label class="lebel-form">Взрослых:</label>
                                                        <select class="adults b-select gagarin small">
                                                            <option value="1">1</option>
                                                            <option value="2" selected="selected">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </li>
                                                    <!--

-->
                                                    <li class="dm_form_element jump">
                                                        <label class="lebel-form">Детей:</label>
                                                        <select class="childs b-select gagarin small">
                                                            <option value="0" selected="selected">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </li>
                                                </div>
                                            </div>

                                            <div class="b-column half child_age">
                                                <div class="wrapper-search">
                                                    <label class="lebel-form">Возраст детей:</label>
                                                    <li class="dm_form_element jump">
                                                        <select class="child_age age1 b-select gagarin small" name='child_ages[]'>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2" selected="selected">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14 </option>
                                                        </select>
                                                    </li>
                                                    <li class="dm_form_element jump second">
                                                        <select class="child_age age2 b-select gagarin small" name='child_ages[]'>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2" selected="selected">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14 </option>
                                                        </select>
                                                    </li>

                                                    <li class="dm_form_element jump second">
                                                        <select class="child_age age3 b-select gagarin small" name='child_ages[]'>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2" selected="selected">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14 </option>
                                                        </select>
                                                    </li>
                                                </div>
                                            </div>

                                            <div class="b-column meal_types">
                                                <li class="dm_form_element meals">
                                                    <label class="lebel-form">Тип питания</label>
                                                    <input class="b-checkbox gagarin" value="1" checked="true" type="checkbox" id="meal-type" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type1" ><span>RO</span></label>

                                                    <input class="b-checkbox gagarin" value="2" checked="true" type="checkbox" id="meal-type2" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type2" ><span>BB</span></label>

                                                    <input class="b-checkbox gagarin" value="3" checked="true" type="checkbox" id="meal-type3" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type3" ><span>HB</span></label>

                                                    <input class="b-checkbox gagarin" value="4" checked="true" type="checkbox" id="meal-type4" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type4" ><span>FB</span></label>

                                                    <input class="b-checkbox gagarin" value="5" checked="true" type="checkbox" id="meal-type5" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type5"><span>AI</span></label>

                                                    <input class="b-checkbox gagarin" value="6" checked="true" type="checkbox" id="meal-type6" name="meal-type[]" />
                                                    <label class="b-label q gagarin meal-types" for="meal-type6" ><span>UAI</span></label>

                                                </li>
                                            </div>

                                        </div>
                                        <!--

-->
                                        <div class="b-column half">
                                            <li class="dm_form_element">
                                                <label class="lebel-form">Отели:</label>
                                                <select class="hotels gagarin" multiple=true data-placeholder='Выберите отель'></select>
                                            </li>
                                        </div>

                                        <hr/>
                                    </div>
                                </div>
                                <div class="additional">
                                    <div class="b-column">
                                        <li class="dm_form_element">
                                            <span class="submit small red b-button gagarin"><i class="wr"><i class="fas fa-search"></i>Поиск<i class="wr"></i></i><input type="submit" value="Поиск"  /></span>
                                            <span class="cancel small gray b-button gagarin"><i class="wr">Сбросить<i class="wr"></i></i>
                                                <a class="reset" href="#" >Сбросить</a></span>
                                            <span class="b-markdown gagarin switch">
                                                <span class="b-bold">Цена:</span>
                                                        <a style="display: none;" href="default.htm" class="dotted cost_rounded">конечная</a>
                                                        <span id="cost_rounded_span" class="yellow">конечная</span> /
                                                        <a href="default.htm" class="dotted cost_origin ">туроператора</a>
                                                        <span style="display: none;" id="cost_origin_span" class="yellow">туроператора</span>
                                                        </span>
                                        </li>
                                    </div>
                                </div>
                            </form>
                            <div class="info">  <h1 class="caption">Найдено более</h1>
                                <hr/>
                                <p class="full b-markdown gagarin">
                                    <span class='sid'></span>
                                    <span class="notice notice_round">Цены указаны с учетом</span>
                                        <span class="discount-text">максимальных скидок</span> за <span class="people">2-х взрослых</span>.
                                            <span class="surcharge_added">Топливные и сервисные сборы включены.
                                                <span class="schengen" style="display: inline;">Туры можно приобрести при наличии действующей Шенгенской визы.<br>
                                                    <span class="notice notice_round" style="display: inline;">Как оформить визу через сервисно-визовые центры <a href="news/273" target="_blank" style="font-weight: bold;">самостоятельно</a>?</span>
                                                </span>
                                            </span>
                                    <span class="notice notice_to" style="display: none;">
                                         <span>Цены совпадают 1 в 1 с поисковиком туроператора!</span>
                                    </span>
                                </p>

                                <p class="empty">
                                    <span class='sid'></span> Извините, но по указанным параметрам, на данный момент, в нашем банке нет туров!
                                </p>

                                <p class="search_progress">
                                    <span class='sid'></span> Выполняется поиск туров. Пожалуйста подождите.
                                </p>
                            </div>

                            <div class="warning" style="display: none;">
                                <div>
                                    <div class="b-flash yellow">
                                        <div class="text">
                                            <b><i>Внимание!</i></b> Показаны не все результаты поиска. Для получения полного результата повторите поисковый запрос позднее.
                                            <div class="operators">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="results">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="b-markdown gagarin">
                    <h2>
                        Банк Горящих Туров это...</h2>
                    <ul>
                        <li>
                            <b>гарантия лучшей цены</b>: найдете дешевле -
                            <a href="best-price" target="_blank">вернем 150%разницы!</a>
                        </li>
                        <li>
                            <b>высокий уровень сервиса</b>: <a href="stories" target="_blank">тысячи клиентов</a> каждый месяц доверяют нам заботу о своем отдыхе
                        </li>
                        <li>
                            <b>оплата туров он-лайн</b>: моментальная покупка горящих туров (последние места/вылет завтра) на сайте Банка, <a href="kupit-tur-on-layn" target="_blank">читать инструкцию</a>
                        </li>
                        <li>
                            рассрочка на 4 месяца: первый взнос: 0%, оформление из дома
                            <a href="kredit3" target="_blank">он-лайн</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!--
        <div class="choose_tour">
         <div class="tv-search-form tv-moduleid-187833"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div> -->
    </section>
@endsection


@section('footer-script')
    <script src="/public/js/libs/datepicker.min.js"></script>
    <script src="/public/js/search-tour/search.js"></script>

    <script type="text/javascript">
        $(function() {
            $('label.q').tipsy({
                delayIn: 80
            });
            $('.b-checkbox.gagarin').iCheck({
                checkboxClass: 'b-checkbox',
                radioClass: 'b-radio',
                increaseArea: '20%', // optional
                labelHover: true
            });

            var options = {
                "discounts": {
                    "default": 5
                },
                "discount_template": "%original_price%\u0440.&nbsp;-&nbsp;%discount%%",
                "show_touroperator": false,
                "order_url": "//inside.bankturov.ru/+/accTour/buyForm",
                "country_names": {
                    "1": "\u0410\u0431\u0445\u0430\u0437\u0438\u044f",
                    "7": "\u0410\u043d\u0434\u043e\u0440\u0440\u0430",
                    "15": "\u0411\u0430\u0445\u0440\u0435\u0439\u043d",
                    "19": "\u0411\u043e\u043b\u0433\u0430\u0440\u0438\u044f",
                    "29": "\u0412\u044c\u0435\u0442\u043d\u0430\u043c",
                    "202": "\u0413\u0430\u043c\u0431\u0438\u044f",
                    "35": "\u0413\u0440\u0435\u0446\u0438\u044f",
                    "36": "\u0413\u0440\u0443\u0437\u0438\u044f",
                    "39": "\u0414\u043e\u043c\u0438\u043d\u0438\u043a\u0430\u043d\u0430",
                    "40": "\u0415\u0433\u0438\u043f\u0435\u0442",
                    "43": "\u0418\u0437\u0440\u0430\u0438\u043b\u044c",
                    "44": "\u0418\u043d\u0434\u0438\u044f",
                    "45": "\u0418\u043d\u0434\u043e\u043d\u0435\u0437\u0438\u044f",
                    "46": "\u0418\u043e\u0440\u0434\u0430\u043d\u0438\u044f",
                    "50": "\u0418\u0441\u043f\u0430\u043d\u0438\u044f",
                    "51": "\u0418\u0442\u0430\u043b\u0438\u044f",
                    "54": "\u041a\u0430\u043c\u0431\u043e\u0434\u0436\u0430",
                    "58": "\u041a\u0438\u043f\u0440",
                    "59": "\u041a\u0438\u0442\u0430\u0439",
                    "61": "\u041a\u0443\u0431\u0430",
                    "72": "\u041c\u0430\u043b\u044c\u0434\u0438\u0432\u044b",
                    "75": "\u041c\u0430\u0440\u043e\u043a\u043a\u043e",
                    "77": "\u041c\u0435\u043a\u0441\u0438\u043a\u0430",
                    "90": "\u041e\u0410\u042d",
                    "91": "\u041e\u043c\u0430\u043d",
                    "150": "\u0420\u043e\u0441\u0441\u0438\u044f",
                    "113": "\u0422\u0430\u0439\u043b\u0430\u043d\u0434",
                    "115": "\u0422\u0430\u043d\u0437\u0430\u043d\u0438\u044f",
                    "117": "\u0422\u0443\u043d\u0438\u0441",
                    "119": "\u0422\u0443\u0440\u0446\u0438\u044f",
                    "127": "\u0427\u0435\u0440\u043d\u043e\u0433\u043e\u0440\u0438\u044f",
                    "128": "\u0427\u0435\u0445\u0438\u044f",
                    "132": "\u0428\u0440\u0438-\u041b\u0430\u043d\u043a\u0430",
                    "138": "\u042f\u043c\u0430\u0439\u043a\u0430"
                },
                "one_resort_countries": ["44", "45", "59"],
                "independent_resorts": {
                    "3": ["\u043e. \u0411\u0430\u043b\u0438", "45", "3054"],
                    "4": ["\u043e. \u0425\u0430\u0439\u043d\u0430\u043d\u044c", "59", "3110,4230"],
                    "5": ["\u0421\u043e\u0447\u0438", "150", "1361,19,6322,663,361,5504,631"],
                    "6": ["\u041a\u0440\u044b\u043c", "150", "3481,6488,1373,6483,1528,4772,423,5677,6576,1308,1693,5793,1088,6490,43,6486,6481"],
                    "7": ["\u0413\u041e\u0410", "44", "336,6631,6632"]
                },
                "linked_resorts": ["3094", "6743", "6749", "6736", "6739", "6754", "6737", "3094", "6738", "6740", "6741", "6742", "6744", "6745", "6747", "6746", "6748", "6755", "6750", "6751", "6752", "6753", "6756", "3097", "3096", "1077", "3112", "3054", "1642", "1592", "765", "1531", "363", "3110", "4230", "745", "516", "1361", "19", "6322", "663", "361", "5504", "631", "3071", "4223", "4615", "4388", "4389", "1071", "1740", "1554", "4343", "4381", "4342", "4344", "3481", "6488", "1373", "6483", "1528", "4772", "423", "5677", "6576", "1308", "1693", "5793", "1088", "6490", "43", "6486", "6481", "336", "6631", "6632", "141", "555", "593", "1510", "1544"],
                "current_region": "\u041c\u043e\u0441\u043a\u0432\u0430",
                "domain": "moskva.bankturov.ru",
                "referrer": "//",
                "search_domain": "",
                "info_domain": "moskva.bankturov.ru",
                "bgt_country": "1",
                "can_bgt": false,
                "source_currency": "RUB",
                "offer_currency": "RUB",
                "currency_symbol": "\u20bd"
            };
            bgtSearchForm.init(options);
            $('.hotels').multipleSearch(options);


        });
    </script>
    @endsection
