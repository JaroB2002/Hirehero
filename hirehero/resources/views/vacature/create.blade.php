<x-layouts.bedrijf-layout>

    <div class="absolute ml-96 mt-64">
        <H1 class="text-4xl font-epilogue font-bolder">Wil je een vacature plaatsen?</H1>
        <div class="mt-4">
            <p class="text-base font-epilogue ">Door de vacatures zo specifiek mogelijk in te vullen, zullen wij ook de beste matches kunnen bezorgen</p>
        </div>

        <div>
           <form action="{{route('vacature.store')}}" method="post">
            @csrf

            <div>
                <label for="title" class="sr-only">Titel</label>
                <input id="title" name="title" type="text" autocomplete="title" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Titel">

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <label for="minimumSkills" class="sr-only">Minimum skills</label>
                <input id="minimumSkills" name="minimumSkills" type="text" autocomplete="minimumSkills" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Minimum skills">

                <x-input-error :messages="$errors->get('minimumSkill')" class="mt-2" />

            </div>

            <div>
                <label for="nicetoHaveSkills" class="sr-only">Nice to have skills</label>
                <input id="nicetoHaveSkills" name="nicetoHaveSkills" type="text" autocomplete="nicetoHaveSkills" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nice to have skills">

                <x-input-error :messages="$errors->get('nicetoHaveSkills')" class="mt-2" />

            </div>

            <div>
                <label for="persoonlijkheid" class="sr-only">Persoonlijkheid</label>
                <input id="persoonlijkheid" name="persoonlijkheid" type="text" autocomplete="persoonlijkheid" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Persoonlijkheid">

                <x-input-error :messages="$errors->get('persoonlijkheid')" class="mt-2" />

            </div>

            <div>
                <label for="categorie" class="sr-only">Categorie</label>
                <input id="categorie" name="categorie" type="text" autocomplete="categorie" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Categorie">

                <x-input-error :messages="$errors->get('categorie')" class="mt-2" />

            </div>

            <div>
                <label for="aantalPlaatsen" class="sr-only">Aantal stageplaatsen</label>
                <input id="aantalPlaatsen" name="aantalPlaatsen" type="text" autocomplete="aantalPlaatsen" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="aantalPlaatsen">

                <x-input-error :messages="$errors->get('aantalPlaatsen')" class="mt-2" />

            </div>

            <div>
                <label for="description" class="sr-only">Beschrijving</label>
                <textarea id="description" name="description" type="text" autocomplete="description" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Beschrijving"></textarea>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />

            </div>
            <input type="hidden" name="status" value="Live">

            <div>
                <label for="sollicitatieType">Video CV</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Verplicht">
                <label for="sollicitatieTypeVerplicht">Verplicht</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Optioneel">
                <label for="sollicitatieTypeOptioneel">Optioneel</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Niet Toegestaan">
                <label for="sollicitatieTypeNiet">Niet toegestaan</label>
                <x-input-error :messages="$errors->get('sollicitatieType')" class="mt-2" />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-selectie.button>
                    Plaats vacature
                </x-selectie.button>

            </div>


           </form>

        </div>



























</x-layouts.bedrijf-layout>