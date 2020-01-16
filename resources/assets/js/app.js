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

    $('.js_modal_cose').click(function () {

        $('#modal_buy .modal').removeClass('modal_active');
        $('#modal_buy .modal .flipper').removeClass('success');

        $('#modal_reviews .modal').removeClass('modal_active');

        $('#overlay').removeClass('active');
    });
    $('#overlay').click(function () {

        $('#modal_buy .modal').removeClass('modal_active');
        $('#modal_buy .modal .flipper').removeClass('success');

        $('#modal_reviews .modal').removeClass('modal_active');

        $('#overlay').removeClass('active');
    });

    var request = $('#request');
    request.submit(function(e){
        e.preventDefault();
        var formData = request.serialize();
        $.ajax({
            url: '/request',
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
                if (data.status == 'ok') {
                    Swal.fire({
                        title: 'Спасибо',
                        html: 'Заявка принято. Ждите нашего звонка!',
                        type: 'success',
                        confirmButtonText: 'Закрыть'
                    });
                    $("input", request).val('');
                }
            },
            error: function (data) {
                var alert = data.responseJSON;
                var errors = [];
                for(var a in alert) {
                    errors.push(alert[a][0]);
                }
                Swal.fire({
                    title: 'Ошибка!',
                    html: errors.join('<br>'),
                    type: 'error',
                    confirmButtonText: 'Закрыть'
                });
            }
        });
    });

});