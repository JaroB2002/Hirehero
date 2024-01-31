
<nav id="nav" class="sm:w-[272px]  h-max sm:mt-48 pt-8 sm:absolute md:absolute md:hidden md:mt-16 md:w-1/2 md:h-screen lg:flex lg:flex-col lg:w-1/5 max-w-[272px] bg-[rgb(233,235,253)] lg:pt-8 ">

   

   <div class="flex flex-row ml-3">
    <img class="mr-4" src="/images/logo.png" width="32" alt="Logo Hirehero">
    <h3 class="font-bold font-epilogue text-2xl">Hirehero</h3>
</div>
    <div class="flex flex-col mb-8">
    <x-nav-link><img class="mr-4"  src="/images/homeIcon.svg" width="24" alt="">Dashboard</x-nav-link>
    <x-nav-link><img class="mr-4" src="/images/meldingIcon.svg" width="24" alt="">Meldingen</x-nav-link>
    <x-nav-link><img class="mr-4" src="/images/bedrijfIcon.svg" width="24" alt="">Bedrijfsprofiel</x-nav-link>
    <x-nav-link><img class="mr-4" src="/images/vacatureIcon.svg" width="24" alt="">Vacatures</x-nav-link>
    <x-nav-link><img class="mr-4" src="/images/searchIcon.svg" width="24" alt="">Zoek studenten</x-nav-link>
</div>

<div class="flex flex-col border-t-4 border-solid border-[rgb(204,204,245)]">
    <h3 class="px-2 mb-8 font-epilogue text-xl font-bold mt-8">INSTELLINGEN</h3>
    <x-nav-link><img class="mr-4"  src="/images/settingsIcon.svg" width="24" alt="">Instellingen</x-nav-link>
    <x-nav-link><img class="mr-4" src="/images/helpIcon.svg" width="24" alt="">Help center</x-nav-link>


</div>

<div class="ml-4 mt-24">
<div class="ml-0 md:block mb-24">
<a href="" class="flex flex-row my-2 bg-purple w-40 py-2 font-bold rounded-xl text-white"><img src="/images/addIcon.svg" alt="" class="ml-2 mr-2">Plaats vacature</a>
</div>

</div>


    
    {{$slot}}

    
</div>

</nav>