@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <div class="wrapper">
        <!--=== Breadcrumbs v3 ===-->
        <div class="breadcrumbs-v3 img-v3">
            <div class="container text-center">
                <p>Фотогалерея</p>
                <h1>Создать галерею</h1>
            </div><!--/end container-->
        </div>
        <!--=== End Breadcrumbs v3 ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Создать галерею</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/gallery">Фотогалерея</a></li>
                    <li class="active"><a href="/gallery/create">Создать галерею</a></li>
                </ul>
            </div>
        </div>
        <hr />
        <div>
            <h1>Создание новой галлереи</h1>
            <hr />
            <article>
                {!! Form::open(['url' => 'gallery']) !!}
                    @include('forms._gallery',[
                        'submitButtonText' => 'Добавить'])
                {!! Form::close() !!}
                @include ('errors.list');
            </article>
        </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
</div><!--/wrapper-->