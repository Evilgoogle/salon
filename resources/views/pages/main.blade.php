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
                    <div class="company wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="0.5s">LIDER</div>
                    <h1 class="wow anm_fadeInDown" data-wow-duration="1.1s" data-wow-delay="0.5s">Боди массаж в Алматы</h1>
                </div>
                <div class="address">
                    <p class="wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="0.7s">Боди — по своей сути, является эротическим массажем и разновидностью тайской методики</p>
                    <p class="wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="1s">
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
            <div class="main_title wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="0.5s">
                <h2 class="text">Массажный салон Алматы</h2>
            </div>
            <div class="block">
                <p class="wow anm_fadeInDown" data-wow-duration="1.1s" data-wow-delay="0.5s">Welcome to Pleasure, home of the most passionate talent in the area. We invite you to explore our exceptional beauty services and learn more about who we are. For your convenience, we have two locations — Edgewood Station and Lindale Mall. We look forward to elevating your beauty to a new level. </p>
                <div class="video wow anm_fadeInDown" data-wow-duration="1.1s" data-wow-delay="0.7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QZbuj3RJcjI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <ul class="ul_vantage">
                    <li class="wow anm_fadeInTop" data-wow-duration="1s" data-wow-delay="0.3s">
                        <i class="far fa-heart"></i>
                        <span>У нас уютная атмосфера раслабления</span>
                    </li>
                    <li class="wow anm_fadeInTop" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="fas fa-house-damage"></i>
                        <span>Дом с тематическим интерьером</span>
                    </li>
                    <li class="wow anm_fadeInTop" data-wow-duration="1s" data-wow-delay="0.5s">
                        <i class="far fa-eye"></i>
                        <span>Сохроняем вашу конфиденциальность посещений</span>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section_gallary">
            <div class="main_title wow anm_fadeInTop" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="text">Наши мастера</div>
                <small class="wow anm_fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Общие фото наших девушек</small>
            </div>
            <div class="contain wow anm_fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        @foreach($gal as $item)
                            <div class="swiper-slide" style="background-image:url('{{ issetImg($item->image) }}')"></div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        @foreach($gal as $item)
                            <div class="swiper-slide" style="background-image:url('{{ issetImg($item->image) }}')"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section_services">
            <div class="box">
                <div class="main_title wow anm_fadeInTop" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="text">Виды услуг предостаяляемый нами</div>
                </div>
                <div class="block">
                    <?php $i = 0?>
                    @foreach($services as $item)
                        <?php $i++?>
                        <div class="bn">
                            <div class="icon">
                                <div class="ico">{!! $item->icon !!}</div>
                                <div class="image">
                                    <div class="insert" style="background-image: url('{{ issetImg($item->image) }}')"></div>
                                </div>
                            </div>
                            <div class="texts wow anm_fadeInDown" data-wow-duration="1.4s" data-wow-delay="{{ $i/4 }}s">
                                <h3>{{ $item->title }}</h3>
                                <div id="doop{{ $i }}" class="desc">{{ $item->desc }}</div>
                                <div class="price"><span>{{ $item->price }} тг</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <small class="wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.5s">Здесь показана только часть услуг. Узнайте о всех услуг нажав сюда</small>
                <a href="/services" class="all_services"><span>Узнать все услуги</span></a>
            </div>
        </section>
        <section class="section_order">
            <div class="contain">
                <div class="left wow anm_fadeInLeft" data-wow-duration="1.2s" data-wow-delay="0.5s">
                    <div class="title">Хотите окунуться в омут наслаждения?</div>
                    <div class="mini">Проведите у нас свое время!</div>
                </div>
                <button class="js_order"><span>Оставьте заявку</span></button>
            </div>
        </section>
    </div>

@stop