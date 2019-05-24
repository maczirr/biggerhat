@extends('main')

@section('content')

    <div class="row">
        @include('partials.faction_nav')
        <div class="col">
            @foreach($stations as $station)
                <div class="card border-dark mb-3">
                    <div class="card-header bg-dark text-white"><a name="{{ $station->name }}">{{ $station->name }}</a></div>
                    <div class="card-body">
                        @foreach($minis as $mini)
                            @if($mini->station_id == $station->id)
                                @include('partials.mini_preview')
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
