@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <div>
        <h1>Редактирование галлереи</h1>
        <hr />
        <article>
        	{!! Form::model($gallerys, ['method' => 'PATCH', 'action' => ['PhotoGalleryController@update', $gallerys->id]]) !!}
                @include('forms._gallery',[
                    'submitButtonText' => 'Сохранить'])
            {!! Form::close() !!}
            @include ('errors.list');
        </article>
    </div>
@endsection