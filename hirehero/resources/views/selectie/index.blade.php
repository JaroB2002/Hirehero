    
<x-selectie._layout>
    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
            <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
                <div class="max-w-md w-full mx-auto">
                    <h1 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Registreren</h1>
                    <p class="mt-2 text-center text-base text-gray-600">Vul dit formulier in met de benodigde informatie.</p>
                        <div class="status mx-8 mt-8 grid grid-cols-3">
                             <div>
                                <x-selectie.active>
                                    <p class="text-left text-xl text-white">1</p>
                                </x-selectie.active>

                                    <p class=" mt-2 text-left text-sm text-gray-600">Account type</p>

                              </div>
                                <div>
                                    <div class="inline-block px-4 py-2 mx-3 rounded-full border border-solid border-gray-200">
                                        <p class=" text-left text-xl text-gray-600">2</p>
                                    </div>
                                        <p class="mt-2 text-left text-sm text-gray-600">Persoonlijlke informatie</p>
                                </div>
                                <div>
                                    <div class="inline-block px-4 py-2 rounded-full border border-solid border-gray-200">
                                        <p class=" text-left text-xl text-gray-600">3</p>
                                    </div>
                                        <p class="mt-2 text-left text-sm text-gray-600">Profieldata</p>

                                </div>

                        
                            </div>


                        <form action="{{ route('selectie.process') }}" method="post" class="mx-8 mt-16">
                            @csrf
                                <div id="studentSelect" class="flex flex-row py-4 pr-4 rounded-xl">

                                    <div class="w-32 max-w-[64px] max-h-[64px] ml-4 border-solid border-4 border-purple ">
                                        <img class="w-24 mx-2 max-w-[40px] mt-2" src="/images/businesscard.svg" alt="">
                                    </div>  

                                    <input type="radio" name="selectie" id="student" value="student" class="w-24 opacity-0">
                                    <label for="student" class="mt-0 tracking-tight text-gray-900 -ml-16"> <h2 class="text-left text-2xl font-bold">Ik ben een student</h2> <p class="text-sm">Ik wil de perfecte stageplaats vinden.</p></label>
                                </div>

                                <div id="bedrijfSelect" class="flex flex-row mt-8 py-4 pr-4 rounded-xl">
                                    <div class="w-32 max-w-[64px] max-h-[64px] ml-4 border-solid border-4 border-purple ">
                                        <img class="w-24 mx-2 max-w-[40px] mt-2" src="/images/businesscard.svg" alt="">
                                    </div> 
                                    <input type="radio" name="selectie" id="bedrijf" value="bedrijf" class="w-24 opacity-0" >
                                    <label for="bedrijf" class="mt-0 tracking-tight text-gray-900 -ml-16"> <h2 class="text-left text-2xl font-bold">Ik ben een bedrijf</h2> <p class="text-sm">Ik wil de perfecte stagiair vinden.</p></label>

                                </div>  

                                <div class="mt-8 flex flex-col items-center">
                                    <x-selectie.button id="volgendeBtn" disabled>
                                        Volgende
                                    </x-selectie.button>
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </div>

                        </form>
                </div>
            </div>
        </div>
            <div class="hidden md:block md:w-1/2 md:relative">
                <img class="absolute h-full w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="hero">
            </div>
    </div>

    <script>
     //Klik op de div om de radio button te selecteren

        const studentSelect = document.getElementById('studentSelect');
        const bedrijfSelect = document.getElementById('bedrijfSelect');

        studentSelect.addEventListener('click', function(){
            document.getElementById('volgendeBtn').disabled = false;
            document.getElementById('volgendeBtn').classList.remove('bg-gray-100');
            document.getElementById('volgendeBtn').classList.add('bg-purple');

            studentSelect.classList.add('bg-purple');
            //Als ze op de div klikken, dan moet de radio button ook geselecteerd worden
            document.getElementById('student').checked = true;
            document.getElementById('bedrijf').checked = false;

            bedrijfSelect.classList.remove('bg-purple');

            




        });

        bedrijfSelect.addEventListener('click', function(){


            document.getElementById('volgendeBtn').disabled = false;
            document.getElementById('bedrijf').checked = true;
            document.getElementById('student').checked = false;
            document.getElementById('volgendeBtn').classList.add('bg-purple');

            bedrijfSelect.classList.add('bg-purple');
            studentSelect.classList.remove('bg-purple');



        });

        


    </script>


</x-selectie._layout>