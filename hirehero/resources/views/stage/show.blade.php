<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$vacature->title}}</title>
</head>
<body>

    <h1>{{$vacature->title}}</h1>
    <P>{{$vacature->description}} </p>
    <p>{{$vacature->minimumSkills}}</p>
    <p>{{$vacature->persoonlijkheid}}</p>

    <a href="{{$vacature->link}}">Bekijk vacature</a>
    <a href="/student/stage/{{$vacature->id}}/solliciteren">Solliciteer</a>
    <a href="/student/stage/{{$vacature->id}}">Niet geïnteresseerd</a>
    
</body>
</html>