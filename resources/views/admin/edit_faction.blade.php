@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Faction</div>
                <div class="card-body">
                    {!! Form::model($faction, ['method' => 'PATCH','action' => ['FactionsController@update', $faction->id]]) !!}
                    @include('admin.forms.faction_form', ['submitButtonText' => 'Update Faction'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection