@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Passive Ability</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_abilitie','files' => true]) !!}
                    @include('admin.forms.abilitie_form', ['submitButtonText' => 'Add Ability'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection