<x-selectie._layout>


    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
              <div>
                <img class="mx-auto h-12 w-auto" src="Logo.png" alt="Logo project komt er nog in">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Registreer als werkgever</h2>
                <p class="mt-2 text-center text-sm text-gray-600"> of maak je <a href="register.php" class="font-medium text-indigo-600 hover:text-indigo-500">account</a> aan.</p>
              </div>
              <form class="mt-8 space-y-6" action="/bedrijf" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="email" class="sr-only">Email address bedrijf</label>
                    <input id="email" name="email" type="text" autocomplete="email" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">
                  </div>
                  <div>
                    <label for="Bedrijfsnaam" class="sr-only">Bedrijfsnaam</label>
                    <input id="Bedrijfsnaam" name="bedrijfnaam" type="text" autocomplete="Bedrijfsnaam" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Bedrijfsnaam">
                  </div>
                  <div>
                    <label for="name" class="sr-only">Naam gebruiker</label>
                    <input id="name" name="name" type="text" autocomplete="name" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Naam gebruiker">
                  </div>
                  <div>
                    <label for="employees" class="sr-only">Aantal werknemers</label>

                    <select name="employees" id="">

                      <option value="0<20">0 < 20</option>
                      <option value="20=<50">20 =< 50</option>
                      <option value="50=<100">50 =< 100</option>
                      <option value="100=<">100 =<</option>


                    </select>
                  </div>
                  <div class="flex">
                    <label for="telefoonnummer" class="sr-only">Telefoonnummer (optioneel)</label>
                    <select name="prefix" id="prefix">
                        <option value="+32">+32</option>
                        <option value="+31">+31</option>
                    </select>
                    <input id="telefoonnummer" name="telefoonnummer" type="tel" autocomplete="telefoon" class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Telefoonnummer" minlength="9" maxlength="9">
                    <x-input-error :messages="$errors->get('telefoonnummer')" class="mt-2" />

                  </div>
                  <div>
                    <label for="password" class="sr-only">Wachtwoord</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password">
                  </div>
                  <div class="flex items-center">
                    <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="bedrijf">
                  </div>
                </div>
                <div>
                  <x-selectie.button>
                     Registreer
                  </x-selectie.button>
                 </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="sm:w-2/4 hidden md:flex">
          <img class="w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="">
        </div>
      
      </div>



</x-selectie_layout>