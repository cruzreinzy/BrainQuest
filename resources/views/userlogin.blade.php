@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 70px;">
            <form action="#" method="post">
                @csrf
                <div>
                    <label for="playername">Username: </label>
                    <input type="text" name="playername" id="playername">
                </div>
                <br>
                <div>
                <label for="playerpass">Password: </label>
                <input type="password" name="playerpass" id="playerpass">
                </div>
                <br>
                <button type="submit">Sign In</button>
            </form>
        </div>
        
        
@endsection

@section('title')
    <title>Users Log In</title>
@endsection