<x-layouts.bedrijf-layout>
    <div class="absolute ml-96 mt-64">
        <button class="p-2 "><span style="font-size: 16px;"><a href="/bedrijf/vacature/{{$vacature->id}}/edit">✎</a></span></button>
        <button><a href="/bedrijf/vacature/{{$vacature->id}}/destroy"><span class="text-base">&#x1F5D1;</span></a></button>


    <h1 class="font-bolder text-4xl font-epilogue">{{$vacature->title}}</h1>
    <p>{{$vacature->created_at->format('d-m-Y')}}</p>
    <p class="font-epilogue text-base">{{$vacature->description}}</p>

    <div>
        <h2>Minimum skills</h2>
        <!--Minimum skills moeten apart getoond worden, zonder komma-->
        @php 
            $minimumSkills = explode(',', $vacature->minimumSkills);
            $minimumSkills = explode(' ', $vacature->minimumSkills);


        @endphp
        <div class="flex flex-row space-x-4">
        @foreach($minimumSkills as $skill)
            <p class="bg-darkBlue px-4 py-2 rounded-xl font-bold font-epilogue text-base space-x-4">{{$skill}}</p>
        @endforeach
        </div>
        <div>
            <h2>Nice to have skills</h2>
            <!--Nice to have skills moeten apart getoond worden, zonder komma-->
            @php 
                $nicetoHaveSkills = explode(',', $vacature->nicetoHaveSkills);
                $nicetoHaveSkills = explode(' ', $vacature->nicetoHaveSkills);

            @endphp
            <div class="flex flex-row space-x-4">
            @foreach($nicetoHaveSkills as $skill)
                <p class="bg-darkBlue px-4 py-2 rounded-xl font-bold font-epilogue text-base">{{$skill}}</p>
            @endforeach
            </div>

            <div>
                <h2>Persoonlijkheid</h2>
                <!--Persoonlijkheid moet apart getoond worden, zonder komma-->
                @php 
                    $persoonlijkheid = explode(',', $vacature->persoonlijkheid);
                    $persoonlijkheid = explode(' ', $vacature->persoonlijkheid);

                @endphp
                <div class="flex flex-row space-x-4">
                @foreach($persoonlijkheid as $persoonlijk)
                    <p class="bg-darkBlue px-4 py-2 rounded-xl font-bold font-epilogue text-base">{{$persoonlijk}}</p>
                @endforeach
            </div>

            <div>
                <p>{{$vacature->categorie}}</p>

            </div>





        </div>

    </div>

</div>
</x-layouts.bedrijf-layout>
