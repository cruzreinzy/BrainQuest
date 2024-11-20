@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 70px;">
            <a href="{{route('createroom')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 30px; color: black;">CREATE ROOM</a>
            <br>
            <br>
            <br>
            <a href="{{route('managequestions')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 25px; color: black;">MANAGE QUESTIONS</a>
            <br>
            <br>
            <br>
            <a href="{{route('manageusers')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 25px; color: black;">MANAGE USERS</a>
            <br>
            <br>
            <br>
            <a href="{{route('leaderboards')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 20px; color: black;">LEADERBOARDS</a>
            <br>
            <br>
            <br>
            <a id="exit" href="{{route('unauthenticate')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 15px; color: red;">EXIT</a>
            <br>

            <!-- <div id="moveMe" style="position:absolute; top: 100px; left: 100px; font-size:50px; color:white; transform:translate(-50%, -50%)">Move</div>

            <div id="targetLoc" style="position: absolute; top: 400px; left: 400px; font-size:50px; color:white">Move Here</div>

            <div id="hiddenPakyu" style="visibility:hidden; position:absolute; top: 100px; left: 100px; font-size:400px; color:white">PAKYU</div> -->

             <!-- <button style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 15px; color: red;">Quit</button> -->
        </div>


        <!-- <script>
            const moveit = document.getElementById('moveMe');
            const targetTopPosition = 400;
            const targetLeftPosition = 400;

            let topPosition = 100; // Initial position
            let leftPosition = 100;

            var pakme = document.getElementById('hiddenPakyu');


            document.addEventListener('keydown', (event) => {

                switch (event.key) {
                    case 'ArrowUp':
                        topPosition -= 100; // Move up
                        break;
                    case 'ArrowDown':
                        topPosition += 100; // Move down
                        break;
                    case 'ArrowLeft':
                        leftPosition -= 100; // Move left
                        break;
                    case 'ArrowRight':
                        leftPosition += 100; // Move right
                        break;
                }
                moveit.style.top = topPosition + 'px';
                moveit.style.left = leftPosition + 'px';

                leftPosition = Math.max(0, Math.min(leftPosition, window.innerWidth - moveit.offsetWidth));
                topPosition = Math.max(0, Math.min(topPosition, window.innerHeight - moveit.offsetHeight));

                if(topPosition == targetTopPosition && leftPosition == targetLeftPosition){
                    pakme.style.visibility = 'visible';
                }

                if(topPosition != targetTopPosition || leftPosition != targetLeftPosition){
                    pakme.style.visibility = 'hidden';
                }

            });

        </script> -->

        
        
@endsection

@section('title')
    <title>Admin Home Page</title>
@endsection