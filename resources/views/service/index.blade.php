@extends('layout.main')
@section('content')
<!-- banner -->
<div class="mil-dark-bg">
    <div class="mil-inner-banner">
        <div class="mi-invert-fix">
            <div class="mil-banner-content mil-up">
                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-scale" data-value-1="6" data-value-2="1.4"></div>
                </div>
                <div class="container">
                    <ul class="mil-breadcrumbs mil-light mil-mb-60">
                        <li><a href="/">Нүүр</a></li>
                        <li><a href="/services">Үйлчилгээ</a></li>
                    </ul>
                    <h1 class="mil-muted mil-mb-60">Бидний <span class="mil-thin">санал</span><br>болгох <span class="mil-thin">үйлчилгээ</span></h1>

                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- services -->
    <section id="services">
        <div class="mi-invert-fix">
            <div class="container mil-p-120-60">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="mil-lines-place mil-light"></div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            @if(isset($service))
            @foreach($service as $data)
                            <div class="col-md-6 col-lg-6">
                                <a href="/service/{{ $data->slug }}" class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">{{ $data->name }}</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">{{ $data->description}}</p>

                                    <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Дэлгэрэнгүй</span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- services end -->

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
