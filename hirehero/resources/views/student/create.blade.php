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
                <img class="mx-auto h-12 w-auto" src="./images/logo.png" alt="Logo project komt er nog in">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Registreer als student</h2>
                <p class="mt-2 text-center text-sm text-gray-600"> of heb je een account <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">account</a></p>
              </div>
              <form class="mt-8 space-y-6" action="/student" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="voornaam" class="sr-only">Voornaam</label>
                    <input id="voornaam" name="voornaam" type="text" autocomplete="voorneem" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Voornaam">
                    <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
                  </div>
                  <div>
                    <label for="familienaam" class="sr-only">Familienaaam</label>
                    <input id="familienaam" name="familienaam" type="text" autocomplete="Familienaam" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Familienaam">
                    <x-input-error :messages="$errors->get('familienaam')" class="mt-2" />

                  </div>
                  <div>
                    <label for="school" class="sr-only">School</label>
                    <input id="school" name="school" type="text" autocomplete="school" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Naam van je school">
                    <x-input-error :messages="$errors->get('school')" class="mt-2" />

                  </div>
                 
                  <div>
                    <label for="email" class="sr-only">School e-mail</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="E-mail adres">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                  </div>
                  <div>
                    <label for="opleiding" class="sr-only">Opleiding</label>
                    <input id="opleiding" name="opleiding" type="text" autocomplete="opleiding" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Opleiding">
                    <x-input-error :messages="$errors->get('opleiding')" class="mt-2" />

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
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Vul een wachtwoord in">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                  </div>
                  <div>
                    <label for="password_conf" class="sr-only">Bevestig wachtwoord</label>
                    <input id="password_conf" name="password_conf" type="password" autocomplete="current-password" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Bevestig uw wachtwoord">
                    <x-input-error :messages="$errors->get('password_conf')" class="mt-2" />

                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Ik ga akkoord met de gebruiksvoorwaarden</label>
                  </div>
                  <div class="flex items-center">
                    <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="student">
                  </div>
                
                </div>
                <div>
                 <x-selectie.button>
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






</x-selectie._layout>

