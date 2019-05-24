@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Characteristic</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_characteristic','files' => true]) !!}
                    @include('admin.forms.characteristic_form', ['submitButtonText' => 'Add Characteristic'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection