<x-layouts.bedrijf-layout>
    <div class="absolute ml-96 mt-64">
    <H1 class="text-4xl font-epilogue font-bolder">Instellingen</H1>
    <div class="mt-4">
    <h2 class="text-3xl font-epilogue font-bolder">Basisinformatie</h2>
    <p class="text-base font-epilogue ">Voeg teamgenoten toe aan je werkplek</p>
    </div>

    <h3 class="text-2xl font-epilogue font-bolder my-4" >Aantal werknemers: {{count($employeesInfo)}}</h3>
    <button class="bg-purple px-4 py-2 rounded-xl font-bolder text-white mb-4"><a href="{{route('bedrijf.team')}}">Voeg medebeheerders toe</a></button>

    <div>
        @foreach($employeesInfo as $employee)
            <div class="text-base font-epilogue">
                <p>{{$employee->voornaam}}</p>
                <p>{{$employee->familienaam}}</p>
                <p>{{$employee->email}}</p>
                <p>{{$employee->telefoonnummer}}</p>
                <p>{{$employee->functie}}</p>
                <button>Verwijder</button>
            </div>
        @endforeach

    </div>


</div>








</x-layouts.bedrijf-layout>