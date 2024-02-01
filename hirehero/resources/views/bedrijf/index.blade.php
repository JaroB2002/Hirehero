<x-selectie._layout>
    <x-layouts.horizontalNav imgsrc="logo.png">
        <p class="text-base font-epilogue">{{Auth::user()->bedrijfnaam}}</p>
        
    </x-layouts.horizontalNav>

<x-layouts.navigation>

    <div>
    <img src="" alt="">
    </div>
    <p class="font-bold font-epilogue text-base">{{Auth::user()->voornaam . ' ' . Auth::user()->familienaam}}</p>
    <p class="text-sm font-epilogue">{{Auth::user()->email}}</p>


</x-layouts.navigation>

<x-layouts._header>
    {{--Naam van de pagina--}}
    <h1 class="font-epilogue font-bold text-2xl">Dashboard</h1>
    {{--Beschrijving van de pagina--}}  
    <p class="ml-16 mt-1 md:ml-80  lg:left-1/2 lg:absolute">Home / Dashboard </p>
</x-layouts._header>   

</x-selectie._layout>
