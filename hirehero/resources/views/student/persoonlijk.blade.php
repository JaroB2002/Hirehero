<x-selectie._layout>

    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
              <div>
                <img class="mx-auto h-12 w-auto" src="./images/logo.png" alt="Logo project komt er nog in">
                <h1>Wat voor persoon ben je?</h1>
                <p class="mt-2 text-center text-sm text-gray-600">Wat voor persoon ben je?
                    Kies 5 woorden die je het best omschrijven.</p>

                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Kies 5 woorden</h2>
              </div>
        <div>
            <form action="/student/persoonlijk" method="Post">
                @csrf

                <div class="lg:grid lg:grid-cols-8 lg:gap-24">
        {{--Hier komen de persoonlijkheden waaruit ze kunnen kiezen, ze moeten er 5 kiezen--}}
                    <div class="bg-gray-200 w-64">
                        <input type="checkbox" name="persoonlijkheid[]"value="vriendelijk"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Vriendelijk</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="ijverig"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Ijverig</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="extravert"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Extravert</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="introvert"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Introvert</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="gemotiveerd"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Gemotiveerd</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="leergierig"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Leergierig</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="sociaal"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Sociaal</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="open"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Open</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="initiatief"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Initiatief</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="team player"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Team player</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="grappig"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Grappig</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="precies"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Precies</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="creatief"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Creatief</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="analytisch"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Analytisch</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="optimistisch"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Optimistisch</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="Communicatief sterk"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Communicatief sterk</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="flexibel"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Flexibel</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="doorzetter"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Doorzetter</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="zelfstandig"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Zelfstandig</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="empathisch"  class="opacity-0 w-52">
                        <label for="persoonlijkheid">Empathisch</label>
                    </div>
                    <div>
                        <input type="checkbox" name="persoonlijkheid[]"value="positief" class="opacity-0 w-52">
                        <label for="persoonlijkheid">Positief</label>
                    </div>
                    <div class="bg-gray-20 w-52">
                        <input type="checkbox" name="persoonlijkheid[]"value="leiderschap" class="opacity-0 w-52 cursor-pointer">
                        <label for="persoonlijkheid[]">Leiderschap</label>
                    </div>
                    <x-input-error :messages="$errors->get('persoonlijkheid')" class="mt-2" />
                    </div>

                    <div id="gekozenwoorden" class="lg:flex">


                    </div>

                        <script>

                            //laat hier de woorden zien die ze gekozen hebben
                            let persoonlijkheden = [];

                            let persoonlijkheid = document.getElementsByName('persoonlijkheid[]');
                            let gekozenwoorden = document.getElementById('gekozenwoorden');

                            //Er wordt geklikt op een persoonlijkheid

                            for (let i = 0; i < persoonlijkheid.length; i++) {
                                persoonlijkheid[i].addEventListener('click', function () {
                                    //Als het woord nog niet in de array zit, voeg het toe
                                    if (!persoonlijkheden.includes(persoonlijkheid[i].value)) {
                                        persoonlijkheden.push(persoonlijkheid[i].value);
                                    } else {
                                        //Als het woord al in de array zit, verwijder het
                                        persoonlijkheden.splice(persoonlijkheden.indexOf(persoonlijkheid[i].value), 1);
                                    }
                                    //Laat de woorden zien die ze gekozen hebben
                                    gekozenwoorden.innerHTML = persoonlijkheden.join(', ');
                                });
                            }
                                    
                                    
                                        

                                    
                                
                            

                            </script>
                    
                            <x-selectie.button>
                                Sla woorden op
                            </x-selectie.button>

    
        </form>
</div>
</div>
</div>
<div class="sm:w-2/4 hidden md:flex">
<img class="w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="">
</div>

</div>




</x-selectie._layout>