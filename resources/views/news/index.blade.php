@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@endsection

@section('content')
    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3 img-v3">
        <div class="container text-center">
            <p>Такси 24</p>
            <h1>{{ $page[0]->title or 'Новости' }}</h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{ $page[0]->title or 'Новости' }}</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/news">{{ $page[0]->title or 'Новости' }}</a></li>
            </ul>
        </div>
    </div>
    <div class="container content-md">
        <!-- News v3 -->
        @foreach($news as $sh_news)
            <div class="row margin-bottom-20">
                <div class="col-sm-5 sm-margin-bottom-20">
                    <img class="img-responsive" src="{{ $sh_news->img_path }}" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="news-v3">
                        <ul class="list-inline posted-info">
                            <li>Добавил(а):</li>
                            <li>Бешига Любовь</li>
                            <li>{{ $sh_news->published_at }}</li>
                        </ul>
                        <h2><a href="/news/{{ $sh_news->id }}">{{ $sh_news->title }}</a></h2>
                        <p>{{ $sh_news->text }}</p>
                        <ul class="post-shares">
                            <li>
                                <a href="#">
                                    <i class="rounded-x icon-speech"></i>
                                    <span>5</span>
                                </a>
                            </li>
                            <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                            <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/end row-->
        @endforeach
        <!-- End News v3 -->

        <div class="clearfix margin-bottom-20"><hr></div>

        <!-- Pager v3 -->
        <ul class="pager pager-v3 pager-md no-margin-bottom">
            <li class="previous"><a href="#">← Older</a></li>
            <li class="page-amount">1 of 7</li>
            <li class="next"><a href="#">Newer →</a></li>
        </ul>
        <!-- End Pager v3 -->
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/plugins/smoothScroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/plugins/counter/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <!-- JS Page Level-->
    <script src="{{ asset('assets/js/one.app.js') }}"></script>
    <script src="{{ asset('assets/js/forms/login.js') }}"></script>
    <script src="{{ asset('assets/js/forms/contact.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pace-loader.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/revolution-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            LoginForm.initLoginForm();
            ContactForm.initContactForm();
            OwlCarousel.initOwlCarousel();
            RevolutionSlider.initRSfullScreen();
        });
        $('.owl-carousel').owlCarousel({
            items:3,
            merge:true,
            loop:true,
            margin:10,
            video:true,
            lazyLoad:true,
            center:true,
            responsive:{
                480:{
                    items:2
                },
                600:{
                    items:4
                }
            }
        })
    </script>
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/plugins/respond.js') }}"></script>
        <script src="{{ asset('assets/plugins/html5shiv.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/placeholder-IE-fixes.js') }}"></script>
        <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
        <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js') }}"></script>
    <![endif]-->

@endsection