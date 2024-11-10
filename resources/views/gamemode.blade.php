@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 40px;">
            <a href="{{route('easyquestions')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">EASY</a>
            <br>
            <br>
            <br>
            <a href="{{route('mediumquestions')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">MEDIUM</a>
            <br>
            <br>
            <br>
            <a href="{{route('hardquestions')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">HARD</a>
            <br>
            <br>
            <br>
            <a href="{{route('createroom')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Choose Game Mode</title>
@endsection