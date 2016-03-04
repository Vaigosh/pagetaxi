@extends('layouts.app')
@section('cstyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzonejs/min/dropzone.min.css') }}">
@endsection

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <div class="wrapper">
        <h1>{{ $gallery->name }}</h1>
        <hr />
        <form action="/gallery/{{ $gallery->id }}/upload_photo"
            class="dropzone"
            id="my-awesome-dropzone">
        </form>
        <div class="cube-portfolio margin-bottom-20">
            <div id="grid-container" class="cbp-l-grid-agency">
                @if(count($gallery->photos))
                    @foreach($gallery->photos as $photo)
                        <div class="cbp-item {{ $gallery->id }}">
                            <div class="cbp-caption margin-bottom-20">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="../{{ $photo->path }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <ul class="link-captions no-bottom-space">
                                                <li><a href="../{{ $photo->path }}" class="cbp-lightbox" data-title="{{ $photo->name }}"><i class="rounded-x fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-title-dark">
                                <div class="cbp-l-grid-agency-title">{{ $photo->name }}</div>
                                <div class="cbp-l-grid-agency-desc">{{ $photo->description }}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!--=== End Cube-Portfdlio ===-->
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
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/cube-portfolio/cube-portfolio-3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/dropzonejs/min/dropzone.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
@endsection