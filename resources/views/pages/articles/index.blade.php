@extends('layouts.app')

@section('app_content')

    <?php $items = [
        0 => (object)[
            'id' => 1,
            'title' => 'On-Site Health Clinic vs. On-Site Corporate Spa: What',
            'url' => '1',
            'image' => 'articles_1.jpg',
            'desc' => 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.',
            'date' => '2019-05-19 11:58:02'
        ],
        1 => (object)[
            'id' => 1,
            'title' => 'Боди — по своей сути, является эротическим массажем и разновидностью тайской методики. По своей сути, является эротическим массажем и разновидностью тайской методики',
            'url' => '1',
            'image' => 'articles_1.jpg',
            'desc' => 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks. ',
            'date' => '2019-05-19 11:58:02'
        ],
        2 => (object)[
            'id' => 1,
            'title' => 'Экспресс боди',
            'url' => '1',
            'image' => 'articles_1.jpg',
            'desc' => 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks. ',
            'date' => '2019-05-19 11:58:02'
        ]
    ] ?>

    <div class="page_articles page_padding">
        <div class="contain">
            <div class="main_title">
                <div class="text">Cтатий</div>
            </div>
            <div class="block">
                @foreach($items as $item)
                    <a href="/articles/{{ $item->url }}" class="bn">
                        <div class="image" style="background-image: url({{ issetImg($item->image) }})"></div>
                        <div class="texts">
                            <time>{{ getDateShort($item->date) }}</time>
                            <h2>{{ str_limit($item->title, 90) }}</h2>
                            <div class="text">{{ $item->desc }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@stop