

<x-selectie._layout>



    <header class="container mx-auto px-4">
        <h1 class="font-bolder font-epiilogue text-4xl">{{$company->bedrijfnaam}}</h1>
        <a href="{{$company->website}}">{{$company->bedrijfnaam}} website</a>
        <div>
            <img src="/images/logo.png" width="24" alt="Logo van het bedrijf {{$company->bedrijfnaam}}">

        </div>
        <p>Oprichtings datum: {{$company->oprichtingsdatum ? $company->oprichtingsdatum->format('d-m-Y') : 'Hier komt de datum'}}</p>
        <p>Aantal werknemers: {{$company->employees}}</p>
        <p>Locatie: {{$company->plaats}}</p>
        <p>Sector: {{$company->sector}}</p>

    </header>

    <main>

        <div class="container mx-auto px-4">
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-4">Bedrijfsvoorstelling</h1>
                <p class="text-gray-700">{{$bedrijfsprofiel->bedrijfVoorstelling ?? 'Typ hier iets leuk over je bedrijf'}}</p>
            </div>
            @if($bedrijfsprofiel && $bedrijfsprofiel->bedrijfVideo)

            <div class="embed-responsive embed-responsive-21by9 relative w-full overflow-hidden" style="padding-top: 42.857143%">
                <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full" src="{{asset($bedrijfsprofiel->bedrijfVideo)}}" allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615"></iframe>
              
            </div>
            @else 

            <div class="embed-responsive embed-responsive-21by9 relative w-full overflow-hidden" style="padding-top: 42.857143%">
                <img class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"  src='/images/gradient.svg' allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615">
            </div>
            @endif


        </div>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>    
        <section class="py-16">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap mb-32 -mx-8">
                    <div class="w-full lg:w-1/2 px-8">
                        <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Sfeerbeelden</h2>
                        @foreach($galleries->slice(0,2) as $gallery)
                        <img class="rounded-3xl w-full mb-8" src="{{ asset($gallery->image)}}" alt="">
                        @endforeach
                    </div>
                    <div class="w-full lg:w-1/2 px-8">
                        @if($galleries->count() >= 3)
                        <img class="rounded-3xl w-full mb-24" src="{{asset($galleries[2]->image)}}" alt="">
                        @endif
                        <p class="text-gray-600 text-lg mb-10">{{$bedrijfBio = $bedrijfsprofiel->bio ?? 'Hier komt de bio van uw bedrijf.'}} </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 md:py-32 overflow-hidden">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
            <img class="absolute top-0 left-0" src="saturn-assets/images/contact/light-left-blue.png" alt="">
    <img class="absolute bottom-0 right-0 -mb-20" src="saturn-assets/images/contact/light-orange-right.png" alt="">
    <div class="relative container px-4 mx-auto">
      <div class="max-w-7xl mx-auto">
        <div class="max-w-2xl 1text-center mx-auto mb-20">
          <span class="inline-block py-1 px-3 mb-4 text-xs font-semibold text-orange-900 bg-orange-50 rounded-full">READY TO SUPPORT US</span>
          <h1 class="font-heading text-5xl xs:text-6xl font-bold text-gray-900 mb-4">
            <span>Let’s stay</span>
            <span class="font-serif italic">connected</span>
          </h1>
          <p class="text-xl text-gray-500 font-semibold">{{$bedrijfsprofiel->doel ?? "schrijf hier iets over je bedrijf"}}</p>
        </div>
        <div class="xs:max-w-sm lg:max-w-none mx-auto">
          <div class="flex flex-wrap items-center -mx-4 mb-18">
            <x-socials.companyIcons>
                <x-slot name="src">icon-phone.svg</x-slot>
                <x-slot name="title">Telefoon</x-slot>
                <x-slot name="slot">{{$company->telefoonnummer}}</x-slot>
            </x-socials.companyIcons>

            <x-socials.companyIcons bgColor="bg-yellow-200">
                <x-slot name="src">icon-email.svg</x-slot>
                <x-slot name="title">E-mail</x-slot>
                <x-slot name="slot">{{$company->email}}</x-slot>
            </x-socials.companyIcons>

            <x-socials.companyIcons bgColor="bg-green-200">
                <x-slot name="src">icon-location.svg</x-slot>
                <x-slot name="title">Locatie</x-slot>
                <x-slot name="slot">{{$company->plaats}}</x-slot>

            </x-socials.companyIcons>
            
            
            
            
          </div>
        </div>
       
    </div>
  </section>

  <div class="bg-white dark:bg-gray-800 h-screen h-full py-6 sm:py-8 lg:py-12 mb-64"> <!-- Hier de margin-bottom toegevoegd -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <div class="mx-auto max-w-screen-lg px-4 md:px-8"> <!-- Hier de totale breedte aanpassen -->
        <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
            <div class="flex items-center gap-12">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">Projecten van ex-stagiairs</h2>

                <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                    Bekijk hier de fantastische projecten van onze ex-stagiars!
                </p>
            </div>

            <a href="#"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                Meer
            </a>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            @php 
            //projecten mogen niet meer dan 4 zijn, als het er toch meer zijn, dan worden die niet getoond, en verschijnt er een knop "meer" die naar de projecten pagina leidt

            $maxProjects = 4;

            $totalProjects = count($projects);


            @endphp

            @foreach($projects as $key => $project  )
            @if($key < $maxProjects)
            @if($loop->iteration == 1 || $loop->iteration == 4)
            <!-- image - start -->
            <!-- image - start -->
            <a href="/bedrijf/projecten/{{$project->projectName}}"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="{{asset($project->thumbnail)}}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">{{$project->projectName}}</span>
            </a>

        @else

            <!-- image - end -->

            <!-- image - start -->
            <a href="/bedrijf/projecten/{{$project->projectName}}"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="{{asset($project->thumbnail)}}" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">{{$project->projectName}}</span>
            </a>
        @endif
        @endif

        @if ($key == $maxProjects - 1 && $totalProjects > $maxProjects)

        <button><a href="/bedrijf/project">Bekijk alle projecten</a></button>

        @endif
        @endforeach
        

            
            <!-- image - end -->
        </div>
    </div>
</div>

<section class="relative py-20 md:py-24 bg-gray-100 overflow-hidden">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  
    <img class="absolute top-0 left-0" src="/images/light-blue.png" alt="">
    <img class="absolute bottom-0 right-0" src="/images/light-orange.png" alt="">
    <div class="relative container px-4 mx-auto">
      <div class="max-w-md md:max-w-2xl mx-auto xl:max-w-7xl">
        <div class="flex flex-wrap mb-20 -mx-4 items-center">
          <div class="w-full xl:w-1/2 px-4">
            <div>
              <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold text-gray-900 mb-8">
                <span>Get to know our amazing</span>
                <span class="font-serif italic">Team</span>
              </h1>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4 -mb-12">

            @php 

            $maxEmployees = 8;

            $totalEmployees = count($employees);


            @endphp

            @foreach($employees as $key => $teamlid)

            @if($key < $maxEmployees)

          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
            <div class="max-w-xs md:max-w-none mx-auto">
              <div class="flex flex-col items-center">
                <img class="block h-48 w-48 rounded-full" src="{{asset($teamlid->profile_picture)}}" alt="">
                <div class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                 <x-socials.socialMedia href="#" src="icon-facebook.svg"></x-socials.socialMedia>
                 <x-socials.socialMedia href="#" src="icon-linkedin.svg"></x-socials.socialMedia>
                 <x-socials.socialMedia href="#" src="icon-instagram.svg"></x-socials.socialMedia>
                <x-socials.socialMedia href="#" src="icon-twitter.svg"></x-socials.socialMedia>
                </div>
                <h5 class="text-2xl font-bold">{{$teamlid->voornaam}}</h5>
                <span class="text-sm text-gray-500">{{$teamlid->functie}}</span>
              </div>
            </div>
          </div>
          @endif

            @endforeach
        </div>
        <div class="mt-20 text-center">
          <a class="relative group inline-block py-4 px-6 text-orange-50 font-semibold bg-orange-900 rounded-full overflow-hidden" href="#">
            <div class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
            <div class="relative flex items-center justify-center">
              <span class="mr-4">Bekijk alle teamleden</span>
              <span>
                <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.83 5.28999L2.59 1.04999C2.49704 0.956266 2.38644 0.881872 2.26458 0.831103C2.14272 0.780334 2.01202 0.754196 1.88 0.754196C1.74799 0.754196 1.61729 0.780334 1.49543 0.831103C1.37357 0.881872 1.26297 0.956266 1.17 1.04999C0.983753 1.23736 0.879211 1.49081 0.879211 1.75499C0.879211 2.01918 0.983753 2.27263 1.17 2.45999L4.71 5.99999L1.17 9.53999C0.983753 9.72736 0.879211 9.98081 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.70999C6.92373 6.61703 6.99813 6.50643 7.04889 6.38457C7.09966 6.26271 7.1258 6.13201 7.1258 5.99999C7.1258 5.86798 7.09966 5.73728 7.04889 5.61542C6.99813 5.49356 6.92373 5.38296 6.83 5.28999Z" fill="currentColor"></path>
                </svg>
              </span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="py-24 bg-blueGray-50 overflow-hidden">
    <div class="container px-4 mx-auto">
      <div class="md:max-w-6xl mx-auto">
        <div class="flex flex-wrap -m-3.5 mb-10">

            @php

            $maxVacatures = 6;

            $totalVacatures = count($vacatures);

            @endphp



            @foreach($vacatures as $key => $vacature)
            @if($loop->iteration <= $maxVacatures)
          <div class="w-full md:w-1/3 p-3.5">
            <a href="#">
              <div class="relative p-6 h-full bg-white border hover:border-gray-300 rounded-xl">
                <img class="absolute left-0 top-0" src="/images/gradient.svg" alt="">
                <div class="relative z-10 flex flex-col justify-between h-full">
                  <div class="mb-24 flex-1">
                    <h3 class="mb-2 text-lg font-bold font-heading leading-snug">{{$vacature->title}}</h3>
                    <p class="text-sm text-gray-500 font-medium">
                      <span>{{$company->bedrijfnaam}}</span>
                      <span class="px-2">•</span>
                      <span>{{$company->plaats}}</span>
                    </p>
                  </div>
                  <div class="flex-1">
                    <img src="/images/brand-medium.png" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
            @endif
            @endforeach
        </div>
        <a class="flex justify-center items-center text-center font-semibold text-indigo-600 hover:text-indigo-700 leading-normal" href="#">
          <span class="mr-2.5">Bekijk alle {{count($vacatures)}} jobs</span>
          <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.83333 3.33337L14.5 8.00004M14.5 8.00004L9.83333 12.6667M14.5 8.00004L2.5 8.00004" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
  
  <section class=""><script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <div class="container mx-auto px-4">
      <div class="mb-8">
      <!-- Responsive Google Map -->
      <div class="relative h-0 overflow-hidden mb-6" style="padding-bottom: 56.25%;">
        <iframe
          class="absolute top-0 left-0 w-full h-96"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3353.096656292789!2d-122.08217698485344!3d37.42205787981786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbc7b4be10725%3A0xf59d178a87b32f52!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1610035984427!5m2!1sen!2sus"
          frameborder="0"
          style="border:0;"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
      </div>
  </section>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<section class="py-10 lg:py-16 bg-gray-100 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">

                    <x-reviews.average score="4.5" firstPercentage="91" secondPercentage="45" thirdPercentage="14" fourthPercentage="1">
                    </x-reviews.average>
        <div class="mt-10">
            <h2
                class="px-2 pb-2 mb-8 text-lg font-semibold border-b border-gray-300 dark:text-gray-300 dark:border-gray-700">
                Comments</h2>
                <div class="max-w-5xl px-2">
                    <x-reviews.review title="Richard David" likes="12" comments="8" date="Joined 12 SEP 2024.">
                        
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                             Ipsum
                             has been the industry's standard dummy text ever since the 1500s, when an unknown
                             printer took a galley of type and scrambled it to make a type specimen book. It has
                             survived not only five centuries,
                    </x-reviews.review>
                    <x-reviews.review title="Richard David" likes="12" comments="8" date="Joined 12 SEP 2024.">
                        
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                             Ipsum
                             has been the industry's standard dummy text ever since the 1500s, when an unknown
                             printer took a galley of type and scrambled it to make a type specimen book. It has
                             survived not only five centuries,
                 </x-reviews.review>
            </div>
        </div>
    </div>
</section><script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<section class="py-10 lg:py-4 bg-gray-100 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
       
              
        <div class="mt-0">
            <h2
                class="px-2 pb-2 mb-8 text-lg font-semibold border-b border-gray-300 dark:text-gray-300 dark:border-gray-700">
                Reviews</h2>
            <div class="max-w-5xl px-2">
                <x-reviews.review title="Richard David" likes="12" comments="8" date="Joined 12 SEP 2024.">
                    
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                         Ipsum
                         has been the industry's standard dummy text ever since the 1500s, when an unknown
                         printer took a galley of type and scrambled it to make a type specimen book. It has
                         survived not only five centuries,
             </x-reviews.review>
             <x-reviews.review title="John William" likes="12" comments="8" date="Joined 12 SEP 2012.">
                 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                         Ipsum
                         has been the industry's standard dummy text ever since the 1500s, when an unknown
                         printer took a galley of type and scrambled it to make a type specimen book. It has
                         survived not only five centuries,
             </x-reviews.review>
         </div>
            </div>
        </div>
    </div>
</section>





</x-selectie.layout>    



