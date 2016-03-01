<div class="form-group">
    {!! Form::label('name', 'Название') !!}
    {!! Form::text('name', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание') !!}
    {!! Form::text('description', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
