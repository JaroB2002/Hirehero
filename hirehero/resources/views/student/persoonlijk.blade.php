<x-selectie._layout>

    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
              <div>
                <img class="mx-auto h-12 w-auto" src="/images/logo.png" alt="Logo project komt er nog in">
                <h1>Wat voor persoon ben je?</h1>
                <p class="mt-2 text-center text-sm text-gray-600">Wat voor persoon ben je?
                    Kies 5 woorden die je het best omschrijven.</p>

                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Kies 5 woorden</h2>
              </div>
        <div>
            <form action="/student/persoonlijk" method="Post" class="mt-8">
                @csrf

                <div class="grid grid-cols-2 gap-x-4 gap-y-2 md:grid md:grid-cols-2 lg:grid-cols-2">
        {{--Hier komen de persoonlijkheden waaruit ze kunnen kiezen, ze moeten er 5 kiezen--}}
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="vriendelijk" class=" opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Vriendelijk</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="ijverig"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4" >Ijverig</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="extravert"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Extravert</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="introvert"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Introvert</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="gemotiveerd"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Gemotiveerd</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg" >
                        <input type="checkbox" name="persoonlijkheid[]"value="leergierig"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Leergierig</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="sociaal"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Sociaal</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="open"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Open</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="initiatief"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Initiatief</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="team player"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Team player</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="grappig"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Grappig</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="precies"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Precies</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="creatief"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Creatief</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="analytisch"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Analytisch</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="optimistisch"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Optimistisch</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="Communicatief sterk"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-2">Communicatief sterk</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="flexibel"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Flexibel</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="doorzetter"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Doorzetter</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="zelfstandig"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Zelfstandig</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="empathisch"  class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Empathisch</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="positief" class="opacity-0">
                        <label for="persoonlijkheid" class="ml-4">Positief</label>
                    </div>
                    <div class="selectiePersoonlijk bg-lightBlue py-2 rounded-lg">
                        <input type="checkbox" name="persoonlijkheid[]"value="leiderschap" class="opacity-0 cursor-pointer">
                        <label for="persoonlijkheid[]" class="ml-4">Leiderschap</label>
                    </div>
                    <x-input-error :messages="$errors->get('persoonlijkheid')" class="mt-2" />
                    </div>

                    <div id="gekozenwoorden" class=" grid grid-cols-3 mt-8 lg:flex">
                    </div>
                    

                    </div>

                        

                            <div class="mt-4">
                            <x-selectie.button disabled id="volgendeBtn">
                                Sla woorden op
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


<script>

    //Klik op de div om de checkbox te selecteren

    const selectie = document.querySelectorAll('.selectiePersoonlijk');
    const gekozenwoorden = document.getElementById('gekozenwoorden');
    const volgendeBtn = document.getElementById('volgendeBtn');

    let selectieArray = [];

    //Klik op selectie

    for (let i = 0; i < selectie.length; i++) {
    selectie[i].addEventListener('click', function (e) {

        // Toggle the checkbox
        let selected = selectie[i].children[0].checked = !selectie[i].children[0].checked;

        // Toggle the background color
        selectie[i].classList.toggle('bg-orange', selected);

        // Toggle the selection in the array and the div
        if (selected) {
            // Add to the array
            selectieArray.push(selectie[i].children[1].innerText);

            // Add to the div
            let div = document.createElement('div');
            div.classList.add('bg-lightBlue', 'py-2', 'rounded-lg', 'mt-2', 'mr-2', 'flex', 'justify-center', 'items-center', 'text-center', 'w-24');
            div.innerText = selectie[i].children[1].innerText;
            gekozenwoorden.appendChild(div);

        } else {
            // Remove from the array
            selectieArray = selectieArray.filter(function (item) {
                return item !== selectie[i].children[1].innerText;
            });

            // Remove from the div
            let divToRemove = Array.from(gekozenwoorden.children).find(div => div.innerText === selectie[i].children[1].innerText);
            if (divToRemove) {
                gekozenwoorden.removeChild(divToRemove);
            }
        }

        // Enable/disable the button based on the array length
        volgendeBtn.disabled = selectieArray.length < 5;
        volgendeBtn.classList.toggle('bg-gray-100', selectieArray.length < 5);
        volgendeBtn.classList.toggle('bg-purple', selectieArray.length === 5);

    });
}



    
    
        
    </script>

</x-selectie._layout>