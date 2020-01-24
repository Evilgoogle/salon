@extends('layouts.app')

@section('app_content')

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
                                    <div class="insert" style="background-image: url('{{ issetImg($item->image) }}')"></div>
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