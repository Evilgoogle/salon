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

<header>
    <div class="header_block">
        <div class="contain">
            <a href="/" class="logo">LIDER</a>
            <button type="button" class="js_order"><span>Оставить заявку</span></button>
            <button class="mobile_menu"></button>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="#" class="active"><span>Главная</span></a></li>
            <li><a href="#"><span>Виды массажа</span></a></li>
            <li><a href="#"><span>Галлерия</span></a></li>
            <li><a href="#"><span>О нас</span></a></li>
            <li><a href="#"><span>Контакты</span></a></li>
        </ul>
    </nav>
</header>

<main id="main_site">
    @yield('app_content')
</main>

<footer>
    <div class="main_title">
        <div class="text">Контакты</div>
    </div>
    <div class="contain">
        <div class="left">
            <div class="block">
                <strong>Работаем круглосуточно 24/7</strong>
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
                <button type="button" class="js_order"><span>Оставить заявку</span></button>
            </div>
        </div>
        <div class="right">
            <address>Алматы, ул. Сагадат<br> Нурмагамбетова, 426</address>
            <div id="map"></div>
        </div>
    </div>
</footer>

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
