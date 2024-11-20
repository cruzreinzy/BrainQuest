@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 15px;">
            
            <form action="{{route('game')}}" method="get" id="questions">

            <label for="quest">Enter Room Code:</label>
            <br>
            <input type="text" id="quest" name="quest" style="margin-top: 7px; margin-bottom: 14px; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-top: 3.5px; padding-bottom: 2px; text-align: center;" placeholder="Enter 4-digit number">

            </form>

            <button type="submit" form="questions" value="Submit" style="margin-bottom: 10px; text-decoration: none; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px; font-size: 15px; color: black;">Join</button>


            <br>
            <br>
            <br>
            <br>

            <a href="{{route('userhome')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Join Room</title>
@endsection