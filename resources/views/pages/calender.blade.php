@extends('layouts.app')
@section('title')Календарь низких цен из Ростова@endsection
@section('description')Цена на туры и горящие путевки в Луганске. Вылет из Ростова@endsection
@section('keywords')туры, Луганск, отпуск, отдых, турагентство, Ростов на Дону, подбор, лнр, цены на двоих@endsection
@section('center')
    <main>
        <div class="page_header_img">
            <h1>Календарь низких цен</h1>
        </div>

        <section class="wrapper">
            <!-- block info -->

            <!-- End block info -->

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
            </div>
        </section>
    </main>

@endsection

