<?php

namespace App\Http\Controllers;

use App\Models\Vacature;
use Illuminate\Support\Str;
use App\Models\Sollicitatie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class stageController extends Controller
{
    //

    public function index()
    {
        return view('stage.index');
    }

    //Prompt voor het zoeken van een stage

    public function search()

    {

        //Verwijder stopwoorden uit de zoekterm

        $stopWoorden = ['de', 'het', 'een', 'van', 'in', 'op', 'aan', 'voor', 'achter', 'onder', 'boven', 'tussen', 'tegen', 'met', 'door', 'naar', 'over', 'om', 'onder', 'uit', 'bij', 'tot', 'langs', 'zonder', 'binnen', 'buiten', 'ik', 'stage', 'ben', 'opzoek', 'naar', 'zoek', 'zoeken', 'wil', 'heb'];

        //Kijk wat er in het tekstveld staat
        $zoekterm = request('searchTerm');

        //Verwijder de stopwoorden en splits de zoekterm op in keywords
        $keywords = collect(explode(' ', Str::of($zoekterm)->lower()->replace($stopWoorden, '')))
        //Verwijder lege strings
        ->reject(function($value) {
            return empty($value);
        })
        ->toArray() 
        
        ;

        $vacature_id = request('vacature_id');


        //Zoek in de vacatures naar de keywords, 
        //Query() is een methode van de Vacature class, die een query object teruggeeft
        $vacatures = Vacature::query();

if (!empty($keywords)) {
    $relevancePercentage = '';
    $firstKeyword = true;

    foreach ($keywords as $keyword) {
        if (!$firstKeyword) {
            $relevancePercentage .= ' + ';
        } else {
            $firstKeyword = false;
        }

        // Voeg de relevante gevallen voor elk zoekwoord toe aan de query
        $relevancePercentage .= 'CASE WHEN LOWER(title) LIKE LOWER("%' . $keyword . '%") THEN 1 ELSE 0 END +
            CASE WHEN LOWER(persoonlijkheid) LIKE LOWER("%' . $keyword . '%") THEN 1 ELSE 0 END +
            CASE WHEN LOWER(minimumSkills) LIKE LOWER("%' . $keyword . '%") THEN 1 ELSE 0 END +
            CASE WHEN LOWER(categorie) LIKE LOWER("%' . $keyword . '%") THEN 1 ELSE 0 END';
    }

    // Bouw de rest van de query
    $vacatures->selectRaw('*, (' . $relevancePercentage . ') AS relevance, (' . $relevancePercentage . ') / ' . count($keywords) . ' * 100 AS relevance_percentage');
} else {
    // Als er geen zoekwoorden zijn, stel de relevante delen in op 0
    $vacatures->selectRaw('*, 0 AS relevance, 0 AS relevance_percentage');
}

// Sorteer de resultaten op relevantie
$vacatures->orderBy('relevance_percentage', 'desc');

// Haal de resultaten op
$resultVacatures = $vacatures->get();

        return view('stage.results', [
            'resultVacatures' => $resultVacatures
        ]);
        



    }

    public function show($id)
    {
        $vacature = Vacature::find($id);
        return view('stage.show', [
            'vacature' => $vacature
        ]);
    }

    public function solliciteren($id)
    {
        //Vind de vacature
        //
        $vacature = Vacature::find($id);
        //Krijg de bedrijfnaam van de vacature
        $company = $vacature->company->bedrijfsnaam;

        //Kijk of er al een vacature of motivatiebrief is in de student tabel
        $studentCV = auth()->user()->student->cv;
        $studentMotivatie = auth()->user()->student->motivatie;




        return view('stage.solliciteren', [
            'vacature' => $vacature,
            'company' => $company,
            'studentCV' => $studentCV,
            'studentMotivatie' => $studentMotivatie
        ]);
    }

    public function storeSollicitatie($id)
    {
        //Valideer de input
        request()->validate([
            'motivatiebrief' => 'required|file|mimes:pdf|max:2048',
            'cv' => 'required|file|mimes:pdf|max:2048',
        ]);

        //Sla de sollicitatie op
        $sollicitatie = new Sollicitatie();
        $sollicitatie->vacature_id = $id;
        //Vind de user_id van de student
        $user_id = auth()->user()->id;
        //Op basis van die user_id, zoek ik de Id van de student
        $student_id = Student::where('user_id', $user_id)->first()->id;
        //Vervolgens sla ik die Id van student in de sollicitatie tabel op
        $sollicitatie->student_id = $student_id;
            

        //Haal de company_id op van de vacature

        $company_id = Vacature::find($id)->company_id;
        $sollicitatie->company_id = $company_id;

        //Sla de CV en motivatiebrief op
        //$motivatiePath = request('motivatiebrief')->store('motivatie', 'public');

        $cvPath = request('cv')->store('cv', 'public');


        Student::where('user_id', auth()->user()->id)->update([
            'CV' => $cvPath,
        ]);

        

        $sollicitatie->save();

        //Stuur de gebruiker terug naar de vacature
        return redirect()->route('stage.show', ['vacature' => $id], 302)->with('message', 'Sollicitatie is verstuurd');
    }

    public function showSollicitaties()
    {
        //Toon alle sollicitaties die ik als student heb gedaan

        $sollicitaties = Sollicitatie::where('student_id', auth()->user()->student->id)->get();
        //Haal de vacature op van de sollicitatie
        foreach ($sollicitaties as $sollicitatie) {
            $sollicitatie->vacature = Vacature::find($sollicitatie->vacature_id);
        }

        return view('studentSollicitatie.index', [
            'sollicitaties' => $sollicitaties
        ]);
    }









}
