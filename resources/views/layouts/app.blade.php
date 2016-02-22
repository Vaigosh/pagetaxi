<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title> 
        @section('title') 
        @show 
    </title>   
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.jpg') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72.jpg') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114.jpg') }}">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-lineicons.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/pace/pace-flash.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css') }}" type="text/css" media="screen"><![endif]-->

    <!-- Style Switcher -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/style-switcher.css') }}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-colors/default.css') }}" id="style_color">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/css/one.style.css') }}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/page_log_reg_v2.css') }}">

    <!-- CSS Footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v7.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/html5.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body id="body app-layout" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">

    @yield('navmenu')

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    @yield('scripts')
</body>
</html>
