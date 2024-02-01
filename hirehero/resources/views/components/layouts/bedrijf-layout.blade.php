<x-selectie._layout>
    <x-layouts.navigation>

    </x-layouts.navigation>

    <x-layouts.horizontalNav imgsrc="logo.png">
        <p class="text-base font-epilogue">{{Auth::user()->bedrijfnaam}}</p>
    </x-layouts.horizontalNav>

    <x-layouts._header>
        {{--Naam van de pagina--}}
        <h1 class="font-epilogue font-bold text-2xl">Dashboard</h1>
        {{--Beschrijving van de pagina--}}
        <p class="ml-16 mt-1 md:ml-56  lg:left-1/2 lg:absolute">Home / Dashboard </p>

    </x-layouts._header>


</x-selectie._layout>