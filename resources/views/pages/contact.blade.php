@extends('layouts.app')
@section('title')Контакты турагентства &laquo;5 сезонов&raquo;. Доступный отдых по самым популярным странам мира.@endsection
@section('description')Контакты турагентство &laquo;5 сезонов&raquo; оставить заявку на тур, задать вопрос!@endsection
@section('keywords')турагентство 5 сезонов, Контакты@endsection
@section('center')
    <section class="wrapper pt-118px">
        <h1>Контакты</h1>
        <hr class="style-seven">
        <div class="page_contact">
            <span class="contact_tel"><i class="fas fa-mobile-alt"></i><a href="tel:+380954463272">+38 (095) 446-32-72</a></span>
            <span class="contact_mail"><i class="fas fa-at"></i><a href="mailto:5sezonovlnr@gmail.com">5sezonovlnr@gmail.com</a></span>
            {{-- <span class="call_back"><a href="#"><i class="fas fa-headset"></i>Обратная связь</a></span>--}}
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
                    <span>Ваш телевон</span>
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
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </div>
    </div>
    <!-- End Block Найди сам! -->
@endsection

