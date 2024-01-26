@extends('layout.main')
@section('metaShare')
<meta property="og:url"            content="http://www.slash.mn/blog/{{ $data->slug }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"  name="title"       content="{{ $data->seo_title }}" />
<meta property="og:description" name="description"   content="{{ $data->meta_description }}" />
<meta property="og:keywords" name="keywords"   content="{{ $data->meta_keywords }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->image ) }}" />
<meta property="og:title" content="{{ $data->seo_title }}">
<meta property="og:description" content="{{ $data->meta_keywords }}">
<meta property="og:image" content="{{ Voyager::image( $data->image ) }}">
<meta property="og:url" content="http://www.slash.mn/blog/{{ $data->slug }} ">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $data->seo_title }}">
<meta name="twitter:description" content="{{ $data->meta_keywords }}">
<meta name="twitter:image" content="{{ Voyager::image( $data->image ) }}">
@stop

@section('content')

    <!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-banner-content mil-center mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-center mil-mb-60">
                    <li><a href="/">Нүүр</a></li>
                    <li><a href="/blog">Мэдээлэл</a></li>
                </ul>
                <h2>{{ $data->title }}</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- publication -->
    <section id="blog">
        <div class="container mil-p-120-90">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <div class="mil-image-frame mil-horizontal mil-up" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <img src="{{ Voyager::image( $data->image ) }}" alt="{{ $data->title }}" class="mil-scale" data-value-1=".90" data-value-2="1.15" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(1.0042, 1.0042);">
                    </div>
                    <div class="mil-info mil-up mil-mb-90" style="translate: none; rotate: none; scale: none; transform: translate(0px, 40px) scale(0.98, 0.98); opacity: 0;">
                        <div>Ангилал: &nbsp;<span class="mil-dark">{{ $data->category->name }}</span></div>
                        <div>Огноо: &nbsp;<span class="mil-dark">{{ date('Y-m-d', strtotime($data->created_at)) }}</span></div>
                        <div>Нийтэлсэн: &nbsp;<span class="mil-dark">Slash.mn</span></div>
                    </div>

                </div>


                <div class="col-lg-8">

                    <p class="mil-text-xl mil-dark mil-up mil-mb-60" style="translate: none; rotate: none; scale: none; transform: translate(0px, 40px) scale(0.98, 0.98); opacity: 0;">{{ $data->excerpt}}</p>


                    <p class="mil-up mil-mb-60" style="translate: none; rotate: none; scale: none; transform: translate(0px, 40px) scale(0.98, 0.98); opacity: 0;">{!! $data->body !!}</p>



                </div>
            </div>
        </div>
    </section>
    <!-- publication end -->

<!-- similar -->
<section class="mil-soft-bg">
    <div class="container mil-p-120-60">
        <div class="row align-items-center mil-mb-30">
            <div class="col-lg-6 mil-mb-30">
                <h3 class="mil-up">Сүүлд нийтэлсэн :</h3>
            </div>
            <div class="col-lg-6 mil-mb-30">
                <div class="mil-adaptive-right mil-up">
                    <a href="/blog" class="mil-link mil-dark mil-arrow-place">
                        <span>Дэлгэрэнгүй</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            @if(isset($recentnews))
                @foreach($recentnews as $data)
            <div class="col-lg-4">

                <a href="/blog/{{$data->slug}}" class="mil-blog-card mil-mb-60">
                    <div class="mil-cover-frame mil-up">
                        <img src="{{Voyager::image($data->image)}}" alt="{{$data->title}}">
                    </div>
                    <div class="mil-post-descr">
                        <div class="mil-labels mil-up mil-mb-30">
                            <div class="mil-label mil-upper mil-accent">{{$data->category->name}}</div>
                            <div class="mil-label mil-upper">{{ date('Y-m-d', strtotime($data->created_at)) }}</div>
                        </div>
                        <h4 class="mil-up mil-mb-30">{{$data->title}}</h4>
                        <p class="mil-post-text mil-up mil-mb-30">{{$data->excerpt}}</p>
                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                            <span>Дэлгэрэнгүй</span>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
                @endif

        </div>
    </div>
</section>
<section class="mil-soft-bg">
    <div class="container mil-p-120-120">
        <div class="row">
            <div class="col-lg-10">

                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">И-мэйлээ бүртгүүлээд бидэнтэй нэгдээрэй.</span>

            </div>
        </div>
        <div class="mil-center">
            <h4 class="mil-up mil-mb-60">И-мэйлээ бүртгүүлээд дижитал маркетинг, вэбсайтын талаар зөвлөгөө болон хямдралын мэдээллийг урьдчилан аваарай.</h4>
            <div class="row justify-content-center mil-up">
                <div class="col-lg-4">
                    @if(Session::has('success'))

                    <div class="alert alert-success">

                        {{Session::get('success')}}

                    </div>

                @endif
                    <form class="mil-subscribe-form mil-subscribe-form-2 mil-up" action="{{ route('subscribe.store') }}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="И-мэйл хаягаа бичнэ үү" required>
                        <button type="submit" class="mil-button mil-icon-button-sm mil-arrow-place"></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- similar end -->





@stop
