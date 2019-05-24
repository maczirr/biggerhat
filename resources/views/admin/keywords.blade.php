@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Keywords</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Keyword</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($keywords as $keyword)
                            <tr>
                                <th scope="row">{{ $keyword->name }}</th>
                                <td><a class="btn btn-dark text-white" href="/admin/edit_keyword/{{ $keyword->id }}" role="button">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col text-center" style="margin: 5px;">
                        {{ $keywords->links() }}
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-dark text-white" href="/admin/add_keyword" role="button" style="margin: 5px;">Add A Keyword</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection