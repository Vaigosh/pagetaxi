@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

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
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                <div class="tp-dottedoverlay twoxtwo"></div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->
    <div class="clearfix"></div>
    <!--  About Section -->
    <section id="about" class="about-section section-first">
        <div class="block-v1">
            <div class="container">
                <div class="row content-boxes-v3">
                    <div class="col-md-4 md-margin-bottom-30">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-lightbulb-o"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Безопасность</h2>
                            <p>Забота о людях — прежде всего. Мы в равной степени заботимся как о наших клиентах, так и о наших водителях. Мы разработали правила поведения, чтобы все находящиеся в транспортном средстве имели одинаковое представление о стандартах уважительного, ответственного и вежливого поведения.</p>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-30">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-flask"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Вы оцениваете — мы делаем выводы</h2>
                            <p>Оцените вашего водителя и предоставьте анонимный отзыв о поездке. Эта информация поможет нам обеспечить наилучшее качество обслуживания.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-bolt"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Готовность в любом месте и в любое время</h2>
                            <p>Ежедневные поездки на работу и обратно. Деловые встречи в разных частях города. Ранние утренние вылеты. Вечеринки допоздна. Куда бы Вы ни отправлялись, пользуйтесь услугами Такси 24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-lg">
            <div class="title-v1">
                <h2>Вы можете использовать приложение для быстрого заказа такси</h2>
                <p>Что Вы получите установив приложение:</p>
            </div>

            <div class="row">
                <div class="col-md-6 content-boxes-v3 margin-bottom-40">
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-trophy"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">ЗАКАЖИ ТАКСИ ЛЕГКО</h2>
                            <p>На карте показывается ваше местоположение. Укажите куда подать автомобиль одним нажатием.</p>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">ЗАДАЙ УДОБНОЕ ВРЕМЯ ПОДАЧИ</h2>
                            <p>Можно вызвать такси сейчас или указать удобное время подачи.</p>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">ВЫБЕРИ ЛУЧШИЙ АВТОМОБИЛЬ</h2>
                            <p>Доверься нашему выбору или выбери лучший автомобиль на карте или из списка</p>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">БУДЬ В КУРСЕ ПЕРЕДВИЖЕНИЙ ВОДИТЕЛЯ</h2>
                            <p>Знай когда подъедет автомобиль, наблюдай за всеми передвижениями водителя на карте</p>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">КОНТРОЛИРУЙ СВОИ РАСХОДЫ</h2>
                            <p>Проверь стоимость поездки по подробному чеку</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="img-responsive" src="{{ asset('assets/img/phones.jpg') }}" alt="">
                    <div class="col-xs-12 col-sm-6 buttons">
                        <a href="https://itunes.apple.com/ru/app/taksi-online-zakaz-taksi/id969442902?mt=8">
                            <img src="{{ asset('assets/img/icons/btn_dwnl_apple.png') }}" alt="Установить через AppStore">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 buttons">
                        <a href="https://play.google.com/store/apps/details?id=ru.tt.taxionline.clientapp">
                            <img src="{{ asset('assets/img/icons/btn_dwnl_android.png') }}" alt="Установить через GooglePlay">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-quote parallaxBg">
            <div class="container">
                <div class="parallax-quote-in">
                    <p>Если вы спешите очень,<br> Если ехать нужно срочно, - <br> <span class="color-green">Вас, куда ни попроси,</span>  <br> Быстро довезет Такси</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Наши службы</h2>
                <p>Выбирай ту, которая подойдет тебе!</p>
            </div>

            <div class="row service-box-v1">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
                        <i class="icon-custom icon-lg icon-bg-u rounded-x fa fa-lightbulb-o"></i>
                        <h2 class="heading-md">Такси Дисконт</h2>
                        <p>Заказ по номеру: 242-242</p>
                        <ul class="list-unstyled">
                            <li>Низкая стоимость поездки</li>
                            <li>Среднее время подачи авто</li>
                            <li>Используйте дисконтные карты для уменьшения стоимости поедки</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
                        <i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-present"></i>
                        <h2 class="heading-sm">Такси 24</h2>
                        <p>Заказ по номеру: 24-24-24</p>
                        <ul class="list-unstyled">
                            <li>Быстрая подача авто</li>
                            <li>Демократичные цены</li>
                            <li>Проводятся акции</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service-block service-block-default">
                        <i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-rocket"></i>
                        <h2 class="heading-sm">Грузотакси</h2>
                        <p>Заказ по номеру: 244-244</p>
                        <ul class="list-unstyled">
                            <li>Перевозка грузов</li>
                            <li>Низкие цены</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel">
            <div class="item-video" data-merge="3">
                <video controls class="img-responsive" width="100%" height="auto" preload="auto">
                  <source src="{{ asset('assets/video/tmp/discount.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            <div class="item-video" data-merge="1">
                <video controls class="img-responsive" width="100%" height="auto" preload="auto">
                  <source src="{{ asset('assets/video/tmp/24.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            <div class="item-video" data-merge="2">
                <video controls class="img-responsive" width="100%" height="auto" preload="auto">
                  <source src="{{ asset('assets/video/ledency.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            <div class="item-video" data-merge="1">
                <video controls class="img-responsive" width="100%" height="auto" preload="auto">
                  <source src="{{ asset('assets/video/sp.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- News Section -->
    {!! Widget::RecentNews() !!}
    <!-- End News Section -->

    <!-- Event Section -->
    {!! Widget::eventBlock() !!}
    <!-- End Event Section -->

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