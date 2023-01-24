<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Migration seeder</title>
</head>
<body>
    <h1>Prova migration seeder</h1>
   @foreach($trains as $train)
    <div class="cards row">
        <div class="card">
            <h3>Treno:           {{ $train -> company }}</h3>
            <div>Parte da:       {{ $train -> start }}</div>
            <div>Arriva a:       {{ $train -> stop }}</div>
            <div>Ora di partenza:{{ $train -> time_start }}</div>
            <div>Ora di arrivo:  {{ $train -> time_stop }}</div>
            <div>Codice:         {{ $train -> code }}</div>
            <div>Carrozza:       {{ $train -> carriage }}</div>
            <div>Cancellato :    {{ $train -> cancelled }}</div>
        </div>
    @endforeach
    </div>
</body>
</html>
