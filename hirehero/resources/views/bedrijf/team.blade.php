{{--Je kan als werkgever een werknemer aannemen en ze een functie aanrijken --}}

{{--Je maakt een account aan met een voornaam, familienaam, email, en wachtwoord--}}

<x-layouts.bedrijf-layout>

    <form action="{{route('bedrijf.store')}}" method="Post" class="absolute ml-96 mt-96">

        @csrf

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label for="voornaam" class="sr-only">Voornaam</label>
                <input id="voornaam" name="voornaam" type="text" autocomplete="voornaam" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Voornaam">
                <x-input-error :messages="$errors->get('voornaam')" class="mt-2" />
            </div>
            <div>
                <label for="familienaam" class="sr-only">Familienaam</label>
                <input id="familienaam" name="familienaam" type="text" autocomplete="familienaam" required class="relative block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Familienaam">
                <x-input-error :messages="$errors->get('familienaam')" class="mt-2" />
            </div>
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="text" autocomplete="email" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
                <label for="functie" class="sr-only">Functie</label>
                <input id="functie" name="functie" type="text" autocomplete="functie" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Functie">

                <x-input-error :messages="$errors->get('functie')" class="mt-2" />

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

            <div class="flex items-center">
                <input id="role" name="role" type="hidden" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" value="employee">

            </div>

            <div class="flex items-center">
                <input id="password" name="password" type="password" autocomplete="new-password" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

            <div class="flex items-center">
                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password Confirmation">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>

        </div>

        <div class="flex items-center justify-end mt-4">
            <x-selectie.button>
                Voeg toe
            </x-selectie.button>

        </div>


    </form>



    
</x-layouts.bedrijf-layout>