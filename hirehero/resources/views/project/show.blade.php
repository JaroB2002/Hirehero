<x-selectie._layout>
    <div class="container mx-auto px-4">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">{{$project->projectName}}</h1>
            <p class="text-gray-700">{{$project->author}}</p>
        </div>
        <div class="embed-responsive embed-responsive-21by9 relative w-full overflow-hidden" style="padding-top: 42.857143%">
            <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full" src="{{asset($project->thumbnail)}}" allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615"></iframe>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <section class="py-16">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap mb-32 -mx-8">
                    <div class="w-full lg:w-1/2 px-8">
                        <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Inleiding</h2>
                    </div>
                    <div class="w-full lg:w-1/2 px-8">
                        <p class="text-gray-600 text-lg mb-10">{{$project->introduction}}</p>
                        <img class="rounded-3xl w-full mb-24" src="{{asset($project->projectImage)}}" alt="">
                        <p>Caption van de image</p>

                    </div>
                </div>
                <div>
                <h3 class="text-2xl lg:text-4xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Wat hield het project in?</h3>
                <p class="text-gray-600 text-lg mb-10">{{$project->projectDescription}}</p>
                </div>
                <div>
                    <h3 class="text-2xl lg:text-4xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Conclusie</h3>
                    <p class="text-gray-600 text-lg mb-10">{{$project->conclusion}}</p>

                </div>


            </div>

        </section>

        <section class="py-16 bg-gray-100">
            <div class="container px-4 mx-auto">
                <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Deel dit project</h2>
                <div class="flex items-center">
                <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-linkedin.svg" alt="">
                  </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-facebook.svg" alt="">

                    </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-twitter.svg" alt="">

                    </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-instagram.svg" alt="">

                    </a>

                </div>

            </div>

        </section>

        <!--Tags-->

        <section class="py-16">
            <div class="container px-4 mx-auto">
                <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Tags</h2>
                <div class="flex items-center flex-row flex-wrap space-x-4">

                    @php
                    $tags = $project->tags;
                    //split de tags in een array
                    $tags = explode(' ', $tags);
                    @endphp

                    @foreach($tags as $tag)
                    <div class="mx-4 ">
                    <a href="/bedrijf/projecten?tag={{$tag}}">{{$tag}}</a>
                    </div>
                    @endforeach


                </div>

            </div>

        </section>

</x-selectie._layout>

                


