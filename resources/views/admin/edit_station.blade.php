@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Station</div>
                <div class="card-body">
                    {!! Form::model($station, ['method' => 'PATCH','action' => ['StationsController@update', $station->id]]) !!}
                    @include('admin.forms.station_form', ['submitButtonText' => 'Update Station'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection