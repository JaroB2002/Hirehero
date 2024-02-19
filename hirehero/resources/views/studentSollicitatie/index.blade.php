<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Al mijn sollicitaties</h1>
    <p>Hier heb ik gesolliciteerd</p>

    @foreach($sollicitaties as $sollicitatie)
        <h1>{{$sollicitatie->vacature->title}}</h1>
        <p>{{$sollicitatie->vacature->description}}</p>
        <p>{{$sollicitatie->status}}</p>	
        <p>{{$sollicitatie->created_at->format('d/m/y')}}</p>

        <a href="/student/stage/{{$sollicitatie->vacature->id}}">Bekijk vacature</a>
    @endforeach
        
    
</body>
</html>