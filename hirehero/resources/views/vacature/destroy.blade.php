<h1>Ben je zeker dat je deze vacature wil verwijderen?
</h1>

<form action="/bedrijf/vacature/{{$vacature->id}}/destroy" method="post">
    @csrf
    @method('DELETE')
    <button class="bg-red-500 px-4 py-2 rounded-xl font-bolder text-white mb-4">Verwijder vacature</button>

</form>

<button class="bg-purple-500 px-4 py-2 rounded-xl font-bolder text-white mb-4"><a href="/bedrijf/vacature">Terug naar vacatures</a></button>