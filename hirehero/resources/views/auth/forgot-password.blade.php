<x-selectie._layout>
    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
              <div>
                <img class="mx-auto h-12 w-auto" src="/images/logo.png" alt="Logo project komt er nog in">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Wachtwoord vergeten?</h2>
              </div> <div class="mb-4 text-sm text-gray-600">
        {{ __('Ben je je wachtwoord vergeten? Geen probleem! Vul hier je e-mail adres in') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email"  class="sr-only"/>
            <x-text-input id="email" class="relative block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="E-mail"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex flex-col items-center justify-end mt-4 w-full">
         
            <x-selectie.button>
                Stuur me een resetlink
            </x-selectie.button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/">
              {{ __('Ga terug') }}
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
