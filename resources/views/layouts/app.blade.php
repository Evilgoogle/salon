<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <?php
    if (isset($seo_new)) $seo = $seo_new;
    ?>
    <title>{{ isset($seo) && !empty($seo->title) ? $seo->title : config('app.name') }}</title>

    <meta name="apple-mobile-web-app-title" content="{{ $seo->title ?? config('app.name') }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="author" content="FreeLife">
    <meta name="robots" content="index, follow">

    <!-- WebSite CSS -->
    <link href="{{ asset('libs/animate.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/touch-icon-ipad-retina.png">
    <link rel="canonical" href="{{ strtolower(url()->current()) }}">
</head>
<body>

<div class="preloader preloader_active" style="height: 100vh; background-color: #2e354f"><span></span></div>
<header>
    <div class="header_block">
        <div class="contain">
            <a href="/" class="logo">LIDER</a>
            <button type="button" class="js_order"><span>Оставить заявку</span></button>
            <button class="mobile_menu"></button>
        </div>
    </div>
    <nav>
        <div class="mobile_logo">
            <a href="/" class="logo">LIDER</a>
            <button class="menu_close"></button>
        </div>
        <ul>
            <li><a href="/" class="active"><span>Главная</span></a></li>
            <li><a href="/services"><span>Виды услуг</span></a></li>
            <li><a href="/articles"><span>Статьи</span></a></li>
            <li><a href="/foto-gallary"><span>Фото девушек</span></a></li>
        </ul>
        <button type="button" class="js_order"><span>Оставить заявку</span></button>
    </nav>
</header>

<main id="main_site">
    @yield('app_content')
</main>

<footer>
    <div class="main_title wow anm_fadeInTop" data-wow-duration="1.1s" data-wow-delay="0.5s">
        <div class="text">Контакты</div>
    </div>
    <div class="contain">
        <div class="left">
            <div class="block">
                <strong class="wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.7s">Работаем круглосуточно 24/7</strong>
                <p class="wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <a href="tel:55" class="phone">+7 705 454 88 47</a>
                    <a href="tel:55" class="phone">+7 771 847 88 04</a>
                </p>
                <div class="soc wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <a href="#" class="bn"><i class="fas fa-envelope"></i></a>
                    <a href="#" class="bn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="bn"><i class="fab fa-vk"></i></a>
                    <a href="#" class="bn"><i class="fab fa-whatsapp-square"></i></a>
                </div>
                <button type="button" class="js_order wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s"><span>Оставить заявку</span></button>
            </div>
        </div>
        <div class="right">
            <address>Алматы, ул. Сагадат<br> Нурмагамбетова, 426</address>
            <div id="map"></div>
        </div>
    </div>
</footer>

<div id="modal_reviews" class="modal_block" style="display: none">
    <div class="modal">
        <div class="flipper">
            <div class="front">
                <form id="js_form_reviews">
                    <input type="hidden" name="good_id" class="js_good_id_review">
                    <button type="button" class="js_modal_cose"></button>
                    <div class="flex">
                        <label class="f">
                            <small>Ваше имя*</small>
                            <input type="text" name="name">
                        </label>
                        <label class="f">
                            <small>Ваша номер*</small>
                            <input type="text" class="phone" name="phone">
                        </label>
                    </div>
                    <label>
                        <small>Ваша почта*</small>
                        <input type="text" name="email">
                    </label>
                    <label>
                        <small>Комментарий</small>
                        <textarea name="text"></textarea>
                    </label>
                    <button type="submit" class="button button_review"><span>Написать</span></button>
                </form>
            </div>
            <div class="back">
                <button class="js_modal_cose"></button>
                <div class="block">
                    <div class="icon"></div>
                    <div class="title">Спасибо</div>
                    <div class="desc">Ваша заявка принята. Мы свяжемся с вами в течений дня!</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay" id="overlay"></div>

<!-- FontAwesome -->
<link href="{{ mix('css/fontawesome.css') }}" rel="stylesheet">

<!-- WebSite JS -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>

{{-- Yandex map--}}
<script src="https://api-maps.yandex.ru/2.1/?apikey=5ac63499-6dcf-4f32-a034-5aea9dda69a2&lang=ru_RU" type="text/javascript"></script>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
