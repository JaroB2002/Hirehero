@props(['imgsrc'])

<div  class="flex flex-row w-max md:flex md:flex-row md:w-screen md:absolute md:ml-0 lg:flex lg:flex-row bg-white absolute lg:ml-[272px] lg:px-24 lg:w-full lg:h-16">

            <button id="horizontalNav" class=" z-10 md:absolute">
                <img src="/images/hamburgerIcon.svg" alt="" width="48">
            </button>
           


    <div class=" sm:ml-48 mt-2 flex flex-row md:ml-80 ">
        <img class="object-contain" src="{{asset('images/'). '/' . $imgsrc}}" width="48" alt="">
        <div class="ml-4 mt-1">
        <p class="text-sm font-epilogue">Bedrijf</p>
        {{$slot}}
    </div>

    </div>
<div class="flex flex-row ml-[1150px] md:ml-72 ">
<img class="" src="/images/meldingIcon.svg" width="24" alt="">
<div class="ml-8 md:hidden">
<a href="" class="flex flex-row my-2 bg-purple w-40 py-2 font-bold rounded-xl text-white"><img src="/images/addIcon.svg" alt="" class="ml-2 mr-2">Plaats vacature</a>

</div>
</div>
</div>