@extends('layout.main')
@section('content')
 <!-- banner -->
 <div class="mil-inner-banner mil-p-0-120">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Нүүр</a></li>
                <li><a href="/blog">Мэдээлэл</a></li>
            </ul>
            <h1 class="mil-mb-60">Танд хэрэгтэй <br> зөвлөгөө мэдээлэл</h1>
            <a href="#blog" class="mil-link mil-dark mil-arrow-place mil-down-arrow">

            </a>
        </div>
    </div>
</div>
<!-- banner end -->

     <!-- blog -->
     <section id="blog">
        <div class="container mil-p-120-120">
            <div class="row align-items-center mil-mb-30">
                <div class="col-lg-4 mil-mb-30">
                    <h3 class="mil-up">Ангилал:</h3>
                </div>
                <div class="col-lg-8 mil-mb-30">
                    <div class="mil-adaptive-right mil-up">

                        <ul class="mil-category-list">
                            @if(isset($category))
                            @foreach($category as $data)
                            <li><a href="/blog/category/{{$data->id}}" class="mil-active">{{$data->name}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($newslist))
                            @foreach($newslist as $data)
                <div class="col-lg-12">

                    <a href="/blog/{{$data->slug}}" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
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
                <div class="col-lg-12">
                    <div class="mil-pagination">
                        {{ $newslist->render() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- call to action -->
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
    <!-- call to action end -->

@stop
