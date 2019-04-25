@extends('layouts.app')
@section('title')Туры в Египет – купить горящие путевки на отдых в Египте из Луганска@endsection
@section('description')Египет, шарм эль шейх, Дахаб, Макади Бэй и Марса Алам, Нувейба и Сафага, Сома Бэй и Таба из Луганска, узнать цены от проверенных туроператоров. Индивидуальный подбор путевок от 5 сезонов.@endsection
@section('keywords')туры, Луганск, отпуск, отдых, турагентство, Египет, горящие, Ростов на Дону, подбор, лнр@endsection
@section('center')
<main>
    <section class="wrapper pt-118px">
        <!-- block info -->
        <div class="info_img">
            <h1>Туры в Египет</h1>

            <figure class="slider_page zoom-gallery">
                <a title="Горящие туры в Египет" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/1.jpg')}}">
                    <img src="{{asset('public/img/egipet/1.jpg')}}" alt="Горящие туры в Египет">
                </a>

                <a title="Египет из Луганска" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/2.jpg')}}">
                    <img src="{{asset('public/img/egipet/2.jpg')}}" alt="Египет из Луганска">
                </a>

                <a title="Египет лнр" class="popup-with-zoom-anim" href="{{asset('public/img/egipet/3.jpg')}}">
                    <img src="{{asset('public/img/egipet/3.jpg')}}" alt="Египет лнр">
                </a>
            </figure>

            <div class="text_info_in_page">
                <p> Египет не теряет позиции популярности по направлениям среди путешественников из любого уголка
                    мира. На сегодняшний день можно с уверенностью сказать, что Египет твердо занимает второе место
                    по посещаемости среди туристов из России.
                    В Египте находится огромное количество туристических достопримечательностей.</p>
                <p> И его главная достопримечательность — Красное море, самое завораживающее на планете, рай для
                    тех, кто любит дайвинг, и, конечно же, для любителей активных видов отдыха, тем кто предпочитает
                    просто лежать на пляже и наслаждаться красотой Египта - здесь скучно не будет никому!
                    Египетские пирамиды — это одно из 7 чудес света, сохранившееся с древних времён.</p>
                <p> Каждый должен увидеть это чудо своими глазами, тем более, что сейчас это можно осуществить с
                    большой легкостью и приобрести туры именно для Ваших финансовых возможностей.
                    У нас всегда в наличии горящие туры в Египет по доступной цене для всей семьи!</p>
                Вам лишь стоит сообщить Ваш бюджет, и мы подберем для Вас путевку в рай!

            </div>
        </div>
        <!-- End block info -->

      {{--  <div class="choose_tour">
            <div class="tv-hot-tours tv-moduleid-974436"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>--}}
        <div class="item_block_new">
        @foreach($hot_items as $item)
            <div class="item">
                <img src="<?php echo $item['img']?>" alt="<?php echo $item['name']?>" title="<?php echo $item['name']?>">
                <div class="box-text">
                    <span class="item_name"><?php echo $item['name']?></span>
                    <span class="item_price"><?php echo $item['price']?> руб.</span>
                </div>

            </div>
        @endforeach
        </div>

        </section>
</main>

    <!-- Block Найди сам! -->
{{--    <section class="find_by_self">
        <div class="wrapper">
            <h4 class="h2">ПОДБЕРИТЕ ТУР САМОСТОЯТЕЛЬНО:</h4>
            <div class="tv-search-form tv-moduleid-187833"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
    </section>--}}
    <!-- End Block Найди сам! -->
@endsection

