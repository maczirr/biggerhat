@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Characteristics</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Characteristic</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($characteristics as $characteristic)
                            <tr>
                                <th scope="row">{{ $characteristic->name }}</th>
                                <td><a class="btn btn-dark text-white" href="/admin/edit_characteristic/{{ $characteristic->id }}" role="button">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a class="btn btn-dark text-white" href="/admin/add_characteristic" role="button">Add A Characteristic</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection