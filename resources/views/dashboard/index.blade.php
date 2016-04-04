@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3 img-v3">
        <div class="container text-center">
            <h1 class="pull-left">Управление контентом</h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Управление контентом</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/dashboard">Управление контентом</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#event" data-toggle="tab">Мероприятия</a></li>
            <li><a href="#news" data-toggle="tab">Новости</a></li>
            <li><a href="#gallery" data-toggle="tab">Галереи</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-table">
                              <div class="panel-heading">
                                <div class="row">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title">Мероприятия</h3>
                                  </div>
                                  <div class="col col-xs-6 text-right">
                                    <a href="/event/create" title=""><button type="button" class="btn btn-sm btn-primary btn-create">Добавить мероприятие</button></a>
                                  </div>
                                </div>
                              </div>
                              <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                  <thead>
                                    <tr>
                                        <th class="hidden-xs">ID</th>
                                        <th>Заголовок</th>
                                        <th><em class="fa fa-cog"></em></th>
                                    </tr> 
                                  </thead>
                                  <tbody>
                                    @foreach($event_block as $event)
                                      <tr>
                                        <td class="hidden-xs">{{ $event->id }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td align="center">
                                          <a class="btn btn-default" href="/event/{{ $event->id }}/edit"><em class="fa fa-pencil"></em></a>
                                          <a class="btn btn-danger" href="/event/destroy/{{ $event->id }}" data-method="delete"><em class="fa fa-trash"></em></a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-table">
                              <div class="panel-heading">
                                <div class="row">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title">Новости</h3>
                                  </div>
                                  <div class="col col-xs-6 text-right">
                                    <a href="/news/create" title=""><button type="button" class="btn btn-sm btn-primary btn-create">Добавить новость</button></a>
                                  </div>
                                </div>
                              </div>
                              <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                  <thead>
                                    <tr>
                                        <th class="hidden-xs">ID</th>
                                        <th>Заголовок</th>
                                        <th><em class="fa fa-cog"></em></th>
                                    </tr> 
                                  </thead>
                                  <tbody>
                                    @foreach($news as $sh_news)
                                      <tr>
                                        <td class="hidden-xs">{{ $sh_news->id }}</td>
                                        <td>{{ $sh_news->title }}</td>
                                        <td align="center">
                                          <a class="btn btn-default" href="/news/{{ $sh_news->id }}/edit"><em class="fa fa-pencil"></em></a>
                                          <a class="btn btn-danger" href="/news/destroy/{{ $sh_news->id }}" data-method="delete"><em class="fa fa-trash"></em></a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-table">
                              <div class="panel-heading">
                                <div class="row">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title">Галерею</h3>
                                  </div>
                                  <div class="col col-xs-6 text-right">
                                    <a href="/gallery/create" title=""><button type="button" class="btn btn-sm btn-primary btn-create">Добавить галерею</button></a>
                                  </div>
                                </div>
                              </div>
                              <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                  <thead>
                                    <tr>
                                        <th class="hidden-xs">ID</th>
                                        <th>Заголовок</th>
                                        <th><em class="fa fa-cog"></em></th>
                                    </tr> 
                                  </thead>
                                  <tbody>
                                    @foreach($gallerys as $gallery)
                                      <tr>
                                        <td class="hidden-xs">{{ $gallery->id }}</td>
                                        <td>{{ $gallery->name }}</td>
                                        <td align="center">
                                          <a class="btn btn-default" href="/gallery/{{ $gallery->id }}/edit"><em class="fa fa-pencil"></em></a>
                                          <a class="btn btn-danger" href="/gallery/destroy/{{ $gallery->id }}" data-method="delete"><em class="fa fa-trash"></em></a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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