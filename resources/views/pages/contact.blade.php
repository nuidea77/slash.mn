@extends('layout.main')
@section('content')
    <div id="swupMain" class="mil-main-transition">

        <!-- banner -->
        <div class="mil-inner-banner mil-p-0-120">
            <div class="mil-banner-content mil-center mil-up">
                <div class="container">
                    <ul class="mil-breadcrumbs mil-center mil-mb-60">
                        <li><a href="/">Нүүр</a></li>
                        <li><a href="/contact">Холбоо барих</a></li>
                    </ul>
                    <h1 class="mil-mb-60">Холбоо барих</h1>
                    <a href="#contact" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                        <span>Үнийн санал авах</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- map -->
        <div class="mil-map-frame mil-up">
            <div class="mil-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42785.43154367223!2d106.88469882025936!3d47.9153062320232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96933d54ae2a7f%3A0x24d557e3cb48eace!2sSlash%20Digital%20Agency!5e0!3m2!1sen!2smn!4v1705485597258!5m2!1sen!2smn" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- map end -->

        <!-- contact form -->
        <section id="contact">
            <div class="container mil-p-120-90">
                <h3 class="mil-center mil-up mil-mb-120">Үнийн санал авах форм </h3>
                @if(Session::has('success'))

                <div class="alert alert-success">

                    {{Session::get('success')}}

                </div>

            @endif
                <form class="row align-items-center"  action="{{ route('contact.us.store') }}" method="post">
                    @csrf
                    <div class="col-lg-6 mil-up">
                        <input type="text" placeholder="Нэр" name="name" required>
                    </div>
                    <div class="col-lg-6 mil-up">
                        <input type="text" placeholder="Албан тушаал" name="position" required>
                    </div>
                    <div class="col-lg-6 mil-up">
                        <input type="email" placeholder="И-мэйл" name="email" required>
                    </div>
                    <div class="col-lg-6 mil-up">
                        <input type="number" placeholder="Утасны дугаар" name="number" required>
                    </div>
                    <div class="col-lg-12 mil-up">
                        <select class="form-control form-control-lg" name="service" id="service" required>
                            <option value="null">Сонирхож буй үйлчилгээ</option>
                            <option value="web">Вэбсайт хөгжүүлэх үйлчилгээ</option>
                            <option value="digital">Дижитал маркетингийн цогц үйлчилгээ</option>
                            <option value="chatbot">Чатбот хөгжүүлэх үйлчилгээ</option>
                            <option value="seo">Хайлтын системийн оновчлол</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mil-up">
                        <textarea placeholder="Төслийн талаар дэлгэрэнгүй мэдээлэл бичнэ үү" name="comment" required></textarea>
                    </div>
                    <div class="col-lg-8">
                        <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> Бид таны хувийн мэдээллийг гуравдагч этгээдэд задруулахгүй гэдгээ амлаж байна.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="mil-adaptive-right mil-up mil-mb-30">
                            <button type="submit" class="mil-button mil-arrow-place">
                                <span>Илгээх</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <!-- contact form end -->



    </div>
@stop
