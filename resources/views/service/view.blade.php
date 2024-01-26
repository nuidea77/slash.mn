@extends('layout.main')
@section('metaShare')
<meta property="og:url"            content="https://slash.mn/service/{{ $data->slug }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"  name="title"       content="{{ $data->name }}" />
<meta property="og:description" name="description"   content="{{ $data->keywords }}" />
<meta property="og:keywords" name="keywords"   content="{{ $data->keywords }}" />
<meta property="og:title" content="{{ $data->name }}">
<meta property="og:description" content="{{ $data->keywords }}">
<meta property="og:image" content="{{asset('assets/img/slash.webp')}}">
<meta property="og:url" content="https://slash.mn/service/{{ $data->slug }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $data->name }}">
<meta name="twitter:description" content="{{ $data->keywords }}">
<meta name="twitter:image" content="{{asset('assets/img/slash.webp')}}">
@stop

@section('content')
<!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="mil-banner-content mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-mb-60">
                    <li><a href="/">Нүүр</a></li>
                    <li><a href="/services">Үйлчилгээ</a></li>
                    <li><a href="">{{ $data->name }}</a></li>
                </ul>
                <h1 class="mil-mb-60">{{ $data->name }}</h1>

            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- service -->
    <section id="service">
        <div class="container mil-p-120-90">
            <div class="row justify-content-between">
                <div class="col-lg-4 mil-relative mil-mb-90">

                    <p class="mil-up mil-mb-30">{{ $data->description }}</p>
                    <div class="mil-up">
                        <a href="/portfolios" class="mil-link mil-dark mil-arrow-place">
                            <span>Гүйцэтгэсэн ажлууд</span>
                        </a>
                    </div>

                </div>
                <div class="col-lg-6">

                    {!! $data->sub_service !!}

                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-12">

                    {!! $data->info !!}

                </div>
            </div>

        </div>
    </section>
    <!-- service end -->
 <!-- other services -->
 <section>
    <div class="container mil-p-120-90">
        <div class="row align-items-center mil-mb-30">
            <div class="col-lg-6 mil-mb-30">
                <h3 class="mil-up">Бусад үйлчилгээ</h3>
            </div>
            <div class="col-lg-6 mil-mb-30">
                <div class="mil-adaptive-right mil-up">
                    <a href="/services" class="mil-link mil-dark mil-arrow-place">
                        <span>Дэлгэрэнгүй</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            @if(isset($recentservice))
            @foreach($recentservice as $data)
            <div class="col-lg-4">

                <a href="/service/{{ $data->slug }}" class="mil-service-card-lg mil-other-card mil-more mil-mb-30">
                    <h4 class="mil-up mil-mb-30">{{ $data->name}}</h4>
                    <p class="mil-descr mil-up mil-mb-30">{{ $data->description}}</p>

                    <div class="mil-link mil-dark mil-arrow-place mil-up">
                        <span>Дэлгэрэнгүй</span>
                    </div>
                </a>

            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
<!-- other services end -->
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
