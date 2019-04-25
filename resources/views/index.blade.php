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
    <h2 class="h1">Календарь цен</h2>
        <div class="calendar">
            @foreach($calendar as $item)
                <div class="calendar_item">
                    <h4><?php  echo  $item['name']?></h4>

                    @isset($item['country_price'])
                        <div class="calendar_box">
                            @foreach( $item['country_price'] as $cal)
                                <div class="item_block">
                                    <div class="date">
                                        <?php echo  $cal['date'] ?>
                                    </div>
                                    <div class="item_block_text">
                                        <div class="hight"><i><?php echo $cal['night']?></i> Ночей</div>
                                        <div class="price"><?php echo $cal['price']?> руб.<br></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endisset
                    <hr>

                </div>
            @endforeach
        </div>
        <hr class="style-seven">
    <div class="tv-hot-tours tv-moduleid-974374"></div>
   <!-- <script  src="//tourvisor.ru/module/init.js"></script>-->
    </div>
    <!-- Отзывы-->
    <div class="section-reviews bg_gray">
        <div class="container">
            <h2 class="h-heading">Наши туристы остались довольны</h2>
            <hr class="style-seven wrapper">
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
    <script>
        $(document).ready(function () {
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
