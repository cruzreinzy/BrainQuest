@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 70px;">
            <a href="{{route('joinroom')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 30px; color: black;">JOIN ROOM</a>
            <br>
            <br>
            <br>
            <a href="{{route('userlb')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">LEADERBOARDS</a>
            <br>
            <br>
            <br>
            <a href="#" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 15px; color: red;">EXIT</a>
        </div>
@endsection

@section('title')
    <title>BrainQuest Adventure</title>
@endsection