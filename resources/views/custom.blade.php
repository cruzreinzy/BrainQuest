@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 10px;">
            
            <form action="{{route('question_adding')}}" method="post">
            @csrf
            <label for="quest">Input question:</label>
            <br>
            <input type="text" id="quest" name="quest" style="margin-top: 7px; margin-bottom: 10px; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px;">
            <br>
            <label for="ans">Input answer:</label>
            <br>
            <input type="text" id="ans" name="ans" style="margin-top: 7px; margin-bottom: 15px; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px;">
            <br>
            <button style="margin-bottom: 55px; text-decoration: none; background-color: #D8D8D8; border-style: solid; border-radius: 4px; border-color: brown; padding-right: 10px; padding-left: 10px; padding-top: 3.5px; padding-bottom: 2px; font-size: 15px; color: black;">Submit</button>
            </form>

            

            <br>

            <a href="#" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">NEXT</a>
            <br>
            <br>
            <br>
            <a href="{{route('createroom')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        </div>
@endsection

@section('title')
    <title>Custom Mode</title>
@endsection