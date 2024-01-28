
    <img src="" alt="" width="200" class="bg-gray-200">

    <h1>Registreren</h1>
    <p>Vul dit formulier in met de benodigde informatie.</p>
    <div class="status">
        <div>
            <x-selectie.active>
            <p>1</p>
            </x-selectie.active>

        <p>Account type</p>

    </div>

        <div>
            <p>2</p>
        </div>
        <p>Persoonlijlke informatie</p>

    <div>
        <div>
            <p>3</p>
        </div>
        <p>Profieldata</p>

    </div>
    <form action="{{ route('selectie.process') }}" method="post">
        @csrf
        <div>
        <label for="student">

            <img src="/images/businesscard.svg" alt="">
            <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Ik ben student</h2>
        </label>
        <input type="radio" name="selectie" value="student">

    </div>
    <div>
        <label for="bedrijf">

            <img src="/images/businesscard.svg" alt="">
            <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Ik ben een bedrijf</h2>
        </label>
        <input type="radio" name="selectie" value="bedrijf">
    </div>  
        <button type="submit" id="volgendeBtn" disabled>Volgende</button>
    </form>

    <script>
      const radioButtons = document.querySelectorAll('input[name="selectie"]');
        const volgendeBtn = document.getElementById('volgendeBtn');

        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function () {
                volgendeBtn.disabled = false;
            });
        });
    </script>


