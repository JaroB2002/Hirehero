<x-layouts.bedrijf-layout>

    <div class="absolute mt-64 ml-96">
    <header>
        <h1 class="font-bolder font-epiilogue text-4xl">{{$company->bedrijfnaam}}</h1>
        <a href="{{$company->website}}">{{$company->bedrijfnaam}} website</a>
        <div>
            <img src="" alt="Logo van het bedrijf {{$company->bedrijfnaam}}">

        </div>
        <p>Oprichtings datum: {{$company->oprichtingsdatum ? $company->oprichtingsdatum->format('d-m-Y') : 'Hier komt de datum'}}</p>
        <p>Aantal werknemers: {{$company->employees}}</p>
        <p>Locatie: {{$company->plaats}}</p>
        <p>Sector: {{$company->sector}}</p>

    </header>

    <main>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Bedrijfvoorstelling</h2>
            <p>Upload een video of foto van uw bedrijf</p>
            <img src="" alt="HIER KOMT DE FOTO OF VIDEO VAN HET BEDRIJF">
        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Wat is uw doel?</h2>
            <p>HIER KOMT HET DOEL VAN HET BEDRIJF</p>
        </div>

        <div class="mt-8"> 
            <h2 class="text-3xl font-bolder font-epilogue">Contact</h2>
            <p>LINK NAAR HET X ACCOUNT</p>
            <p>LINK NAAR HET LINKEDIN ACCOUNT</p>
            <p>LINK NAAR HET FACEBOOK ACCOUNT</p>
            <p>LINK NAAR HET INSTAGRAM ACCOUNT</p>

        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Gallerij</h2>
            <p>Upload hier foto's van uw bedrijf</p>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">

        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Skills</h2>
            <p>Enkele vaardigheden waar u veel belang aan hecht</p>
            <div class="mt-8">
                @foreach($vacatures as $vacature)
                <div class="mt-4">
                    @php $nicetoHaveSkills = explode(',', $vacature->nicetoHaveSkills);
                    $nicetoHaveSkills = explode(' ', $vacature->nicetoHaveSkills);
                    $minimumSkills = explode(',', $vacature->minimumSkills);
                    $minimumSkills = explode(' ', $vacature->minimumSkills);

                    //Als er dubbele skills zijn, deze verwijderen
                    $nicetoHaveSkills = array_unique($nicetoHaveSkills);
                    $minimumSkills = array_unique($minimumSkills);

                    //Kijk of er skills zijn die in beide arrays voorkomen en verwijder deze
                    $nicetoHaveSkills = array_diff($nicetoHaveSkills, $minimumSkills);
                    $minimumSkills = array_diff($minimumSkills, $nicetoHaveSkills);

                    @endphp
                    <div class="flex flex-row space-x-4">
                    @foreach(array_merge($nicetoHaveSkills, $minimumSkills) as $skill)
                    
                    <p>{{$skill}}</p>
                    @endforeach
                    </div>

                </div>
                @endforeach
                

            </div>
            <button><a href="">Voeg toe</a></button>

        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Projecten van ex-stagiairs</h2>
            <p>Voeg projecten toe van voorgaande stagiairs, laat zien waar waaraan toekomstige stagiairs zich kunnen verwachten/p>

        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Team</h2>
            <button><a href="">+</a></button>
            <button><a href="">Edit</a></button>
            <div class="flex flex-row space-x-4">
                @foreach($employees as $teamlid)
                <div class="mt-4">
                    <img src="" alt="Foto van {{$teamlid->name}}">
                    <h3 class="text-2xl font-bolder font-epilogue">{{$teamlid->voornaam}}</h3>
                    <h3>{{$teamlid->achternaam}}</h3>
                    <p>{{$teamlid->functie}}</p>
                    <p>{{$teamlid->email}}</p>

                </div>
                @endforeach
            </div>

            <a href="">Bekijk alle teamleden</a>
        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Vacatures</h2>

            <div class="mt-8">
                @foreach($vacatures as $vacature)
                <div class="mt-4">
                    <h3 class="text-2xl font-bolder font-epilogue">{{$vacature->title}}</h3>
                    <p>{{$company->bedrijfnaam}} <span>{{$company->plaats}}</span></p>
                    @php $minimumSkills = explode(',', $vacature->minimumSkills);
                    $minimumSkills = explode(' ', $vacature->minimumSkills);
                    @endphp
                    <div class="flex flex-row space-x-4">
                    @foreach($minimumSkills as $skill)
                    
                    <p>{{$skill}}</p>
                    @endforeach
                    </div>

                </div>
                @endforeach
                

            </div>

        </div>

        <div class="mt-8">
            <h2 class="text-3xl font-bolder font-epilogue">Reviews</h2>
            <p>Laat hier reviews achter</p>
            <button><a href="">Laat een review achter</a></button>

        </div>

        <button>Sla uw wijzigingen op</button>

    </main>
    </div>




</x-layouts.bedrijf-layout>