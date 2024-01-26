@extends('layout.main')
@section('metaShare')
<meta property="og:url"            content="https://slash.mn/portfolio/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"  name="title"       content="{{ $data->name }}" />
<meta property="og:description" name="description"   content="{{ $data->keywords }}" />
<meta property="og:keywords" name="keywords"   content="{{ $data->keywords }}" />
<meta property="og:image"         content="{{asset('assets/img/slash.webp')}}" />
<meta property="og:title" content="{{ $data->name }}">
<meta property="og:description" content="{{ $data->keywords }}">
<meta property="og:image" content="{{ Voyager::image( $data->image ) }}">
<meta property="og:url" content="https://slash.mn/portfolio/{{ $data->id }} ">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $data->name }}">
<meta name="twitter:description" content="{{ $data->keywords }}">
<meta name="twitter:image" content="{{asset('assets/img/slash.webp')}}">
@stop

@section('content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Нүүр</a></li>
                <li><a href="/portfolios">Гүйцэтгэсэн ажил</a></li>
                <li><a href="/portfolio/{{ $data->id }}">{{ $data->name }}</a></li>
            </ul>

        </div>
    </div>
</div>
<!-- banner end -->

<!-- project -->
<section id="project">
    <div class="container mil-p-120-120">
        <div class="swiper-container mil-1-slider mil-up">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="mil-image-frame mil-horizontal mil-drag">
                        <img src="{{ Voyager::image($data->f_image) }}" alt="{{ $data->name }}">

                    </div>

                </div>
                @foreach (json_decode($data->o_images) as $data->o_images)
                <div class="swiper-slide">

                    <div class="mil-image-frame mil-horizontal mil-drag">
                        <img src="{{ Voyager::image($data->o_images) }}" alt="{{ $data->name }}">

                    </div>

                </div>
                @endforeach


            </div>
        </div>
        <div class="mil-info mil-up">
            <div>Захиалагч: &nbsp;<span class="mil-dark">{{ $data->client}}</span></div>
            <div>Огноо: &nbsp;<span class="mil-dark">{{ date('Y-m-d', strtotime($data->created_at)) }}</span></div>
            <div>Ангилал: &nbsp;<span class="mil-dark">{{ $data->category->name}}</span></div>
        </div>
        <div class="row justify-content-between mil-p-120-90">
            <div class="col-lg-5">
                <h3 class="mil-up mil-mb-60">{{ $data->name }}</h3>
                <a data-no-swup href="https://{{ $data->url }}" target="_blank" class="mil-link mil-dark mil-up  mil-arrow-place">
                    <span>Дэлгэрэнгүй</span>

                </a>
            </div>
            <div class="col-lg-6">
                <p class="mil-up mil-mb-30">{{ $data->description}}</p>
            </div>
        </div>

    </div>
</section>
<!-- project end -->

    <!-- call to action -->
    <section class="mil-soft-bg">
        <div class="container mil-p-120-120">
            <div class="row">
                <div class="col-lg-10">

                    <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Бид таны бизнесийг дижитал орчинд хүчирхэгжүүлж,
                        бусдаас ялгарахад тань туслах болно.</span>

                </div>
            </div>
            <div class="mil-center">
                <h2 class="mil-up mil-mb-60">Бидэнтэй хамтарч ажиллахыг хүсвэл үнийн санал аваарай.</h2>
                <div class="mil-up"><a href="/contact" class="mil-button mil-arrow-place"><span>Үнийн санал авах</span></a></div>
            </div>
        </div>
    </section>
    <!-- call to action end -->
@stop
