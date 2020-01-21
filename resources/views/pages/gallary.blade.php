@extends('layouts.app')

@section('app_content')

    <?php
    $gal = [
        0 => (object)[
            'id' => 1,
            'image' => 'gal_1.jpg',
        ],
        1 => (object)[
            'id' => 2,
            'image' => 'gal_2.jpg',
        ],
        2 => (object)[
            'id' => 3,
            'image' => 'gal_3.jpg',
        ],
        3 => (object)[
            'id' => 4,
            'image' => 'gal_4.jpg',
        ],
        4 => (object)[
            'id' => 4,
            'image' => 'gal_2.jpg',
        ],
    ];

    $womans = [
        0 => (object)[
            'id' => 1,
            'name' => 'Катрин',
            'image' => 'gal_2.jpg',
        ],
        1 => (object)[
            'id' => 2,
            'name' => 'Анна',
            'image' => 'gal_2.jpg',
        ],
        2 => (object)[
            'id' => 3,
            'name' => 'Мая',
            'image' => 'gal_2.jpg',
        ],
        3 => (object)[
            'id' => 4,
            'name' => 'Айсулу',
            'image' => 'gal_2.jpg',
        ],
        4 => (object)[
            'id' => 5,
            'name' => 'Боди',
            'image' => 'gal_2.jpg',
        ],
        5 => (object)[
            'id' => 6,
            'name' => 'Анджела',
            'image' => 'gal_2.jpg',
        ],
    ]?>

    <div class="page_gallary page_padding">
        <div class="contain">
            <div class="section_gallary">
                <div class="main_title">
                    <div class="text wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.5s">Общие фото</div>
                    <small class="wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">Общие фото</small>
                </div>
                <div class="contain wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.5s">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach($gal as $item)
                                <div class="swiper-slide" style="background-image:url('/temp/{{ $item->image }}')"></div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach($gal as $item)
                                <div class="swiper-slide" style="background-image:url('/temp/{{ $item->image }}')"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="womans">
                <div class="main_title">
                    <div class="text">Девушки</div>
                </div>
                <div class="blocks">
                    <?php $i = 0?>
                    @foreach($womans as $w)
                        <?php $i++?>
                        <div class="bn wow anm_fadeInDown" data-wow-duration="1.4s" data-wow-delay="{{ $i/4 }}s">
                            <div class="box">
                                <div class="title"><span>{{ $w->name }}</span></div>
                                <div class="image" style="background-image: url({{ issetImg($w->image) }})"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop