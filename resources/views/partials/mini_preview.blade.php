<div class="card mb-3 @if(!$this_faction->color) border-dark @endif " @if($this_faction->color)style="border-color: #{{ $this_faction->color }}" @endif>
    <div class="card-header @if(!$this_faction->color)bg-dark @endif text-white" @if($this_faction->color)style="background-color: #{{ $this_faction->color }}" @endif>
        {{ $mini->name }}
    </div>
    <div class="card-body">
        <b>Faction(s):</b> @foreach($mini->factions as $faction) <a href="/factions/view/{{$faction->id}}">{{ $faction->name }}</a>@if(!$loop->last),@endif @endforeach
        <br/>
        <b>Station:</b>
        @if($mini->station_id == 1) Master @endif
        @if($mini->station_id == 2) Henchman @endif
        @if($mini->station_id == 3) Enforcer @endif
        @if($mini->station_id == 4) Minion @endif
        @if($mini->quantity > 1)(Limit {{$mini->quantity}})@endif
        <br/>
        <b>Keyword(s):</b> @foreach($mini->keywords as $keyword) {{ $keyword->name }}@if(!$loop->last),@endif @endforeach
        <br/>
        <b>Characteristic(s):</b> @foreach($mini->characteristics as $characteristic) {{$characteristic->name}}@if(!$loop->last),@endif @endforeach
        @if($mini->description)
            <hr/>
            <p>{{ $mini->description }}</p>
        @endif
    </div>
    <div class="card-footer text-right">
        <a class="btn @if(!$this_faction->color) btn-dark @endif text-white" href="/minis/view/{{ $mini->id }}" role="button" style="margin: 5px; @if($this_faction->color) background-color: #{{ $this_faction->color }} @endif">View {{ $mini->name }} &raquo;</a>
    </div>
</div>