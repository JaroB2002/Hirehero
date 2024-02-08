

<x-selectie._layout>



    <header class="container mx-auto px-4">
        <h1 class="font-bolder font-epiilogue text-4xl">{{$company->bedrijfnaam}}</h1>
        <a href="{{$company->website}}">{{$company->bedrijfnaam}} website</a>
        <div>
            <img src="" alt="Logo van het bedrijf {{$company->bedrijfnaam}}">

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
            <div class="w-full lg:w-1/3 px-4 mb-12 lg:mb-0">
              <div class="flex items-center lg:justify-center">
                <div class="flex flex-shrink-0 mr-5 sm:mr-8 items-center justify-center p-1 w-16 sm:w-20 h-16 sm:h-20 rounded-full bg-blue-200">
                  <img src="/images/icon-phone.svg" alt="">
                </div>
                <div>
                  <span class="text-lg text-gray-500">Phone</span>
                  <span class="block text-lg font-semibold text-gray-900">{{$company->telefoonnummer}}</span>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-4 mb-12 lg:mb-0">
              <div class="flex items-center lg:justify-center">
                <div class="flex flex-shrink-0 mr-5 sm:mr-8 items-center justify-center p-1 w-16 sm:w-20 h-16 sm:h-20 rounded-full bg-yellow-200">
                  <img src="/images/icon-email.svg" alt="">
                </div>
                <div>
                  <span class="text-lg text-gray-500">Email</span>
                  <span class="block text-lg font-semibold text-gray-900">{{$company->email}}</span>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-4">
              <div class="flex items-center lg:justify-center">
                <div class="flex flex-shrink-0 mr-5 sm:mr-8 items-center justify-center p-1 w-16 sm:w-20 h-16 sm:h-20 rounded-full bg-green-200">
                  <img class="h-8" src="/images/icon-location.svg" alt="">
                </div>
                <div>
                  <span class="text-lg text-gray-500">Office</span>
                  <span class="block text-lg font-semibold text-gray-900">{{$company->plaats}}</span>
                </div>
              </div>
            </div>
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
            @foreach($employees as $teamlid)
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
            <div class="max-w-xs md:max-w-none mx-auto">
              <div class="flex flex-col items-center">
                <img class="block h-48 w-48 rounded-full" src="{{asset($teamlid->profile_picture)}}" alt="">
                <div class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                  <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-facebook.svg" alt="">
                  </a>
                  <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-linkedin.svg" alt="">
                  </a>
                  <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-instagram.svg" alt="">
                  </a>
                  <a class="inline-block p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-twitter.svg" alt="">
                  </a>
                </div>
                <h5 class="text-2xl font-bold">{{$teamlid->voornaam}}</h5>
                <span class="text-sm text-gray-500">{{$teamlid->functie}}</span>
              </div>
            </div>
          </div>
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
            @foreach($vacatures as $vacature)
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
        <div >
            <h2
                class="px-2 pb-2 mb-8 text-lg font-semibold border-b border-gray-300 dark:text-gray-300 dark:border-gray-700">
                Customer Reviews</h2>
            <div class="max-w-5xl px-4">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div>
                        <span class="inline-block text-5xl font-bold text-blue-700 dark:text-gray-300">4.5</span>
                        <span class="inline-block text-xl font-medium text-gray-700 dark:text-gray-400">
                            /5</span>
                        <ul class="flex items-center mt-4 mb-4">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p class="text-sm dark:text-gray-400">Average Rating and percentage per views
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center mb-2">
                            <div class="w-full h-4 mr-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="h-4 bg-blue-500 rounded-full dark:bg-blue-400" style="width: 75%"></div>
                            </div>
                            <div class="flex justify-end text-base font-medium dark:text-gray-400">91% </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="w-full h-4 mr-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="h-4 bg-blue-500 rounded-full dark:bg-blue-400" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end text-base font-medium dark:text-gray-400">45% </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="w-full h-4 mr-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="h-4 bg-blue-500 rounded-full dark:bg-blue-400" style="width: 25%"></div>
                            </div>
                            <div class="flex justify-end text-base font-medium dark:text-gray-400">25% </div>
                        </div>
                        <div class="flex items-center mb-2 ">
                            <div class="w-full h-4 mr-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="h-4 bg-blue-500 rounded-full dark:bg-blue-400" style="width: 14%"></div>
                            </div>
                            <div class="flex justify-end text-base font-medium dark:text-gray-400">14% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <h2
                class="px-2 pb-2 mb-8 text-lg font-semibold border-b border-gray-300 dark:text-gray-300 dark:border-gray-700">
                Comments</h2>
            <div class="max-w-5xl px-2">
                <div
                    class="p-3 mb-4 border border-gray-200 rounded-md bg-gray-50 lg:p-6 dark:bg-gray-700 dark:border-gray-700">
                    <div class="md:block lg:flex">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="avatar">
                        <div>
                            <div class="flex flex-wrap items-center justify-between mb-1">
                                <div class="mb-2 md:mb-0">
                                    <h2 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-400">
                                        Richard David
                                    </h2>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Joined 12 SEP 2024. </p>
                                </div>
                                <div>
                                    <ul class="flex items-center pb-1 mb-2">
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-half"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center">
                                        <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                                    </path>
                                                </svg></a>
                                            <span>12</span>
                                        </div>
                                        <div class="flex text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-chat"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                                    </path>
                                                </svg></a>
                                            <span>8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-gray-700 dark:text-gray-400">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="p-3 mb-4 border border-gray-200 rounded-md bg-gray-50 lg:p-6 dark:bg-gray-700 dark:border-gray-700">
                    <div class=" md:block lg:flex">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://i.postimg.cc/m2c3hQNk/pexels-andrea-piacquadio-3760373.jpg" alt="avatar">
                        <div>
                            <div class="flex flex-wrap items-center justify-between mb-1">
                                <div class="mb-2 md:mb-0">
                                    <h2 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-400">
                                        John William
                                    </h2>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Joined 12 SEP 2012. </p>
                                </div>
                                <div>
                                    <ul class="flex items-center pb-1 mb-2">
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-half"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center">
                                        <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                                    </path>
                                                </svg></a>
                                            <span>12</span>
                                        </div>
                                        <div class="flex text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-chat"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                                    </path>
                                                </svg></a>
                                            <span>8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-gray-700 dark:text-gray-400">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
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
                <div
                    class="p-3 mb-4 border border-gray-200 rounded-md bg-gray-50 lg:p-6 dark:bg-gray-700 dark:border-gray-700">
                    <div class="md:block lg:flex">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="avatar">
                        <div>
                            <div class="flex flex-wrap items-center justify-between mb-1">
                                <div class="mb-2 md:mb-0">
                                    <h2 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-400">
                                        Richard David
                                    </h2>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Joined 12 SEP 2024. </p>
                                </div>
                                <div>
                                    <ul class="flex items-center pb-1 mb-2">
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-half"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center">
                                        <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                                    </path>
                                                </svg></a>
                                            <span>12</span>
                                        </div>
                                        <div class="flex text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-chat"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                                    </path>
                                                </svg></a>
                                            <span>8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-gray-700 dark:text-gray-400">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="p-3 mb-4 border border-gray-200 rounded-md bg-gray-50 lg:p-6 dark:bg-gray-700 dark:border-gray-700">
                    <div class=" md:block lg:flex">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://i.postimg.cc/m2c3hQNk/pexels-andrea-piacquadio-3760373.jpg" alt="avatar">
                        <div>
                            <div class="flex flex-wrap items-center justify-between mb-1">
                                <div class="mb-2 md:mb-0">
                                    <h2 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-400">
                                        John William
                                    </h2>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Joined 12 SEP 2024. </p>
                                </div>
                                <div>
                                    <ul class="flex items-center pb-1 mb-2">
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-half"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center">
                                        <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                                    </path>
                                                </svg></a>
                                            <span>12</span>
                                        </div>
                                        <div class="flex text-sm text-gray-700 dark:text-gray-400">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="w-4 h-4 mr-1 text-blue-400 bi bi-chat"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                                    </path>
                                                </svg></a>
                                            <span>8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-gray-700 dark:text-gray-400">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





</x-selectie.layout>    



