@extends('layouts.app')

@section('app_content')

    <?php
    $services = [
        0 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_1.jpg',
            'title' => 'Экспресс боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!',
            'price' => 12000
        ],
        1 => (object)[
            'id' => 1,
            'icon' => '<i class="fas fa-house-damage"></i>',
            'image' => 'gal_2.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!',
            'price' => 12000
        ],
        2 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-eye"></i>',
            'image' => 'gal_3.jpg',
            'title' => 'Ветка сакуры',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!',
            'price' => 12000
        ],
        3 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_4.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!',
            'price' => 12000
        ],
        4 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-eye"></i>',
            'image' => 'gal_3.jpg',
            'title' => 'Ветка сакуры',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!',
            'price' => 12000
        ],
        5 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_4.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор! сли вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор',
            'price' => 12000
        ],
    ];
    ?>

    <div class="page_services">
        <div class="info_box">
            <div class="main_title">
                <div class="text wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="0.5s">Здесь представлены все услугу</div>
            </div>
        </div>
        <section class="section_services">
            <div class="box">
                <div class="main_title">
                    <div class="text wow anm_fadeInDown" data-wow-duration="1.1s" data-wow-delay="0.5s">Все услуги</div>
                </div>
                <div class="block">
                    <?php $i = 0?>
                    @foreach($services as $item)
                        <?php $i++?>
                        <div class="bn">
                            <div class="icon">
                                <div class="ico">{!! $item->icon !!}</div>
                                <div class="image">
                                    <div class="insert" style="background-image: url('/temp/{{ $item->image }}')"></div>
                                </div>
                            </div>
                            <div class="texts wow anm_fadeInDown" data-wow-duration="1.4s" data-wow-delay="{{ $i/4 }}s">
                                <h3>{{ $item->title }}</h3>
                                <div class="desc">{{ $item->desc }}</div>
                                <div class="price"><span>{{ $item->price }} тг</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <small class="wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.5s">Понравилась какая нибудь из представленных услуг? Закажите эту услугу!</small>
                <button type="button" class="js_order"><span>Заказать услугу</span></button>
            </div>
        </section>
    </div>

@stop