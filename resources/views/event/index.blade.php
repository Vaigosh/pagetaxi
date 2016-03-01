@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <div class="breadcrumbs-v1">
        <div class="container">
            <span>Такси 24</span>
            <h1>Мероприятия</h1>
        </div>
    </div>
    <div class="container content-md">
        <!-- News v3 -->
        @foreach($event_block as $event)
            <div class="row margin-bottom-20">
                <div class="col-sm-5 sm-margin-bottom-20">
                    <img class="img-responsive" src="{{ $event->img_path }}" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="news-v3">
                        <ul class="list-inline posted-info">
                            <li>Добавил(а):</li>
                            <li>Бешига Любовь</li>
                            <li>{{ $event->published_at }}</li>
                        </ul>
                        <h2><a href="/event/{{ $event->id }}">{{ $event->title }}</a></h2>
                        <p>{{ $event->text }}</p>
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

        <!-- News v3 -->
        <div class="row margin-bottom-20">
            <div class="col-sm-5 sm-margin-bottom-20">
                <div class="carousel slide" data-ride="carousel" id="blog-carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#blog-carousel" data-slide-to="0" class="rounded-x"></li>
                        <li data-target="#blog-carousel" data-slide-to="1" class="rounded-x active"></li>
                        <li data-target="#blog-carousel" data-slide-to="2" class="rounded-x"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <img src="assets/img/main/img19.jpg" alt="">
                        </div>
                        <div class="item active">
                            <img src="assets/img/main/img3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/main/img24.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="news-v3">
                    <ul class="list-inline posted-info">
                        <li>By Luke Etheridge</li>
                        <li>In <a href="#">Design</a></li>
                        <li>Posted January 24, 2015</li>
                    </ul>
                    <h2><a href="#">Amazing post “IMAGE-SLIDER”</a></h2>
                    <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
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
        <!-- End News v3 -->

        <div class="clearfix margin-bottom-20"><hr></div>

        <!-- News v3 -->
        <div class="row margin-bottom-20">
            <div class="col-sm-5 sm-margin-bottom-20">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/93094247?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="news-v3">
                    <ul class="list-inline posted-info">
                        <li>By Alexander Jenni</li>
                        <li>In <a href="#">Design</a></li>
                        <li>Posted January 24, 2015</li>
                    </ul>
                    <h2><a href="#">Awesome post “VIDEO”</a></h2>
                    <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
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
        <!-- End News v3 -->

        <div class="clearfix margin-bottom-20"><hr></div>

        <!-- News v3 -->
        <div class="row margin-bottom-20">
            <div class="col-sm-5 sm-margin-bottom-20">
                <img class="img-responsive" src="assets/img/main/img18.jpg" alt="">
            </div>
            <div class="col-sm-7">
                <div class="news-v3">
                    <ul class="list-inline posted-info">
                        <li>By Luke Etheridge</li>
                        <li>In <a href="#">Design</a></li>
                        <li>Posted January 24, 2015</li>
                    </ul>
                    <h2><a href="#">Wonderful post “IMAGE”</a></h2>
                    <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
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


    <!-- Contact Section -->
    <section id="contact" class="contacts-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Наши контакты</h2>
                <p>Вы всегда можете связаться с нами</p>
            </div>

            <div class="row contacts-in">
                <div class="col-md-6 md-margin-bottom-40">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home"></i> ул. Богдана-Хмельницкого, дом. 10, корпус 1</li>
                        <li><i class="fa fa-phone"></i> 8(512) 242423</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:eis-reklama@mail.ru">eis-reklama@mail.ru</a></li>
                        <li><i class="fa fa-globe"></i> <a href="http://242424.рф">242424.рф</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
                        <fieldset>
                            <label>Имя</label>
                            <div class="row">
                                <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label>Email <span class="color-red">*</span></label>
                            <div class="row">
                                <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label>Сообщение</label>
                            <div class="row">
                                <div class="col-md-11 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <p><button type="submit" class="btn-u btn-brd btn-brd-hover btn-u-dark">Отправить сообщение</button></p>
                        </fieldset>

                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>
                            <p>Ваше сообщение успешно отправлено!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="copyright-section">
            <p>2016 &copy; Такси 24. All Rights Reserved.</a></p>
            <ul class="social-icons">
                <li><a href="#" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
                <li><a href="#" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="social_googleplus rounded-x"></a></li>
                <li><a href="#" data-original-title="Pinterest" class="social_pintrest rounded-x"></a></li>
                <li><a href="#" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
            </ul>
            <span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span>
        </div>
    </section>
    <!-- End Contact Section -->

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