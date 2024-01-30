<x-selectie._layout>
  <div class="relative md:h-screen flex overflow-hidden">
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
      <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
        <div class="max-w-md w-full mx-auto">
          <div>
            <img class="mx-auto h-12 w-auto" src="./images/logo.png" alt="Logo project komt er nog in">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Registreer als student</h2>
            <p class="mt-2 text-center text-sm text-gray-600"> We hebben nog wat info nodig om jouw profiel zo geoptimaliseerd mogelijk op maat te maken. <a href="">Algemene voorwaarden</a>kan je hier lezen.</p>
          </div>
  <form method="POST" action="{{ route('student.create') }}" class="mt-8 space-y-6">
      @csrf

      <!-- Name -->
      <div class="grid grid-cols-2 gap-4">
      <div>
          <x-input-label for="voornaam" class="sr-only" />
          <x-text-input id="name" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" name="voornaam" :value="old('voornaam')" required autofocus autocomplete="name" placeholder="Voornaam"/>
          <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
      </div>
      <div>
          <x-input-label for="familienaam" class="sr-only"/>
          <x-text-input id="familienaam" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" name="familienaam" :value="old('familienaam')" required autofocus autocomplete="name" placeholder="Familienaam"/>
          <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div>
          <x-input-label for="email"  class="sr-only"/>
          <x-text-input id="email" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="E-mail"/>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <div>
          <label for="school" class="sr-only"></label>
          <input id="school" name="school" type="text" autocomplete="school" required class="relative block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Naam van je school">
          <x-input-error :messages="$errors->get('school')" class="mt-2" />

        </div>
        <div>
          <label for="opleiding" class="sr-only">Opleiding</label>
          <input id="opleiding" name="opleiding" type="text" autocomplete="opleiding" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Opleiding">
          <x-input-error :messages="$errors->get('opleiding')" class="mt-2" />

        </div>
        <div class="flex">
          <label for="telefoonnummer" class="sr-only">Telefoonnummer (optioneel)</label>
          <select name="prefix" id="prefix">
              <option value="+32">+32</option>
              <option value="+31">+31</option>
          </select>
          <input id="telefoonnummer" name="telefoonnummer" type="tel" autocomplete="telefoon" class="relative block w-full  pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Telefoonnummer" minlength="9" maxlength="9">
          <x-input-error :messages="$errors->get('telefoonnummer')" class="mt-2" />

        </div>
      
       

       
      <!-- Password -->
      <div class="">
          <x-input-label for="password" class="sr-only"/>

          <x-text-input id="password" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          type="password"
                          name="password"
                          required autocomplete="new-password" placeholder="Wachtwoord"/>

          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div >
          <x-input-label for="password_confirmation"  />

          <x-text-input id="password_confirmation" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" placeholder="Bevestig wachtwoord"/>

          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>
      <div class="flex items-center">
        <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="student">
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
  
 
</x-selectie._layout>
