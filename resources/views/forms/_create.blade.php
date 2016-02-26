<div class="form-group">
    {!! Form::label('title', $titleLabelText) !!}
    {!! Form::text('title', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('img_path', 'Путь до картинки:') !!}
    {!! Form::text('img_path', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('text', $textLabelText) !!}
    {!! Form::textarea('text', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Дата публикации:') !!}
    {!! Form::input('date','published_at', date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>