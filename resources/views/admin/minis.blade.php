@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Miniatures</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Miniature Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($minis as $mini)
                            <tr>
                                <th scope="row">{{ $mini->name }}</th>
                                <td><a class="btn btn-dark text-white" href="/admin/edit_mini/{{ $mini->id }}" role="button">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col text-center" style="margin: 5px;">
                        {{ $minis->links() }}
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-dark text-white" href="/admin/add_mini" role="button" style="margin: 5px;">Add A Miniature</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection