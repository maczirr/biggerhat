@extends('main')

@section('content')

    <div class="row">
        @include('admin.partials.nav')
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Passive Abilities</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Ability</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($abilities as $abilitie)
                            <tr>
                                <th scope="row">{{ $abilitie->name }}</th>
                                <td><a class="btn btn-dark text-white" href="/admin/edit_abilitie/{{ $abilitie->id }}" role="button">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col text-center" style="margin: 5px;">
                            {{ $abilities->links() }}
                        </div>
                        <div class="col text-right">
                            <a class="btn btn-dark text-white" href="/admin/add_abilitie" role="button">Add A Passive Ability</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection