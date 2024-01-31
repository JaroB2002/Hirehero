<x-selectie._layout>

    {{--Laat de status zien--}}
    
    {{--Hier komt de status van de selecttie dat de gebruiker heeft gemaakt
        We hebben 3 statussen:
        1. Account type
        2. Persoonlijke informatie
        3. Profieldata
        Deze statussen worden weergegeven in de vorm van een cirkel met een nummer erin, en een tekst eronde
        --}}
    
    
        <div class="relative md:h-screen flex overflow-hidden">
            <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
              <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
                <div class="max-w-md w-full mx-auto">
                  <div>
                    <img class="mx-auto h-12 w-auto" src="/images/logo.png" alt="Logo project komt er nog in">
                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Nog enkele vraagjes</h2>
                    <p class="mt-2 text-center text-sm text-gray-600"> We hebben nog wat info nodig om jouw profiel zo geoptimaliseerd mogelijk op maat te maken.</p>
                  </div>
                  <form class="mt-8 space-y-6" action="{{ route('student.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        <label for="interesse1" class="sr-only">Wat vind je interessant?</label>
                        <input id="interesse1" name="interesse" type="text" autocomplete="interesse" required class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Interesse">
                        <x-input-error :messages="$errors->get('interesse')" class="mt-2" />
                      </div>
                      <div>
                        <label for="interesse2" class="sr-only">Wat vind je interessant?</label>
                        <input id="interesse2" name="interesse2" type="text" autocomplete="interesse" required class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Interesse">
                        <x-input-error :messages="$errors->get('interesse2')" class="mt-2" />
    
                      </div>
                      <div>
                        <label for="desinteresse1" class="sr-only">Wat vind je minder leuk?
                        </label>
                        <input id="desinteresse1" name="desinteresse1" type="text" autocomplete="desinteresse1" required class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Desinteresse">
                        <x-input-error :messages="$errors->get('desinteresse1')" class="mt-2" />
    
                      </div>
                     
                      <div>
                        <label for="desinteresse2" class="sr-only">Wat vind je minder leuk?</label>
                        <input id="desinteresse2" name="desinteresse2" type="text" autocomplete="desinteresse2" required class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Desinteresse">
                        <x-input-error :messages="$errors->get('desinteresse2')" class="mt-2" />
    
                      </div>
                      <div>
                        <label for="stageBegin" class="sr-only">Wanneer begint je stage?</label>
                        <input id="stageBegin" name="stageBegin" type="date" autocomplete="datum" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        <x-input-error :messages="$errors->get('stageBegin')" class="mt-2" />
    
                      </div>
                      <div>
                        <label for="stageEinde" class="sr-only">Wanneer eindigt je stage?</label>
                        <input id="stageEinde" name="stageEinde" type="date" autocomplete="datum" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        <x-input-error :messages="$errors->get('stageEinde')" class="mt-2" />
    
                      </div>
                      <div>
                        <label for="cv" class="sr-only">Upload hier je cv</label>
                        <input id="cv" name="cv" type="file" class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('cv')" class="mt-2" />
    
                      </div>
                     
                
                    </div>
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <input id="geencv" name="geencv" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="geencv" class="ml-2 block text-sm text-gray-900">Ik heb nog geen CV</label>
                      </div>
                      <div class="flex items-center">
                        <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="student">
                      </div>
                    
                    </div>
                    <div>
                     <x-selectie.button disabled id="volgendeBtn">
                        Registreer
                     </x-selectie.button>
                    </div>
                  </form>
    
                  
                    
                </div>
              </div>
            </div>
            <div class="sm:w-2/4 hidden md:flex">
              <img class="w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="">
            </div>
          
          </div>
    
          <script>
            
            //Er moet of een cv geupload worden of de checkbox moet aangevinkt zijn
            const cv = document.getElementById('cv');
            const geencv = document.getElementById('geencv');
            const volgende = document.getElementById('volgendeBtn');

            cv.addEventListener('change', function(){
                volgende.disabled = false;
                volgende.classList.remove('bg-gray-100');
                volgende.classList.add('bg-purple/100');
                //Als ze er op klikken moet de checkbox uitgevinkt worden
                geencv.checked = false;
                
            });

            geencv.addEventListener('change', function(){
                volgende.disabled = false;
                volgende.classList.remove('bg-gray-100');
                volgende.classList.add('bg-purple/100');
            });

            



            






               
       
       
           </script>
    
    
    
    
    </x-selectie._layout>
    
    