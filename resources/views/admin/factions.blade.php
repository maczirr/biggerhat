@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Factions</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Faction</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($factions as $faction)
                        <tr>
                            <th scope="row">{{ $faction->name }}</th>
                            <td><a class="btn btn-dark text-white" href="/admin/edit_faction/{{ $faction->id }}" role="button">Edit</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a class="btn btn-dark text-white" href="/admin/add_faction" role="button">Add A Faction</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection