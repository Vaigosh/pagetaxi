    <!--=== Header ===-->
    <nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#intro">
                    <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <!--  <li><a href="{{ url('/home') }}">Home</a></li> -->
                        <li class="page-scroll home">
                            <a href="#body">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">О нас</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#services">Службы</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#news">Новости</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Фотографии</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Контакты</a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Вход</a></li>
                            <li><a href="{{ url('/register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->