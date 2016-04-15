@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@stop

@section('content')
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
                            <source src="{{ asset('assets/video/v1.mp4') }}" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"></source>
                        </video>
                       <!--  <img src="{{ asset('assets/img/bg/bg11.jpg') }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->
                        <!--  asset('assets/img/sliders/revolution/bg1.jpg')  -->
                            <!-- LAYERS -->
                            <div class="tp-caption rs-caption-1 sft start"
                                data-x="center"
                                data-hoffset="0"
                                data-y="100"
                                data-speed="800"
                                data-start="2000"
                                data-easing="Back.easeInOut"
                                data-endspeed="300"
                                style="background-color:rgba(0,50,80,0.5);text-shadow: 1px 1px 2px black, 0 0 1em gray;">
                                ТАКСИ 24
                            </div>

                            <!-- LAYER -->
                            <div class="tp-caption rs-caption-2 sft"
                                data-x="center"
                                data-hoffset="0"
                                data-y="200"
                                data-speed="1000"
                                data-start="3000"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <h2 style="font-weight:800; color:#fff; text-shadow: 1px 1px 2px black, 0 0 1em gray;">Лучший способ попасть в пункт назначения.</h2><br>
                            </div>

                            <!-- LAYER -->
                            <div class="tp-caption rs-caption-3 sft"
                                data-x="center"
                                data-hoffset="0"
                                data-y="360"
                                data-speed="800"
                                data-start="3500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <div style="background-color:rgba(0,80,80,0.5); padding: 10px 2px">
                                    <span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Приложение</a></span>
                                    <span class="page-scroll"><a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-light">Мероприятия</a></span>
                                </div>
                            </div>
                            <!-- LAYER -->
                            <div class="tp-caption rs-caption-4 sft"
                                data-x="center"
                                data-hoffset="0"
                                data-y="480"
                                data-speed="800"
                                data-start="3500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <span class="page-scroll"><a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon="" href="#about"></a></span>
                            </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                <div class="tp-dottedoverlay twoxtwo"></div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- About Section -->
    {!! Widget::AboutBlock() !!}
    <!-- End About Section -->

    <!-- Services Section -->
    {!! Widget::ServicesBlock() !!}
    <!-- End Services Section -->

    <!-- News Section -->
    {!! Widget::RecentNews() !!}
    <!-- End News Section -->

    <!-- Event Section -->
    {!! Widget::eventBlock() !!}
    <!-- End Event Section -->

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