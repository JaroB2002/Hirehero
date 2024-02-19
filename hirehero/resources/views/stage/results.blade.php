<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mijn aangepaste vacatures</title>
</head>
<body>

    <h1>Je relevante stages</h1>
    <p>Deze stages zijn voor jou relevant</p>

    @foreach($resultVacatures as $result)
        <h1>{{$result->title}}</h1>
        <p>{{$result->description}}</p>
        <p>{{$result->minimumSkills}}</p>
        <p>{{$result->persoonlijkheid}}</p>
        <p>{{$result->relevance_percentage}}</p>
        <p>{{$result->categorie}}</p>   

        <a href="/student/stage/{{$result->id}}">Bekijk vacature</a>
        <a href="">Solliciteer</a>
        <a href="">Niet geïnteresseerd</a>

    @endforeach


    
</body>
</html>