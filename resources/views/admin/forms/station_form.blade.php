<div class="form-group">
    {!! Form::label('name','Station Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group text-right">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-dark form control']) !!}
</div>