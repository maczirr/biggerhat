<div class="form-group">
    {!! Form::label('name','Ability Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('trigger_suit','Trigger Suit:') !!}
    {!! Form::select('trigger_suit',array('' => 'None','@{{crow}}' => 'Crow','@{{mask}}' => 'Mask','@{{ram}}' => 'Ram','@{{tome}}' => 'Tome'),null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group text-right">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-dark form control']) !!}
</div>