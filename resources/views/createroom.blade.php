@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 40px;">
            <a href="{{route('gamemode')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color:blueviolet;">CUSTOM</a>
            <br>
            <br>
            <br>
            <a href="{{route('adminhome')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Create Room</title>
@endsection