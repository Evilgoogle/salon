require('./inputmask');
require('overlayscrollbars');
const Swal = require('sweetalert2');
var Swiper = require('swiper/dist/js/swiper');

// Ширина и высота браузера клиента
$clientWidht = document.documentElement.clientWidth;
$clientHeight = document.documentElement.clientHeight;

// WOW JS
var WOW = require('wow.js');
new WOW().init();
//

// Parallax js
const Parallax = require('parallax-js');

$('input.phone').inputmask("+7 (999) 999 9999");

/* Прослушка ориентаций экрана */
/*var mql = window.matchMedia("(orientation: portrait)");
mql.addListener(function(m) {
    window.location = location.pathname;
});*/

$(document).ready(function () {

    $('.section_services .block .bn .desc').overlayScrollbars({});
    $('.page_articles .block .bn .text').overlayScrollbars({});

    // Main Swiper
    var swiper = new Swiper('.basic', {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        effect: 'fade',
        speed: 900,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Gallary
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    galleryThumbs.on('slideChange', function (e) {
        console.log(e);
    });

    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });

    // Map
    $('.js_map').click(function () {
        $('.map').addClass('active');
    });
    $('.js_close').click(function () {
        $('.map').removeClass('active');
    });

    var lat = $('#map').data('lat');
    var lng = $('#map').data('lng');
    var myLatLng = {lat: lat, lng: lng};

    if(/contacts/i.test(location.href)) {
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [myLatLng.lat, myLatLng.lng],
                zoom: 15
            });

            myPlacemark_1 = new ymaps.Placemark([myLatLng.lat, myLatLng.lng], {
                hintContent: 'Asken',
                balloonContent: 'Asken company'
            }, {
                iconLayout: 'default#image',
                iconImageHref: '../images/map-marker.png',
                iconImageSize: [41, 55],
                iconImageOffset: [-20, -50]
            });

            myMap.geoObjects.add(myPlacemark_1);
        }
    }

    // Modal
    $('.js_order').click(function() {

        $('#modal_reviews .modal').addClass('modal_active');
        $('#overlay').addClass('active');
    });
    $('.js_modal_cose').click(function () {

        $('.modal_block .flipper').removeClass('success');
        $('#modal_reviews .modal').removeClass('modal_active');
        $('#overlay').removeClass('active');
    });
    $('#overlay').click(function () {

        $('#modal_reviews .modal').removeClass('modal_active');
        $('#overlay').removeClass('active');
    });
    //
    var requestForm_reviews = $("#js_form_reviews");
    requestForm_reviews.submit(function(e) {

        e.preventDefault();
        var loader = $('.modal_block .button_review');

        // проверка формы
        var ajax_init_re = true;
        var name = $('#modal_reviews [name="name"]').val();
        var email = $('#modal_reviews [name="email"]').val();
        var phone = $('#modal_reviews [name="phone"]').val();
        var text = $('#modal_reviews [name="text"]').val();

        if(name == '') {
            ajax_init_re = false;
            Swal.fire({
                title: 'Ошибка!',
                html: 'Имя не заполнена',
                type: 'error',
                confirmButtonText: 'Закрыть'
            });
        }
        if(email == '') {
            ajax_init_re = false;
            Swal.fire({
                title: 'Ошибка!',
                html: 'Почта не заполнен',
                type: 'error',
                confirmButtonText: 'Закрыть'
            });
        }
        if(phone == '') {
            ajax_init_re = false;
            Swal.fire({
                title: 'Ошибка!',
                html: 'Телефон не заполнен',
                type: 'error',
                confirmButtonText: 'Закрыть'
            });
        }

        if(ajax_init_re) {
            requestForm_reviews = $(this);
            var formData_re = requestForm_reviews.serialize();
            $.ajax({
                url: '/requests-k',
                type: 'POST',
                data: formData_re,
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                // выполнить до отправки запроса
                beforeSend: function() {
                    loader.attr('disabled', '');
                    loader.html('<span class="loading_buy"></span>');
                },
                success: function(data){

                    if(data == 'ok') {
                        $('.modal_block .flipper').addClass('success');
                    }
                    loader.removeAttr('disabled')
                    loader.html('<span>Написать</span>');
                },
                error: function (data) {
                    if(data.status == '422') {
                        console.log(data);
                        var alert = JSON.parse(data.responseText)
                        var errors = [];
                        for(var a in alert) {
                            errors.push(alert[a][0]);
                        }

                        loader.removeAttr('disabled')
                        loader.html('<span>Написать</span>');

                        Swal.fire({
                            title: 'Ошибка!',
                            html: errors.join('<br>'),
                            type: 'error',
                            confirmButtonText: 'Закрыть'
                        })
                    }
                }
            });
        }
    });

});