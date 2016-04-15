<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title> 
        {{ $page[0]->title or 'Такси 24 | Заказ такси в Астрахани.'}}
    </title>   
    <meta name="description" content="{{ $page[0]->description or 'Заказать такси в Астрахани. Такси 24'}}">
    <meta name="keywords" content="{{ $page[0]->keywords or 'Заказать такси, такси Астрахань, такси 24, 242424, Служба такси 24, Такси-24' }}">
    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.jpg') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72.jpg') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114.jpg') }}">
    <!-- Fonts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/pace/pace-flash.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css') }}" type="text/css" media="screen"><![endif]-->

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/html5.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
    @yield('cstyle') 
</head>
<body id="body app-layout" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
<div id="top"></div>
    @yield('navmenu')

    @yield('content')
    
    @yield('footer')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
    @yield('scripts')
</body>
</html>
