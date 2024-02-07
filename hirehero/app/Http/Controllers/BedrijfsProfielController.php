<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Vacature;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BedrijfsProfielController extends Controller
{
    //
    public function index() {

        //Toon het bedrijfsprofiel van het ingelogde bedrijf
        //Toon de teamleden van het bedrijf
        //Toon de vacatures van het bedrijf

        $company_id = Auth::user()->company->id;
        
        $company = Company::find($company_id);

        $vacatures = Vacature::where('company_id', $company_id)->get();

        $employees = Employee::where('company_id', $company_id)->get();

        //Krijg de employee voornaam, familienaam en email uit tabel users

        foreach($employees as $employee) {
            $employee->voornaam = $employee->user->voornaam;
            $employee->familienaam = $employee->user->familienaam;
            $employee->email = $employee->user->email;


        }

        //krijg de email en telefoonnummer van het bedrijf

        $company->email = $company->user->email;
        $company->telefoonnummer = $company->user->telefoonnummer;



        //Toon alles van bedrijfsprofiel

        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();



        return view('bedrijf.profiel', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel'));


    }

    public function store() {

        //We hebben de bedrijfsId nodig van het ingelode bedrijf
        $company_id = Auth::user()->company->id;
        
        //Dan de informatie zoals bedrijfsnaam, 







    }

    public function edit() {


  $company_id = Auth::user()->company->id;
        
        $company = Company::find($company_id);

        $vacatures = Vacature::where('company_id', $company_id)->get();

        $employees = Employee::where('company_id', $company_id)->get();

        //Krijg de employee voornaam, familienaam en email uit tabel users

        foreach($employees as $employee) {
            $employee->voornaam = $employee->user->voornaam;
            $employee->familienaam = $employee->user->familienaam;
            $employee->email = $employee->user->email;
        }

        //Krijg het telefoonnummer, email van company
        



        //Toon alles van bedrijfsprofiel

        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        return view('bedrijf.profielEdit', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel'));
    }


    public function update(Request $request) {

        //Kijk of de bedrijfsprofiel al bestaat
        $company_id = Auth::user()->company->id;


        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        $company = Company::find($company_id); 


        /*$companyData = $request->validate([

            'oprichtingsdatum' => 'sometimes|date',
            'adres' => 'sometimes|string|max:255',
            'postcode' => 'sometimes|string|max:255',
            'plaats' => 'sometimes|string|max:255',
            'land' => 'sometimes|string|max:255',
            'website' => 'sometimes|string|max:255',
            'sector' => 'sometimes|string|max:255',
            'x' => 'sometimes|string|max:255',
            'facebook' => 'sometimes|string|max:255',
            'linkedin' => 'sometimes|string|max:255',
            'instagram' => 'sometimes|string|max:255'
        ]);
*/





        $company->update([
            'oprichtingsdatum' => request('oprichtingsdatum'),
            'adres' => request('adres'),
            'postcode' => request('postcode'),
            'plaats' => request('plaats'),
            'land' => request('land'),
            'website' => request('website'),
            'sector' => request('sector'),
            'x' => request('x'),
            'facebook' => request('facebook'),
            'linkedin' => request('linkedin'),
            'instagram' => request('instagram')
        ]);

        //Telefoonnummer en email van bedrijf kunnen ook aangepast worden

        $company->user->update([
            'telefoonnummer' => request('telefoonnummer'),
            'email' => request('email')
        ]);


        //De info bedrijfVoorstelling, doel, skills, gallery, projects, company_id moeten in de tabel company_profiles

       


        //dit moet in de tabel company_profiles

         if($bedrijfsprofiel) {
            $bedrijfsprofiel->update([

                
                'company_id' => $company_id,
                'bedrijfVoorstelling' => request('bedrijfVoorstelling'),
                'doel' => request('doel'),
                'skills' => request('skills'),
                'gallery' => request('gallery'),
                'projects' => request('projects'),
            ]);
        } else {
            CompanyProfile::create([
                'company_id' => $company_id,
                'bedrijfsVoorstelling'=>request('bedrijfsVoorstelling'),
                'doel'=>request('doel'),
                'skills'=>request('skills'),
                'gallery'=>request('gallery'),
                'projects'=>request('projects')

               
            ]);
        }


        
        return redirect()->route('bedrijf.profiel');


    }






}
