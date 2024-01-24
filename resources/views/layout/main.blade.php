<!DOCTYPE html>
<html lang="mn">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5E4MDVSJ2W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5E4MDVSJ2W');
</script>
    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap-grid.css')}}">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fancybox.min.css')}}">
    <!-- ashley scss -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- page name -->
    <title>Slash creative agency</title>
    <meta name="keywords" content="Вэб хөгжүүлэгч, Вэб хөгжүүлэх үйлчилгээ, social marketing, digital marketing, сошиал маркетинг, дижитал маркетинг вэбсайт хөгжүүлэх үйлчилгээ, Веб хөгжүүлэгч, вэбсайт, вэб компани, веб компани,  хөгжүүлнэ, вэб хийдэг байгууллага, вэб сайт хийдэг байгууллага,">
    <meta name="description" content="Вэб хөгжүүлэгч, Вэб хөгжүүлэх үйлчилгээ, social marketing, digital marketing, сошиал маркетинг, дижитал маркетинг вэбсайт хөгжүүлэх үйлчилгээ, Веб хөгжүүлэгч, вэбсайт, вэб компани, веб компани,  хөгжүүлнэ, вэб хийдэг байгууллага, вэб сайт хийдэг байгууллага,">
    @yield('metaShare')
</head>

<body>

    <!-- wrapper -->
<div class="mil-wrapper" id="top">


        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">Дэлгэрэнгүй</div>
            <div class="mil-choose-text">Дэлгэрэнгүй</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        <div class="mil-preloader">
            <div class="mil-preloader-animation">
                <div class="mil-pos-abs mil-animation-1">
                    <p class="mil-h3 mil-muted mil-thin">Develop Your</p>
                    <p class="mil-h3 mil-muted">Slash</p>
                    <p class="mil-h3 mil-muted mil-thin">World</p>
                </div>
                <div class="mil-pos-abs mil-animation-2">
                    <div class="mil-reveal-frame">
                        <p class="mil-reveal-box"></p>
                        <p class="mil-h3 mil-muted mil-thin"><img src="{{asset('assets/img/white.png')}}" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->
        @include('layout.header')
        <div class="mil-content">
        <div id="swupMain" class="mil-main-transition" >
        @yield('content')
        @include('layout.footer')
    </div>
    </div>
</div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="{{asset('assets/js/plugins/jquery.min.js')}}"></script>
    <!-- swup js -->
    <script src="{{asset('assets/js/plugins/swup.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>
    <!-- fancybox js -->
    <script src="{{asset('assets/js/plugins/fancybox.min.js')}}"></script>
    <!-- gsap js -->
    <script src="{{asset('assets/js/plugins/gsap.min.js')}}"></script>
    <!-- scroll smoother -->
    <script src="{{asset('assets/js/plugins/smooth-scroll.js')}}"></script>
    <!-- scroll trigger js -->
    <script src="{{asset('assets/js/plugins/ScrollTrigger.min.js')}}"></script>
    <!-- scroll to js -->
    <script src="{{asset('assets/js/plugins/ScrollTo.min.js')}}"></script>
    <!-- ashley js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>


</html>
