@extends('template.all')

@section('contents')
    <div style="text-align:center;">
        <h2>LeaderBoards</h2>
        <br>
        <p>Ban: 69</p>
        <br>  
        <p>Rein: 58</p>
        <br>
        <p>Choy: 57</p>
        <br>
        <br>
        <a href="{{route('adminhome')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
    </div>
@endsection

@section('title')
    <title>LeaderBoards</title>
@endsection