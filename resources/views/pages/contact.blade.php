@extends('layouts.app')
@section('title')Контакты турагентства &laquo;5 сезонов&raquo;. Доступный отдых по самым популярным странам мира.@endsection
@section('description')Контакты турагентство &laquo;5 сезонов&raquo; оставить заявку на тур, задать вопрос!@endsection
@section('keywords')турагентство 5 сезонов, Контакты@endsection
@section('center')
    <section class="wrapper pt-118px">


        <div class="page_contact" itemscope itemtype="http://schema.org/Organization">
            <h1 class="h1-cont">Контакты</h1>
            <span class="title-contact" itemprop="name">5 сезонов</span>

            <div class="adress-in-contact" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                Адрес:
                <span itemprop="streetAddress">ул. Котова, 14/1</span>

                <span itemprop="addressLocality">Луганск, Краснодон</span>,
            </div>
            <span itemprop="telephone" class="contact_tel"><i class="icon-phone_android"></i>
                <a href="tel:+380954463272" >+38 (095) 446-32-72</a>
            </span>
            <span itemprop="telephone" class="contact_tel"><i class="icon-phone_android"></i>
                <a href="tel:0721608584" >(072) 160-85-84</a>
            </span>
            <span class="contact_mail"><i class="icon-gmail"></i>
                <a href="mailto:zakaz@5-sezonov.ru"  itemprop="email" >zakaz@5-sezonov.ru</a>
            </span>
        </div>
        <div class="map">
            <iframe src="https://yandex.ua/map-widget/v1/-/CCBONHPT" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
        </div>
        <div class="zoom-anim-dialog-info form_width contact_form">
            <form action="{{route('send-mail')}}" method="post" class="form_callback" >
                <h3>Заполните ваши контакты</h3>
                {{ csrf_field() }}
                <div class="controll_input">
                    <input type="text" name="name">
                    <span>Ваше имя</span>
                </div>
                <div class="controll_input">
                    <input class="input-tel" type="tel" name="tel">
                    <span>Ваш телефон</span>
                </div>
                <div class="controll_input">
                    <input type="email" name="email">
                    <span>Ваш email</span>
                </div>
                <textarea></textarea>
                <input type="submit" class="btn" value="Отправить заявку" onsubmit="return false;">
            </form>
        </div>
    </section>
    <div class="contact_tour">
        <div class="wrapper">
            <div class="tv-hot-tours tv-moduleid-974734"></div>
            <script  src="//tourvisor.ru/module/init.js"></script>
        </div>
    </div>
    <!-- End Block Найди сам! -->
@endsection

