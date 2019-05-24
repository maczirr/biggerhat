<div class="form-group">
    {!! Form::label('name','Faction Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group text-right">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-dark form control']) !!}
</div>