@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <div>
        <h1>Новости</h1>
        @foreach($event_block as $event)
            <div class="row">
                <div class="">{{ $event->id }}</div>
                <div class="">{{ $event->title }}</div>

                <!-- we will also add show, edit, and delete buttons -->
                <div class="">

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {!! Form::open(array('url' => 'event/' . $event->id, 'class' => 'pull-right')) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Удалить новость', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('event/' . $event->id) }}">Открыть новость</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('event/' . $event->id . '/edit') }}">Редактировать новость</a>

                </div>
            </div>
        @endforeach
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