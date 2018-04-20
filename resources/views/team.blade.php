@extends('layouts.master')

@section('title')
    Team stats
@endsection

@section('content')
Team name: {{$team->name}}<br>
Address: {{$team->address}}<br>
City: {{$team->city}}<br>
Email: {{$team->email}}<br>

<h3>Players</h3>
<ul class="list-unstyled">
@foreach($team->players as $player)
    <li><a href="{{ route('show-player', ['id' => $player->id]) }}">{{$player->first_name . " " . $player->last_name}}</a></li>
@endforeach
</ul>

<h3>Comments</h3>
<ul class="list-unstyled">
@foreach($team->comments as $comment)
    <li><p>{{ $comment->content  }}
    <br>
    by {{ $comment->user->name  }} at {{ $comment->user->created_at }}
    </p></li>
@endforeach
</ul>

<h3>Add comment</h3>
<form method="POST" action="{{ route('add-comment', ['team_id' => $team->id]) }}">
    {{ csrf_field()  }}
  <div class="form-group">
    <label for="comment">Your comment</label>
    <textarea class="form-control" id="comment" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection