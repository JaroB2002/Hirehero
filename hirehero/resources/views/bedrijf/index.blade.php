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

</x-selectie._layout>
