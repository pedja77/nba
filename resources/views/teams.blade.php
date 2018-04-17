
<ul class="list-unstyled">
@foreach($teams as $team)
    <li><a href="{{route('show-team', ['id' => $team->id])}}">{{  $team->name }}</a></li>
@endforeach
</ul>