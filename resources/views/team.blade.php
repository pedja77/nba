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
<ul>
@foreach($team->players as $player)
    <li><a href="{{ route('show-player', ['id' => $player->id]) }}">{{$player->first_name . " " . $player->last_name}}</a></li>
@endforeach
</ul>
@endsection