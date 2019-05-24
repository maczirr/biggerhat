<div class="col-md-3">
    <ul class="nav nav-pills nav-fill flex-column">
        @foreach($stations as $station)
            <li class="nav-item" style="padding: 1px;">
                <a class="nav-link btn-dark text-white" href="/factions/view/{{ $this_faction->id }}/#{{ $station->name }}">{{ $station->name }}</a>
            </li>
        @endforeach
            <li class="nav-item" style="padding: 1px;">
                <a class="nav-link btn-dark text-white" href="/factions">Back to Factions</a>
            </li>
    </ul>
</div>