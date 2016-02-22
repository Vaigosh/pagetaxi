@extends('layouts.app')

@section('navmenu')
@endsection

@section('content')
<!--=== Content Part ===-->
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}
        <!--Reg Block-->
        <div class="reg-block">
            <div class="reg-block-header">
                <h2>Регистрация</h2>
                <ul class="social-icons text-center">
                    <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                    <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                    <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                    <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                </ul>
                <p>Вы уже зарегистрированны? Нажмите <a class="color-green" href="{{ url('/login') }}">Вход</a> в Ваш аккаунт.</p>
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Имя" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Пароль" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-30">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Подтверждение пароля" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>    
            <hr>
            <div class="checkbox">
                <label>
                    <input type="checkbox">
                    Я прочитал <a target="_blank" href="page_terms.html">Правила и условия</a>
                </label>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn-u btn-block">Зарегистрировать</button>
                </div>
            </div>
        </div>
        <!--End Reg Block-->
    </form>
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/backstretch/jquery.backstretch.min.js') }}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<script type="text/javascript">
    $.backstretch([
      "{{ asset('assets/img/bg/bg5.jpg') }}",
      "{{ asset('assets/img/bg/bg6.jpg') }}",
      "{{ asset('assets/img/bg/bg7.jpg') }}",
      "{{ asset('assets/img/bg/bg9.jpg') }}",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('assets/plugins/respond.js') }}"></script>
    <script src="{{ asset('assets/plugins/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->
@endsection
