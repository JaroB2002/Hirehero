<x-selectie._layout>


    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
              <div>
                <img class="mx-auto h-12 w-auto" src="images/logo.png" alt="Logo project komt er nog in">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Registreer als werkgever</h2>
                <p class="mt-2 text-center text-sm text-gray-600"> of maak je <a href="register.php" class="font-medium text-indigo-600 hover:text-indigo-500">account</a> aan.</p>
              </div>
              <form class="mt-8 space-y-6" action="/bedrijf" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="email" class="sr-only">Email address bedrijf</label>
                    <input id="email" name="email" type="text" autocomplete="email" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div>
                    <label for="Bedrijfsnaam" class="sr-only">Bedrijfsnaam</label>
                    <input id="Bedrijfsnaam" name="bedrijfnaam" type="text" autocomplete="Bedrijfsnaam" required class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Bedrijfsnaam">
                    <x-input-error :messages="$errors->get('bedrijfnaam')" class="mt-2" />

                  </div>
                  <div>
                    <label for="voornaam" class="sr-only">Voornaam</label>
                    <input id="voornaam" name="voornaam" type="text" autocomplete="voornaam" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Voornaam beheerder">
                    <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />

                  </div>
                  <div>
                    <label for="familienaam" class="sr-only">Familienaam</label>
                    <input id="familienaam" name="familienaam" type="text" autocomplete="familienaam" required class="relative block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Familienaam beheerder">
                    <x-input-error :messages="$errors->get('familienaam')" class="mt-2" />

                  </div>
                  <div>
                    <label for="employees" class="sr-only">Aantal werknemers</label>

                    <select name="employees" id="" class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 pl-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                      <option value="0<20">0 < 20</option>
                      <option value="20=<50">20 =< 50</option>
                      <option value="50=<100">50 =< 100</option>
                      <option value="100=<">100 =<</option>


                    </select>
                    <x-input-error :messages="$errors->get('employees')" class="mt-2" />

                  </div>
                  <div class="flex">
                    <label for="telefoonnummer" class="sr-only">Telefoonnummer (optioneel)</label>
                    <select name="prefix" id="prefix">
                        <option value="+32">+32</option>
                        <option value="+31">+31</option>
                    </select>

                    <input id="telefoonnummer" name="telefoonnummer" type="tel" autocomplete="telefoon" class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Telefoonnummer" minlength="9" maxlength="9">
                    <x-input-error :messages="$errors->get('telefoonnummer')" class="mt-2" />

                  </div>
              
                  <!-- Password -->
      <div >
        <x-input-label for="password" :value="__('Password')" class="sr-only"/>

        <x-text-input id="password" class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        type="password"
                        name="password"
                        required autocomplete="new-password" placeholder="Wachtwoord"/>

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div >
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="sr-only"/>

        <x-text-input id="password_confirmation" class="relative pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Wachtwoord bevestigen" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
    
                  <div class="flex items-center">
                    <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="bedrijf">
                  </div>
                </div>
                
                
                <div class="flex flex-col items-center justify-end mt-4">
         
                  <x-selectie.button>
                      Registreer 
                  </x-selectie.button>
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Heb je al een account?') }}
                </a>
        
              </div>
              </form>
            </div>
          </div>
        </div>
        <div class="hidden md:block md:w-1/2 md:relative">
          <img class="absolute inset-0 h-full w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="hero">
        </div>
      </div>


</x-selectie_layout>