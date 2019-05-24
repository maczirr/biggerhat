@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Characteristic</div>
                <div class="card-body">
                    {!! Form::model($characteristic, ['method' => 'PATCH','action' => ['CharacteristicsController@update', $characteristic->id]]) !!}
                    @include('admin.forms.characteristic_form', ['submitButtonText' => 'Update Characteristic'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection