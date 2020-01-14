@extends('layouts.app')

@section('app_content')

    <?php
    $services = [
        0 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_1.jpg',
            'title' => 'Экспресс боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
        1 => (object)[
            'id' => 1,
            'icon' => '<i class="fas fa-house-damage"></i>',
            'image' => 'gal_2.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
        2 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-eye"></i>',
            'image' => 'gal_3.jpg',
            'title' => 'Ветка сакуры',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
        3 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_4.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
        4 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-eye"></i>',
            'image' => 'gal_3.jpg',
            'title' => 'Ветка сакуры',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
        5 => (object)[
            'id' => 1,
            'icon' => '<i class="far fa-heart"></i>',
            'image' => 'gal_4.jpg',
            'title' => 'Стандарт боди',
            'desc' => 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!'
        ],
    ];
    ?>

    <div class="page_services">
        <div class="info_box"></div>
        <section class="section_services">
            <div class="box">
                <div class="main_title">
                    <div class="text">Виды услуг предостаяляемый нами</div>
                </div>
                <div class="block">
                    @foreach($services as $item)
                        <div class="bn">
                            <div class="icon">
                                <div class="ico">{!! $item->icon !!}</div>
                                <div class="image">
                                    <div class="insert" style="background-image: url('/temp/{{ $item->image }}')"></div>
                                </div>
                            </div>
                            <div class="texts">
                                <h3>{{ $item->title }}</h3>
                                <div class="desc">{{ $item->desc }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@stop