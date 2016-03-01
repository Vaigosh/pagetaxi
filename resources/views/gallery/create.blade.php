@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
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