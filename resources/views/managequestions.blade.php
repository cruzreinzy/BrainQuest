@extends('template.all')

@section('contents')
        <div style="text-align:center; margin-top: 10px;">

        <div>
        <table class="table text-center">

            <h2>Easy Mode Questions:</h2>

            <tbody class="table-secondary">
            @php

            $quests = DB::table('easy_questions')->get();

            foreach($quests as $quest) {
                echo '<p>' . $quest->id . '</p>';
                echo '<p>' . $quest->easyquestion . '</p>';
                echo '<p>' . $quest->easyanswer . '</p>';
                echo '<form action="' . route('user.delete', $quest->id) . '" method="POST">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<button>Delete Question</button>';
                echo '</form>';
            }
            @endphp
            </tbody>


            <h2>Medium Mode Questions:</h2>

            <tbody class="table-secondary">
            @php

            $quests = DB::table('medium_questions')->get();

            foreach($quests as $quest) {
                echo '<p>' . $quest->id . '</p>';
                echo '<p>' . $quest->mediumquestion . '</p>';
                echo '<p>' . $quest->mediumanswer . '</p>';
                echo '<form action="' . route('user.delete', $quest->id) . '" method="POST">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<button>Delete Question</button>';
                echo '</form>';
            }
            @endphp
            </tbody>


            <h2>Hard Mode Questions:</h2>

            <tbody class="table-secondary">
            @php

            $quests = DB::table('hard_questions')->get();

            foreach($quests as $quest) {
                echo '<p>' . $quest->id . '</p>';
                echo '<p>' . $quest->hardquestion . '</p>';
                echo '<p>' . $quest->hardanswer . '</p>';
                echo '<form action="' . route('user.delete', $quest->id) . '" method="POST">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<button>Delete Question</button>';
                echo '</form>';
            }
            @endphp
            </tbody>

            

        </table>
        </div>

        <br>
        <br>

        <a href="{{route('managequestionsmode')}}" style="text-decoration: none; border-style: solid; border-radius: 4px; border-color: brown; padding: 10px; font-size: 28px; color: black;">ADD QUESTION</a>
            <br>
            <br>
            <br>
        <a href="{{route('adminhome')}}" style="text-decoration: none; border-style: solid; border-color: brown; border-radius: 4px; padding: 10px; font-size: 15px; color: red;">BACK</a>
        
    </div>
@endsection

@section('title')
    <title>Manage Questions</title>
@endsection

<!-- @section('javascript')
<script src="{{ asset('assets/javascript/manage_user.js') }}"></script>
@endsection -->