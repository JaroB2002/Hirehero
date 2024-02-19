<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$vacature->title}}</title>
</head>
<body>

    <h1>Upload je CV</h1>
    <P>Laat van je horen. Upload je CV, videoCV en motivatiebrief</p>

        <div>
            <h2>{{$company}}</h2>
            <p>{{$vacature->title}}</p>
        </div>
    
    <form action="/student/stage/{{$vacature->id}}/solliciteren" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Upload je CV</label>
        <input type="file" name="cv" id="cv" accept=".pdf" value="{{$studentCV ?? ''}}">
        <x-input-error :messages="$errors->get('cv')" class="mt-2" />

        <label for="">Upload je motivatiebrief</label>
        <input type="file" name="motivatiebrief" id="motivatiebrief" accept=".pdf" value="{{$studentMotivatie ?? ''}}">
        <x-input-error :messages="$errors->get('motivatiebrief')" class="mt-2" />

        @if ($vacature->sollicitatieType == 'Verplicht' || $vacature->sollicitatieType == 'Optioneel')
            @if($vacature->sollicitatieType == 'Optioneel')
                <p>Optioneel</p>
            @endif
        <label for="">Upload je videoCV</label>
        <input type="file" name="videocv" id="videocv" accept=".mp4">
        <x-input-error :messages="$errors->get('videocv')" class="mt-2" />

        @endif


        <button type="submit">Solliciteer nu</button>

    </form>


    
    
</body>
</html>