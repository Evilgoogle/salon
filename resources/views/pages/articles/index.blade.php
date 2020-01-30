@extends('layouts.app')

@section('app_content')

    <div class="page_articles page_padding">
        <div class="contain">
            <div class="main_title">
                <div class="text wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">Cтатий</div>
            </div>
            <div class="block">
                @foreach($items as $item)
                    <a href="/articles/{{ $item->url }}" class="bn">
                        <div class="image" style="background-image: url({{ issetImg($item->image) }})"></div>
                        <div class="texts">
                            <time>{{ getDateShort($item->date) }}</time>
                            <h2 class="wow anm_fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">{{ str_limit($item->title, 90) }}</h2>
                            <div class="text wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.7s">{{ $item->desc }}</div>
                        </div>
                        <div class="mobile_button"><span>Подробнее</span></div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@stop