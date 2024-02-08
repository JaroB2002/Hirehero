<x-selectie._layout>

    
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
        @php 
        //projecten mogen niet meer dan 4 zijn, als het er toch meer zijn, dan worden die niet getoond, en verschijnt er een knop "meer" die naar de projecten pagina leidt

        $maxProjects = 4;

        $totalProjects = count($projects);


        @endphp

        @foreach($projects as $project  )
        <!-- image - start -->
        <!-- image - start -->
        <a href="/bedrijf/project/{{$project->projectName}}"
            class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
            <img src="{{asset($project->thumbnail)}}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">{{$project->projectName}}</span>
        </a>

    
    @endforeach
    

        
        <!-- image - end -->
    </div>


</x-selectie._layout>