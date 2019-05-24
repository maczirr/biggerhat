@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Miniature</div>
                <div class="card-body">
                    {!! Form::model($mini, ['method' => 'PATCH','action' => ['MinisController@update', $mini->id]]) !!}
                    @include('admin.forms.mini_form', ['submitButtonText' => 'Update Miniature'])
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