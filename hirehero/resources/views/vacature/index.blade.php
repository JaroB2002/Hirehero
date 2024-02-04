<x-layouts.bedrijf-layout>

    @foreach($vacatures as $vacature)
        <div class="flex flex-col items-center absolute ml-96 mt-48">
            <h1 class="text-4xl font-epilogue font-bolder">{{$vacature->title}}</h1>
            <p class="text-base font-epilogue">{{$vacature->description}}</p>
            <p class="text-base font-epilogue">VideoCV: {{$vacature->sollicitatieType}}</p>
            <p class="text-base font-epilogue">Aantal plaatsen: {{$vacature->aantalPlaatsen}}</p>
            <form action="">

                <select name="status" id="">
                    <option value="open">Live</option>
                    <option value="gesloten">Gesloten</option>
                    <option value="verborgen">Verborgen</option>  
                </select>


            </form>
            <button class="bg-purple px-4 py-2 rounded-xl font-bolder text-white mb-4"><a href="/*route('vacature.show', $vacature)*/">Bekijk vacature</a></button>

        </div>
    @endforeach







</x-layouts.bedrijf-layout>
