@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 70px;">
            <form action="{{route('userauthenticate')}}" method="post">
                @csrf
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                </div>
                <br>
                <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
                </div>
                <br>
                <button type="submit">Sign In</button>
            </form>
        </div>
        
        
@endsection

@section('title')
    <title>Users Log In</title>
@endsection