@extends('layouts.app')

@section('app_content')

    <?php
    $basic_images = [
        0 => (object)[
            'id' => 1,
            'image' => 'basic_1.jpg',
        ],
        1 => (object)[
            'id' => 2,
            'image' => 'basic_2.jpg',
        ],
        2 => (object)[
            'id' => 3,
            'image' => 'basic_3.jpg',
        ]
    ];
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
    ];
    ?>

    <div class="page_main">
        <div class="basic swiper-container">
            <div class="swiper-wrapper">
                @foreach($basic_images as $image)
                    <div class="swiper-slide" style="background-image: url('/temp/{{ $image->image }}')"></div>
                @endforeach
            </div>
            <div class="contents">
                <div class="header">
                    <div class="company">LIDER</div>
                    <h1>Боди массаж в Алматы</h1>
                </div>
                <div class="address">
                    <p>Боди — по своей сути, является эротическим массажем и разновидностью тайской методики</p>
                    <p>
                        <a href="tel:55" class="phone">+7 705 454 88 47</a>
                        <a href="tel:55" class="phone">+7 771 847 88 04</a>
                    </p>
                    <div class="soc">
                        <a href="#" class="bn"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="bn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bn"><i class="fab fa-vk"></i></a>
                        <a href="#" class="bn"><i class="fab fa-whatsapp-square"></i></a>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>
        </div>
        <div class="about">
            <div class="main_title">
                <h2 class="text">Массажный салон Алматы</h2>
            </div>
            <div class="block">
                <p>Welcome to Pleasure, home of the most passionate talent in the area. We invite you to explore our exceptional beauty services and learn more about who we are. For your convenience, we have two locations — Edgewood Station and Lindale Mall. We look forward to elevating your beauty to a new level. </p>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fb4XPUolXek" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <ul class="ul_vantage">
                    <li>
                        <i class="far fa-heart"></i>
                        <span>У нас уютная атмосфера раслабления</span>
                    </li>
                    <li>
                        <i class="fas fa-house-damage"></i>
                        <span>Дом с тематическим интерьером</span>
                    </li>
                    <li>
                        <i class="far fa-eye"></i>
                        <span>Сохроняем вашу конфиденциальность посещений</span>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section_gallary">
            <div class="main_title">
                <div class="text">Наши мастера</div>
                <small>Общие фото наших девушек</small>
            </div>
            <div class="contain">
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
        </section>
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
                <small>Здесь показана только часть услуг. Узнайте о всех услуг нажав сюда</small>
                <a href="#" class="all_services"><span>Узнать все услуги</span></a>
            </div>
        </section>
    </div>

@stop