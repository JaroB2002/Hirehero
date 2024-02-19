<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('stage.search')}}" method="post">
        @csrf

        <textarea name="searchTerm" id="" cols="30" rows="10">





        </textarea>

        <input type="submit" value="Submit">





    </form>







    
</body>
</html>