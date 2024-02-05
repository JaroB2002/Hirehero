<?php

namespace App\Http\Controllers;

use App\Models\Vacature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class VacatureController extends Controller
{
    //

    public function index()
    {

        //Hier komen de vacatures die al geplaatst zijn door het bedrijf



        return view('vacature.index', 
        ['vacatures' => Vacature::all()]);
    }





    public function create()
    {
        return view('vacature.create');
    }

    public function store(Request $request)

    
    {




        $user = Auth::user();
        $company_id = Company::where('user_id', $user->id)->first()->id;
        $company = Company::where('id', $company_id)->first();

        if($company == null)
        {
            return redirect(route('vacature.create'))->with('error', 'Bedrijf bestaat niet');
        }



        
    //sollicitatietype is de value van de checkbox, het kan alleen maar 1 van de 3 zijn.
    $sollicitatieType = $request->input('sollicitatieType');

    if($sollicitatieType != "Verplicht" && $sollicitatieType != "optioneel" && $sollicitatieType != "Niet toegestaan")
    {

            return redirect(route('vacature.create'))->with('error', 'Sollicitatie type is niet correct');
    }

        $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'required|max:1500|string',
            'minimumSkills' => 'required|max:255|string',
            'nicetoHaveSkills' => 'required|max:255|string',
            'persoonlijkheid' => 'required|max:255|string',
            'categorie' => 'required|max:255|string',
            'aantalPlaatsen' => 'required|integer',
            'sollicitatieType' => 'required|max:255|string',
            'status' => 'max:255|string'
        ]);



        //de company_id moet nog worden toegevoegd

        $vacature = new Vacature([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'minimumSkills' => $request->get('minimumSkills'),
            'nicetoHaveSkills' => $request->get('nicetoHaveSkills'),
            'persoonlijkheid' => $request->get('persoonlijkheid'),
            'categorie' => $request->get('categorie'),
            'aantalPlaatsen' => $request->get('aantalPlaatsen'),
            'sollicitatieType' => $request->get('sollicitatieType'),
            'company_id' => $company_id,
            'status' => $request->get('status')
        ]);

        $vacature->save();
        return redirect(route('vacature.index'))->with('success', 'Vacature is opgeslagen');
    }   

    public function show($id)
    {
        $vacature = Vacature::find($id);
        return view('vacature.show', ['vacature' => $vacature]);
    }

    public function updateStatus()

    {
        //je kan de id uit het formulier halen

        $id = request('vacature_id');

        //Zoek de vacature op basis van de id

        $vacature = Vacature::find($id);

        ///Kijk wat er wordt meegegeven in de request
        $status = request('status');
        //Update de status van de vacature

        $vacature->update([
            'status' => $status
        ]);


        return redirect(route('vacature.index'))->with('success', 'Vacature status is aangepast');

        
    }

    public function edit($id) {
        $vacature = Vacature::find($id);
        return view('vacature.edit', ['vacature' => $vacature]);
    }  

    public function update($id) {
        //Zoek de vacature op basis van de id
       $vacature = Vacature::find($id);
         //Update de vacature
        $vacature->update([
            'title' => request('title'),
            'description' => request('description'),
            'minimumSkills' => request('minimumSkills'),
            'nicetoHaveSkills' => request('nicetoHaveSkills'),
            'persoonlijkheid' => request('persoonlijkheid'),
            'categorie' => request('categorie'),
            'aantalPlaatsen' => request('aantalPlaatsen'),
            'sollicitatieType' => request('sollicitatieType'),
            'status' => request('status') 
        ]);

        return redirect(route('vacature.index'))->with('success', 'Vacature is aangepast');


        
    }

    public function destroy($id) {
        //Zoek de vacature op basis van de id
        $vacature = Vacature::find($id);
        //Verwijder de vacature
        //toon een kleine pop up om te vragen of de gebruiker zeker weet dat hij de vacature wilt verwijderen
        return view('vacature.destroy', ['vacature' => $vacature]);

    }

    public function destroyVacature($id) {
        //Zoek de vacature op basis van de id
        $vacature = Vacature::find($id);
        //Verwijder de vacature
        $vacature->delete();
        return redirect(route('vacature.index'))->with('success', 'Vacature is verwijderd');
    }

    
}
