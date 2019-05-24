@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Stations</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Station</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($stations as $station)
                            <tr>
                                <th scope="row">{{ $station->name }}</th>
                                <td><a class="btn btn-dark text-white" href="/admin/edit_station/{{ $station->id }}" role="button">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a class="btn btn-dark text-white" href="/admin/add_station" role="button">Add A Station</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection