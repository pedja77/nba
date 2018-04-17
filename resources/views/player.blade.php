<h2>About {{$player->first_name . " " . $player->last_name}}</h2>
Email: {{$player->email}}<br>
Plays for: <a href="{{ route('show-team', ['id' => $player->team->id]) }}">{{$player->team->name}}</a>