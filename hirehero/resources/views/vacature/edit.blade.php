<x-layouts.bedrijf-layout>

    <div class="w-3/4 ml-96 mt-64 absolute">
        <form action="/bedrijf/vacature/{{$vacature->id}}/edit" method="POST">
            @csrf
            @method('PUT')


            <div>
                <label for="title" class="sr-only">Titel</label>
                <input id="title" name="title" type="text" autocomplete="title" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Titel" value='{{$vacature->title}}'>

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <label for="minimumSkills" class="sr-only">Minimum skills</label>
                <input id="minimumSkills" name="minimumSkills" type="text" autocomplete="minimumSkills" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Minimum skills" value="{{$vacature->minimumSkills}}">

                <x-input-error :messages="$errors->get('minimumSkill')" class="mt-2" />

            </div>

            <div>
                <label for="nicetoHaveSkills" class="sr-only">Nice to have skills</label>
                <input id="nicetoHaveSkills" name="nicetoHaveSkills" type="text" autocomplete="nicetoHaveSkills" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nice to have skills" value="{{$vacature->nicetoHaveSkills}}">

                <x-input-error :messages="$errors->get('nicetoHaveSkills')" class="mt-2" />

            </div>

            <div>
                <label for="persoonlijkheid" class="sr-only">Persoonlijkheid</label>
                <input id="persoonlijkheid" name="persoonlijkheid" type="text" autocomplete="persoonlijkheid" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Persoonlijkheid" value="{{$vacature->persoonlijkheid}}">

                <x-input-error :messages="$errors->get('persoonlijkheid')" class="mt-2" />

            </div>

            <div>
                <label for="categorie" class="sr-only">Categorie</label>
                <input id="categorie" name="categorie" type="text" autocomplete="categorie" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Categorie" value="{{$vacature->categorie}}">

                <x-input-error :messages="$errors->get('categorie')" class="mt-2" />

            </div>

            <div>
                <label for="aantalPlaatsen" class="sr-only">Aantal stageplaatsen</label>
                <input id="aantalPlaatsen" name="aantalPlaatsen" type="text" autocomplete="aantalPlaatsen" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="aantalPlaatsen" value="{{$vacature->aantalPlaatsen}}">

                <x-input-error :messages="$errors->get('aantalPlaatsen')" class="mt-2" />

            </div>

            <div>
                <label for="description" class="sr-only">Beschrijving</label>
                <textarea id="description" name="description" type="text" autocomplete="description" required class="relative block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Beschrijving" >{{$vacature->description}}</textarea>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />

            </div>

            <div>
                <label for="sollicitatieType">Video CV</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Verplicht" {{$vacature->sollicitatieType === 'Verplicht'? 'checked' :''}}>
                <label for="sollicitatieTypeVerplicht">Verplicht</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Optioneel" {{$vacature->sollicitatieType === 'Optioneel'? 'checked' :''}}>
                <label for="sollicitatieTypeOptioneel">Optioneel</label>
                <input type="checkbox" name="sollicitatieType" id="" value="Niet Toegestaan" {{$vacature->sollicitatieType === 'Niet Toegestaan'? 'checked' :''}}>
                <label for="sollicitatieTypeNiet">Niet toegestaan</label>
                <x-input-error :messages="$errors->get('sollicitatieType')" class="mt-2" />

            </div>

            <div>
                <label for="status">Status</label>
                <select name="status" id="">
                    <option value="open" {{$vacature->status === 'open'? 'selected' :''}}>Live</option>
                    <option value="gesloten" {{$vacature->status === 'gesloten'? 'selected' :''}}>Gesloten</option>
                    <option value="verborgen" {{$vacature->status === 'verborgen'? 'selected' :''}}>Verborgen</option>  
                </select>
                <x-input-error :messages="$errors->get('status')" class="mt-2" />
            
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-selectie.button>
                    Plaats vacature
                </x-selectie.button>

            </div>





















        </form>



















    </div>








</x-layouts.bedrijf-layout>