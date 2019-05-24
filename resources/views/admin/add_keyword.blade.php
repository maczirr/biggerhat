@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Add a Keyword</div>
                <div class="card-body">

                    {!! Form::open(['url' => 'admin/add_keyword','files' => true]) !!}
                    @include('admin.forms.keyword_form', ['submitButtonText' => 'Add Keyword'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection