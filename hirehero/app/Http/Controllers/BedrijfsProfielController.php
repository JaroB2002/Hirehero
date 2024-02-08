<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Gallerij;
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

        //Je kan de foto's van de gallerij van het bedrijf zien


        $galleries = Gallerij::where('company_profile_id', $company_id)->get();

        foreach($galleries as $gallery) {
            $gallery->image = $gallery->image;
        }

        //krijg de email en telefoonnummer van het bedrijf

        $company->email = $company->user->email;
        $company->telefoonnummer = $company->user->telefoonnummer;



        //Toon alles van bedrijfsprofiel

        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        $projects = Project::where('company_id', $company_id)->get();




        return view('bedrijf.profiel', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel', 'galleries', 'projects'));


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

        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        //Je kan de foto's van de gallerij van het bedrijf zien
        if ($bedrijfsprofiel) {
        $galleries = Gallerij::where('company_profile_id', $bedrijfsprofiel->id)->get();
        } else {
            $galleries = null;
        }

        //Toon de projecten van het bedrijf

        $projects = Project::where('company_id', $company_id)->get();


        


    

        return view('bedrijf.profielEdit', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel', 'galleries', 'projects'));
    }


    public function update(Request $request) {

        


        //Kijk of de bedrijfsprofiel al bestaat
        $company_id = Auth::user()->company->id;

        //Voeg foto's toe aan de gallerij


        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        



        if ($request->hasFile('gallerij')) {
            $galleries = $request->file('gallerij');
            $company_profile_id = $request->company_profile_id;


            foreach ($galleries as $gallery) {
                // Valideer elk geüploade bestand
                $request->validate($this->Galleryrules());
                // Sla elk bestand op in de map public/gallerij
                $galleryName = time() . '_' . $gallery->getClientOriginalName();
                $gallery->move(public_path('gallerij'), $galleryName);
                $galleryPath = 'gallerij/' . $galleryName;
        
                Gallerij::create([
                    'company_profile_id' => $company_profile_id,
                    'image' => $galleryPath,
                ]);
        }
    }
       
        

        $company = Company::find($company_id);

        $companyData = $request->validate($this->Companyrules());

        $company->update($companyData);

        //Telefoonnummer en email van bedrijf kunnen ook aangepast worden

        $userData = $request->validate($this->Userrules());

        $company->user->update($userData);

      

        




        //Voeg foto's toe aan de gallerij        
        
        //De info bedrijfVoorstelling, doel, skills, gallery, projects, company_id moeten in de tabel company_profiles

       


        //dit moet in de tabel company_profiles

        $bedrijfsProfielData = $request->validate($this->CompanyProfilrules());

        //bedrijfVideo



        
        if ($request->hasFile('bedrijfVideo')) {
            $bedrijfVideo = $request->file('bedrijfVideo');
            $bedrijfVideoName = time() . '_' . $bedrijfVideo->getClientOriginalName();
            $bedrijfVideo->move(public_path('bedrijfVideos'), $bedrijfVideoName);
            $bedrijfVideoPath = 'bedrijfVideos/' . $bedrijfVideoName;
            $bedrijfsProfielData['bedrijfVideo'] = $bedrijfVideoPath;

        }


         if($bedrijfsprofiel) {
            $bedrijfsprofiel->update($bedrijfsProfielData);
        } else {
            CompanyProfile::create([
                'company_id' => $company_id,
                'bedrijfsVoorstelling'=>request('bedrijfVoorstelling'),
                'bedrijfVideo'=>$bedrijfVideoPath,
                'bio'=>request('bio'),
                'doel'=>request('doel'),
                'skills'=>request('skills'),
                'projects'=>request('projects')

               
            ]);
        }


        
        return redirect()->route('bedrijf.profiel');


    }

    public function Companyrules() {
        return [

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
            'instagram' => 'sometimes|string|max:255',
            
        ];
    }

    public function CompanyProfilrules() {
        return [
            'bedrijfsVoorstelling' => 'sometimes|string|max:255',
            'bio' => 'sometimes|string|max:1000',
            'bedrijfVideo' => 'sometimes|file|mimes:mp4,ogx,oga,ogv,ogg,webm,png,gif,jpg,jpeg,svg',
            'doel' => 'sometimes|string|max:255',
            'skills' => 'sometimes|string|max:255',
            'gallery' => 'sometimes|string|max:255',
            'projects' => 'sometimes|string|max:255'
        ];
    }

    public function Userrules() {
        return [
            'telefoonnummer' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|max:255'
        ];
    }

    public function Galleryrules() {
        return [
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }






}
