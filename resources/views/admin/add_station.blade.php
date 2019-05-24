@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Station</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_station','files' => true]) !!}
                    @include('admin.forms.station_form', ['submitButtonText' => 'Add Station'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection