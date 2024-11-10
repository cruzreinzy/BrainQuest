<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="width:100vw; height:100vh;  overflow:hidden; margin:0; position: relative ;background-image: url('gamebg.jpg'); background-size: 1536px; background-repeat: no-repeat; background-attachment: fixed;">
    
    <header>
        <nav style="text-align:center; margin-top: 20px;">
            <a href="{{route('game')}}" style="text-decoration: none; font-size: 30px; font-family: Fantasy; color: black; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">BrainQuest Adventure</a>
        </nav>
    </header>

    <img id="jumpingImage" src="sonic.gif" alt="Sonic" style="bottom:0; transition:.3s; width: 160px; position:absolute; top: 450px; left: 190px;">

    <img id="movingImage"  src="rock.png" alt="Rock" style="bottom:0; width: 200px; position:absolute; top: 450px; left: 850px;">

    <div id="formmeow" style="position: absolute; left: 45%; top: 40%; text-align: center; background-color: white; display: none;">
    
    
    <form id="easyquestion" action="{{route('answer_checking')}}" method="post">
        @csrf
        <p style="text-align: center;">
            @php
            use App\Models\EasyQuestions;
            $firstQuestion = EasyQuestions::find(1);

            echo '<p>'.$firstQuestion->easyquestion.'</p>';
            @endphp
        </p>
        <input type="hidden" name="question_id" value="{{ $firstQuestion->id }}">
        <input type="text" id="easyanswer" name="easyanswer" style="text-align: center;" placeholder="Answer">
        <br><br>
        <button id="submit-easy">Submit</button>
    </form>
    </div>

    <div style="position:absolute; top: 650px; left: 1445px;">
    <a href="{{route('adminhome')}}" style="font-size: 20px; font-family:Arial, Helvetica, sans-serif; background-color: red; border-radius: 50%; outline: solid; outline-color: white; outline-width: 3.5px; text-decoration: none; padding-top: 19px; padding-bottom: 20px; padding-left: 17px; padding-right: 17px; color: white;">Exit</a>
    </div>

    <script>

$(document).ready(function() {
        $('easyquestion').on('submit', function(e) {
            e.preventDefault();
            console.log(e)

            $.ajax({
                url: "{{ route('answer_checking') }}",  // URL of the route
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // console.log(response.message)
                    $('#form-messages').html('<p style="color: green;">' + response.message + '</p>');
                },
                error: function(xhr, response) {
                    console.log(response)
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<ul style="color: red;">';
                    $.each(errors, function(key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul>';
                    $('#form-messages').html(errorHtml);
                }
            });
        });
    });
            
                var jumpingImage = document.getElementById('jumpingImage');
                var movingImage = document.getElementById('movingImage');
                
                var movingposition = 1500; // Start from the right edge of the viewport
                var jumping = false;

                function jump() {
                    if(!jumping){
                        jumping = true;
                        jumpingImage.style.transform = 'translateY(-280px)'; // Jump height

                        setTimeout(() => {
                            jumpingImage.style.transform = 'translateY(0)';
                            jumping = false;
                        }, 600); // Duration of jump
                    }
                }

                document.addEventListener('keypress', (e) => {
                    if (e.code === 'Space') {
                        event.preventDefault();
                        jump();
                    }
                });

                function moveImage() {
                    movingposition -= 10; // Move left by 2 pixels
                    if (movingposition < -100) { // If the image goes off the left side
                        movingposition = 1500; // Reset to the right side
                        // movingImage.style.visibility = "hidden";
                    }

                    if (movingposition == 140 && !jumping) {
                        console.log('YES')
                        document.querySelector('#formmeow').style['display'] = 'block'
                        // prompt('Question')
                    }
                    movingImage.style.left = movingposition + 'px'; // Update the image position
                    requestAnimationFrame(moveImage); // Continue the animation
                }
                
                moveImage();
                
                const easyQuestion = document.querySelector('#easyquestion')
                const submitMe = document.querySelector('#submit-easy')
                
                submitMe.addEventListener('click', () => {
                    easyQuestion.style.display = "none"
                    document.querySelector('#formmeow').style['display'] = 'none'
                })















//         let positionRock = 850
//         const intervalId = setInterval(() => {
//     // Update the position of the rock
//     positionRock -= 35;
//     rock.style['margin-left'] = `${positionRock}px`;

//     // Log the current position
//     console.log(positionRock);

//     // Check if the condition to stop the interval is met
//     if (positionRock <= 360) { // Change this condition as needed
//         clearInterval(intervalId);
//         document.querySelector('#formmeow').style['display'] = 'block'
//     }
// }, 100);


    </script>
</body>
</html>