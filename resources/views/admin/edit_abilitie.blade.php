@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Ability</div>
                <div class="card-body">
                    {!! Form::model($abilitie, ['method' => 'PATCH','action' => ['AbilitiesController@update', $abilitie->id]]) !!}
                    @include('admin.forms.abilitie_form', ['submitButtonText' => 'Update Ability'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection