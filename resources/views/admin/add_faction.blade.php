@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Faction</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_faction','files' => true]) !!}
                    @include('admin.forms.faction_form', ['submitButtonText' => 'Add Faction'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection