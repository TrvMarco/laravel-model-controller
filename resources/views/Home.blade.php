<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Films:</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h3>{{$movie->title}}</h3>
            <ul>
                <li><strong>Titolo originale:</strong> {{$movie->original_title}}</li>
                <li><strong>Nazionalità:</strong> {{$movie->nationality}}</li>
                <li><small>Data: {{$movie->date}}</small></li>
                <li><small>Voto: {{$movie->vote}}</small></li>
            </ul>
        </li>

        {{-- <li><x-movie-card :title="$movie['title'] :date="$movie['date']"/></li> --}}
        @endforeach
    </ul>
</body>
</html>