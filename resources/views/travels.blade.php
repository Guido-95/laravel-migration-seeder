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
                <div> destination : {{$travel->destination}}</div>
                <div> airport: {{$travel->airport}}</div>
                <div> living room: {{$travel->living_room}}</div>
                <div> nights: {{$travel->nights}} </div>
                <div> price: {{$travel->price}} &euro;</div>
                <div> date: {{$travel->date}}</div>
            </div>
        @endforeach
    </div>
</body>
</html>