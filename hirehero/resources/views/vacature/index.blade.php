<x-layouts.bedrijf-layout>
    <div class="flex flex-row flex-wrap absolute ml-96 mt-48 max-w-3/4 space-y-16">

    @foreach($vacatures as $vacature)
        <div class="max-w-[400px] max-h-[400px] left-12">
            <h1 class="text-4xl font-epilogue font-bolder">{{$vacature->title}}</h1>
            <p class="text-base font-epilogue">{{$vacature->description}}</p>
            <p class="text-base font-epilogue">VideoCV: {{$vacature->sollicitatieType}}</p>
            <p class="text-base font-epilogue">Aantal plaatsen: {{$vacature->aantalPlaatsen}}</p>

            <form action="{{route('vacature.status')}}" method="POST" class="statusForm">
                @csrf
                @method('PATCH')
                <input type="hidden" name="vacature_id" value="{{$vacature->id}}">

                <select name="status" id="">
                    <option value="open" {{$vacature->status === "live" ? 'selected' :''}}>Live</option>
                    <option value="gesloten" {{$vacature->status === "gesloten" ? 'selected' :''}}>Gesloten</option>
                    <option value="verborgen" {{$vacature->status === "verborgen" ? 'selected' :''}}>Verborgen</option>  
                </select>


            </form>
            <button class="bg-purple px-4 py-2 rounded-xl font-bolder text-white mb-4"><a href="/bedrijf/vacature/{{$vacature->id}}">Bekijk vacature</a></button>
            <button class="p-2 "><span style="font-size: 16px;"><a href="/bedrijf/vacature/{{$vacature->id}}/edit">✎</a></span></button>
            <button><a href="/bedrijf/vacature/{{$vacature->id}}/destroy"><span class="text-base">&#x1F5D1;</span></a></button>


        </div>
    @endforeach
</div>

    <script>
        //Verander de status
        let statusForm = document.querySelectorAll(".statusForm");

        for (let i = 0; i < statusForm.length; i++) {
            statusForm[i].addEventListener('change', (e)=> {


                statusForm[i].submit();


            })
        }


        











    
    </script>





</x-layouts.bedrijf-layout>
