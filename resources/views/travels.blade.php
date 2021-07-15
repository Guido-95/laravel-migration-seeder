<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
        {{Route::currentRouteName()}}
    </title>
</head>
<body>
    <h1>Travels</h1>
    <div class="travels">
        @foreach ($travels as $travel)
            <div class="travel">
                <div> Destination : {{$travel->destination}}</div>
                <div> Airport: {{$travel->airport}}</div>
                <div> Living room: {{$travel->living_room}}</div>
                <div> Nights: {{$travel->nights}} </div>
                <div> Price: {{$travel->price}} &euro;</div>
                <div> Date: {{$travel->date}}</div>
            </div>
        @endforeach
    </div>
</body>
</html>