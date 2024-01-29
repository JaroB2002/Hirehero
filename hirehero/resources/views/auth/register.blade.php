<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="voornaam" :value="__('voornaam')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="voornaam" :value="old('voornaam')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="familienaam" :value="__('familienaam')" />
            <x-text-input id="familienaam" class="block mt-1 w-full" type="text" name="familienaam" :value="old('familienaam')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <label for="school" class="sr-only">"__('school')"</label>
            <input id="school" name="school" type="text" autocomplete="school" required class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Naam van je school">
            <x-input-error :messages="$errors->get('school')" class="mt-2" />

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
          <div class="flex items-center">
            <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="student">
          </div>
         

         
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
