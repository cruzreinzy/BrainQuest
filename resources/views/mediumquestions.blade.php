@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 10px;">
            
            <form action="{{route('mediumquestion_adding')}}" method="post">
            @csrf
            <label for="mediumquest">Input medium question:</label>
            <br>
            <input type="text" id="mediumquest" name="mediumquest" style="margin-top: 7px; margin-bottom: 10px; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px;">
            <br>
            <label for="mediumans">Input medium answer:</label>
            <br>
            <input type="text" id="mediumans" name="mediumans" style="margin-top: 7px; margin-bottom: 15px; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px;">
            <br>
            <button style="margin-bottom: 55px; text-decoration: none; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px; font-size: 15px; color: black;">Submit</button>
            </form>

            

            <br>

            <a href="#" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">NEXT</a>
            <br>
            <br>
            <br>
            <a href="{{route('gamemode')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Medium Mode</title>
@endsection