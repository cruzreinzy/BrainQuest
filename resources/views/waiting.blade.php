@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 10px;">
            
            <p for="ans" style="margin-top: 7px; margin-bottom: 15px; padding-right: 1px; padding-left: 1px; padding-top: 3.5px; padding-bottom: 2px;">Waiting for players...</p>
            <br>

            <p for="ans" style="margin-top: 7px; margin-bottom: 15px; padding-right: 1px; padding-left: 1px; padding-top: 3.5px; padding-bottom: 2px; font-size: 20px;">Player 1: Rein</p>

            <p for="ans" style="margin-top: 7px; margin-bottom: 15px; padding-right: 1px; padding-left: 1px; padding-top: 3.5px; padding-bottom: 2px; font-size: 20px;">Player 2: Ivan</p>
            
            
            <br>
            <br>
            <br>
            <a href="{{route('userhome')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Waiting for Players</title>
@endsection