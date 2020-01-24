@extends('layouts.app')

@section('app_content')

    <div class="page_showartiles page_padding">
        <div class="contain">
            <div class="main_title">
                <h1 class="text wow anm_fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.5s">{{ $item->title }}</h1>
            </div>
            <div class="editor wow anm_fadeInTop" data-wow-duration="1.2s" data-wow-delay="0.5s">{!! $item->text !!}</div>
        </div>
    </div>

@stop