@extends('layout.main')
@section('content')

    <!-- portfolio -->
      <section class="mil-portfolio-slider-frame mil-p-0-120">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="1" data-value-2="2" style="top: -60px; right: -4px;"></div>
        </div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-9">
                    <div class="swiper-container mil-portfolio-slider mil-up">
                        <div class="swiper-wrapper">
                            @if (isset($portfolio))
                            @foreach ($portfolio as $data)
                            <div class="swiper-slide">

                                <div class="mil-portfolio-item mil-slider-item" data-swiper-parallax="-30">
                                    <div class="mil-cover-frame mil-drag">
                                        <div class="mil-cover" data-swiper-parallax-scale="1.3">
                                            <img src="{{ Voyager::image($data->f_image) }}" alt="cover">
                                        </div>
                                    </div>
                                    <div class="mil-descr" data-swiper-parallax-x="104%" data-swiper-parallax-opacity="0">
                                        <div class="mil-descr-text" data-swiper-parallax-y="100%" data-swiper-parallax-opacity="0">
                                            <div class="mil-labels mil-mb-15">
                                                <div class="mil-label mil-upper mil-accent">{{ $data->category->name }}</div>
                                                <div class="mil-label mil-upper">{{ date('Y-m-d', strtotime($data->created_at)) }}</div>
                                            </div>
                                            <h5>{{ $data->name }}</h5>
                                        </div>
                                        <div data-swiper-parallax-y="120" data-swiper-parallax-opacity="0">
                                            <a href="portfolio/{{ $data->id }}" class="mil-button mil-arrow-place">
                                                <span>Дэлгэрэнгүй</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                    @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mil-relative">
                    <div class="mil-portfolio-nav">
                        <div class="mil-portfolio-btns-frame">
                            <div class="swiper-portfolio-pagination"></div>
                            <div class="mil-slider-nav">
                                <div class="mil-slider-arrow mil-prev mil-portfolio-prev mil-arrow-place"></div>
                                <div class="mil-slider-arrow mil-portfolio-next mil-arrow-place"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- portfolio end -->
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
