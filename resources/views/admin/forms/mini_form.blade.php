<div class="form-group">
    {!! Form::label('name','Miniature Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control border-dark','required']) !!}
</div>
<div class="form-group">
    {!! Form::label('station_id','Station:') !!}
    {!! Form::select('station_id', $stations, null, ['class' => 'form-control border-dark','required']) !!}
</div>
<div class="form-group">
    {!! Form::label('factions','Factions:') !!}
    {!! Form::select('factions[]',$factions,null, ['id' => 'factions','class' => 'form-control border-dark', 'multiple' => 'multiple','required']) !!}
</div>
<div class="form-group">
    {!! Form::label('characteristics','Characteristics:') !!}
    {!! Form::select('characteristics[]',$characteristics,null, ['id' => 'characteristics','class' => 'form-control border-dark', 'multiple' => 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('keywords','Keywords:') !!}
    {!! Form::select('keywords[]',$keywords,null, ['id' => 'keywords','class' => 'form-control border-dark', 'multiple' => 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('cost','Cost:') !!}
    {!! Form::selectRange('cost',0,20,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('wounds','Wounds:') !!}
    {!! Form::selectRange('wounds',0,20,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('move','Move:') !!}
    {!! Form::selectRange('move',0,20,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('defense','Defense:') !!}
    {!! Form::selectRange('defense',0,20,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('defense_suit','Defense Suit:') !!}
    {!! Form::select('defense_suit',array('' => 'None','@{{crow}}' => 'Crow','@{{mask}}' => 'Mask','@{{ram}}' => 'Ram','@{{tome}}' => 'Tome'),null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('willpower','Willpower:') !!}
    {!! Form::selectRange('willpower',0,20,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('willpower_suit','Willpower Suit:') !!}
    {!! Form::select('willpower_suit',array('' => 'None','@{{crow}}' => 'Crow','@{{mask}}' => 'Mask','@{{ram}}' => 'Ram','@{{tome}}' => 'Tome'),null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('base','Base Size:') !!}
    {!! Form::select('base',array('30' => '30mm','40' => '40mm','50' => '50mm'),null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('size','Size:') !!}
    {!! Form::selectRange('size',1,10,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity','Model Limit:') !!}
    {!! Form::selectRange('quantity',1,10,null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('abilities','Passive Abilities:') !!}
    {!! Form::select('abilities[]',$abilities,null, ['id' => 'abilities','class' => 'form-control border-dark', 'multiple' => 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('aka','AKA (Previous Edition Name):') !!}
    {!! Form::text('aka', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description (Optional Lore Insert):') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control border-dark']) !!}
</div>
<div class="form-group text-right">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-dark form control']) !!}
</div>