@extends('main')

@section('content')
            @foreach($factions as $faction)
                <div class="row">
                    <div class="col">
                        <div class="card mb-3 @if(!$faction->color) border-dark @endif " @if($faction->color)style="border-color: #{{ $faction->color }}" @endif>
                            <div class="card-header @if(!$faction->color)bg-dark @endif text-white" @if($faction->color)style="background-color: #{{ $faction->color }}" @endif>
                                {{ $faction->name }}
                            </div>
                            <div class="card-body">
                                @if($faction->image)<img src="{{ $faction->image }}" class="card-img" alt="{{ $faction->name }}" style="height: 100px; width: 100px; float:left">@endif
                                <p class="card-text">{!! nl2br(e($faction->description)) !!}</p>
                            </div>
                            <div class="card-footer text-right">
                                <a class="btn @if(!$faction->color) btn-dark @endif text-white" href="/factions/view/{{ $faction->id }}" role="button" style="margin: 5px; @if($faction->color) background-color: #{{ $faction->color }} @endif">View {{ $faction->name }} Characters</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
@endsection