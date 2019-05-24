@extends('main')

@section('content')
    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Edit Keyword</div>
                <div class="card-body">
                    {!! Form::model($keyword, ['method' => 'PATCH','action' => ['KeywordsController@update', $keyword->id]]) !!}
                    @include('admin.forms.keyword_form', ['submitButtonText' => 'Update Keyword'])
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection