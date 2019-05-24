<div class="card mb-3 border-dark">
    <div class="card-header bg-dark text-white">
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
</div>
<div class="card mb-3 border-dark">
    <div class="card-header bg-dark text-white">
        Stats
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <b>Cost</b> <br />
                    {{ $mini->cost }}
                </div>
                <div class="col text-center">
                    <b>Health</b> <br/>
                    {{ $mini->wounds }}
                </div>
                <div class="col text-center">
                    <b>Move</b> <br/>
                    {{ $mini->move }}
                </div>
                <div class="col text-center">
                    <b>Df</b> <br/>
                    {{ $mini->defense }}@if($mini->defense_suit){!! fauxdown($mini->defense_suit) !!}@endif
                </div>
                <div class="col text-center">
                    <b>Wp</b> <br/>
                    {{ $mini->willpower }}@if($mini->willpower_suit){!! fauxdown($mini->willpower_suit) !!}@endif
                </div>
                <div class="col text-center">
                    <b>Size</b> <br/>
                    {{ $mini->size }}
                </div>
                <div class="col text-center">
                    <b>Base</b> <br/>
                    {{ $mini->base }}mm
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 border-dark">
    <div class='toggle_parent'>
        <div class='toggleHolder'>
            <div class="toggler card-header bg-dark text-white">
                <span class="toggler_label">Abilities (Click to Expand)</span>
                <span class="toggler_label" style='display:none;'>Abilities (Click to Close)</span>
            </div>
            <div class='toggled_content card-body' style='display:none;'>
                @foreach($mini->abilities as $ability)
                    <b>{!! fauxdown($ability->name) !!}:</b> {!! fauxdown($ability->description) !!}
                    <br />
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 border-dark">
    <div class='toggle_parent'>
        <div class='toggleHolder'>
            <div class="toggler card-header bg-dark text-white">
                <span class="toggler_label">Actions (Click to Expand)</span>
                <span class="toggler_label" style='display:none;'>Actions (Click to Close)</span>
            </div>
            <div class='toggled_content card-body' style='display:none;'>
                Nothing here yet! Check back soon!
            </div>
        </div>
    </div>
</div>