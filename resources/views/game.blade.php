<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet"href="{{asset('styles.css')}}">
</head>
<body>
    <h1>Rock Paper Scissors</h1>


    @if(isset($result))
        <p>You {{ $result }}!</p>
    @endif


    <form method="POST" action="{{ route('game.play') }}">
    @csrf
    <label for="rock">Rock</label>
    <input type="radio" name="choice" id="rock" value="rock">
    <label for="paper">Paper</label>
    <input type="radio" name="choice" id="paper" value="paper">
    <label for="scissors">Scissors</label>
    <input type="radio" name="choice" id="scissors" value="scissors">
    <button type="submit">Play</button>
    </form>
    @if(isset($result))
    <p>You played {{$player_choice}}</p>
    <p>Computer played {{$computer_choice}}</p>
    <p>You {{$result}}!</p>
    @endif    
<ul>
    @foreach ($last_games as $last_game)
    <li>
        <p>you{{$last_game->result}}</p>
        <p>you played{{$last_game->player_choice}}</p>
        <p>computer played{{$last_game->computer_choice}}</p>
</li>
@endforeach
</ul>
</body>
</html>
   