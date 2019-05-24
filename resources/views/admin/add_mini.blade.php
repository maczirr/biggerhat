@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Miniature</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_mini','files' => true]) !!}
                    @include('admin.forms.mini_form', ['submitButtonText' => 'Add Miniature'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $('#factions').select2({
            placeholder: 'Select Factions'
        });
        $('#characteristics').select2({
            placeholder: 'Select Characteristics'
        });
        $('#keywords').select2({
            placeholder: 'Select Keywords'
        });
        $('#abilities').select2({
            placeholder: 'Select Passive Abilities'
        });
    </script>
@endsection