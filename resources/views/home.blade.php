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
                            <source src="{{ asset('assets/video/v1.flv') }}" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"></source>
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
                        <a class="right" href="https://itunes.apple.com/ru/app/taksi-online-zakaz-taksi/id969442902?mt=8">
                            <img src="{{ asset('assets/img/icons/btn_dwnl_apple.png') }}" alt="Установить через AppStore">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 buttons">
                        <a class="left" href="https://play.google.com/store/apps/details?id=ru.tt.taxionline.clientapp">
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

        <ul class="list-unstyled row portfolio-box-v1">
            <li class="col-sm-4">
                <img class="img-responsive" src="assets/img/mockup/img1.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Collective Package</h3>
                    <p>Web Design, Mock-up</p>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
                </div>
            </li>
            <li class="col-sm-4">
                <img class="img-responsive" src="assets/img/mockup/img2.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Ahola Company</h3>
                    <p>Brand Design, UI</p>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
                </div>
            </li>
            <li class="col-sm-4">
                <img class="img-responsive" src="assets/img/mockup/img4.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Allan Project</h3>
                    <p>Web Development, HTML5</p>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
                </div>
            </li>
        </ul>
    </section>
    <!-- End Services Section -->

    <!-- News Section -->
    <section id="news" class="news-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Новости</h2>
                <p>События, акции, мероприятия.</p>
            </div>

            <div class="row news-v1">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="{{ asset('assets/img/contents/img1.jpg') }}" alt="">
                        <h3><a href="#">Копите баллы и получайте бесплатные поездки</a></h3>
                        <p>Получайте баллы с каждой поездки. Накопив достаточное количество Вы можете их использовать и осуществить бесплатную поездку!</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>Опубликовано:</span> <a href="#">Бешига Любовь</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> Январь 15, 2016</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 14</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="{{ asset('assets/img/contents/img4.jpg') }}" alt="">
                        <h3><a href="#">We build your website to realise your vision and best product</a></h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>By</span> <a href="#">John Clarck</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> July 02, 2014</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 07</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="{{ asset('assets/img/contents/img3.jpg') }}" alt="">
                        <h3><a href="#">Focused on helping our clients to build a successful business</a></h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>By</span> <a href="#">Tina Kruiger</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> July 02, 2014</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 22</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-twitter parallaxBg">
            <div class="container parallax-twitter-in">
                <div class="margin-bottom-30">
                    <i class="icon-custom rounded-x icon-bg-blue fa fa-twitter"></i>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="list-unstyled owl-twitter-v1">
                            <li class="item">
                                <p>Желтая «шашечка», <br>
                                    Резвый сигнал. <br>
                                    Для пассажиров <br>
                                    Другом он стал.<p>
                            </li>
                            <li class="item">
                                <p>В курсе событий <br>
                                    Везде и всегда. <br>
                                    Мчится на вызов <br>
                                    В жару, в холода.</p>
                            </li>
                            <li class="item">
                                <p>Знаки дорожные <br>
                                    Знает он все. <br>
                                    Пусть же сопутствует <br>
                                    В жизни успех!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="about-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Фотографии с мероприятий</h2>
                <p>Тут Вы можете найти свои фотографии, если участвывали в наших мероприятиях.</p>
            </div>


            <div class="cube-portfolio">
                <div id="filters-container" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Все </div>
                    <div data-filter=".print" class="cbp-filter-item"> 2016 </div>
                    <div data-filter=".web-design" class="cbp-filter-item"> 2015 </div>
                    <div data-filter=".motion" class="cbp-filter-item"> 2014 </div>
                </div><!--/end Filters Container-->

                <div id="grid-container" class="cbp-l-grid-gallery">
                    <div class="cbp-item web-design motion">
                        <a href="{{ asset('assets/ajax/project1.html') }}" class="cbp-caption cbp-singlePageInline"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a1/5.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">День рыбака без табака</div>
                                        <div class="cbp-l-caption-desc">Под таким лозунгом мы провели мероприятие от нашей диспетчерской службы заказа Такси 24.</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a href="assets/ajax/project2.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a2/image5.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">День рождения Такси 24</div>
                                        <div class="cbp-l-caption-desc">Нам 4 года.</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design motion">
                        <a href="assets/ajax/project3.html" class="cbp-caption cbp-singlePageInline"
                           data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a3/IMG_1984.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">9 мая</div>
                                        <div class="cbp-l-caption-desc">Мы помним наших героев</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project4.html" class="cbp-caption cbp-singlePageInline"
                           data-title="iDevices<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/11.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">iDevices</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project5.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="assets/ajax/project6.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project7.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Workout Buddy<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/7.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print">
                        <a href="assets/ajax/project8.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Digital Menu<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/8.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Digital Menu</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project9.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-l-loadMore-button">
                    <a href="assets/ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

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