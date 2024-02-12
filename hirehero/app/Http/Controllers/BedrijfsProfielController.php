<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Review;
use App\Models\Comment;
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

        
        //We nemen de company_id van de ingelogde gebruiker
        $company_id = Auth::user()->company->id;
        
        //We nemen de informatie van het bedrijf op basis van de company_id
        $company = Company::find($company_id);

        //We nemen de vacatures van het bedrijf op basis van de company_id
        $vacatures = Vacature::where('company_id', $company_id)->get();
        //We nemen de werknemers van het bedrijf op basis van de company_id
        $employees = Employee::where('company_id', $company_id)->get();

        //Krijg de employee voornaam, familienaam en email uit tabel users
        foreach($employees as $employee) {
            $employee->voornaam = $employee->user->voornaam;
            $employee->familienaam = $employee->user->familienaam;
            $employee->email = $employee->user->email;


        }

        //Je kan de foto's van de gallerij van het bedrijf zien op de bedrijfsprofiel pagina
        $galleries = Gallerij::where('company_profile_id', $company_id)->get();

        //Elke foto van de gallerij wordt opgehaald
        foreach($galleries as $gallery) {
            $gallery->image = $gallery->image;
        }

        //We nemen de laatste 3 foto's van de gallerij van het bedrijf op basis van de company_id
        $galleries = Gallerij::where('company_profile_id', $company_id)->orderBy('created_at', 'desc')->take(3)->get();

        
        //We nemen de email en telefoonnummer van het bedrijf uit de tabel users
        $company->email = $company->user->email;
        $company->telefoonnummer = $company->user->telefoonnummer;

        //We nemen de bedrijfsprofiel van het bedrijf op basis van de company_id
        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        //We nemen de projecten van het bedrijf op basis van de company_id
        $projects = Project::where('company_id', $company_id)->get();

        //Toon alle reviews van de company_id

        $reviews = Review::where('company_id', $company_id)->get();
        //Toon de voornaam, familienaam van de student aan de hand van de student_id en de usertable

        foreach ($reviews as $review) {
            $student = $review->student;
            $review->student->voornaam = $student->voornaam;
            $review->student->familienaam = $student->familienaam;
            $review->student->profielfoto = $student->profielfoto;
        }

        //Toon de gemiddelde rating van de reviews van het bedrijf

        $averageRating = Review::where('company_id', $company)->avg('rating');

        //Toon de comments van de review

        $comments = Comment::where('review_id', $review->id)->get();

        //Toon de voornaam, familienaam van de user aan de hand van de user_id en de usertable

        foreach ($comments as $comment) {
            $user = $comment->user;
            $comment->user->voornaam = $user->voornaam;
            $comment->user->familienaam = $user->familienaam;

        }


        $likes = Like::where('review_id', $review->id)->get();

        //Haal de review_id op en kijk of de user_id van de like gelijk is aan de ingelogde user_id
        //Als dat zo is, dan is de like van de ingelogde user

        foreach ($likes as $like) {
            $like->user_id = $like->user->id;
            $like->review_id = $like->review->id;
            $like->like = $like->like;
        }








        //We geven de informatie van het bedrijf, de vacatures, de werknemers, de bedrijfsprofiel, de gallerij en de projecten mee naar de view
        return view('bedrijf.profiel', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel', 'galleries', 'projects', 'reviews', 'comments', 'likes'));


    }


    public function edit() {

        //De edit functie is voor het tonen van de bedrijfsprofiel edit pagina

        //We nemen de company_id van de ingelogde gebruiker
        $company_id = Auth::user()->company->id;

        //We nemen de informatie van het bedrijf op basis van de company_id
        $company = Company::find($company_id);

        //We nemen de vacatures van het bedrijf op basis van de company_id
        $vacatures = Vacature::where('company_id', $company_id)->get();

        //We nemen de werknemers van het bedrijf op basis van de company_id
        $employees = Employee::where('company_id', $company_id)->get();

        //Krijg de employee voornaam, familienaam en email uit tabel users
        
        foreach($employees as $employee) {
            $employee->voornaam = $employee->user->voornaam;
            $employee->familienaam = $employee->user->familienaam;
            $employee->email = $employee->user->email;
        }

        //We nemen de bedrijfsprofiel van het bedrijf op basis van de company_id
        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

        //Je kan de foto's van de gallerij van het bedrijf zien
        if ($bedrijfsprofiel) {
        $galleries = Gallerij::where('company_profile_id', $bedrijfsprofiel->id)->get();
        } else {
            $galleries = null;
        }

        //Toon de projecten van het bedrijf

        $projects = Project::where('company_id', $company_id)->get();

    
        $company->email = $company->user->email;
        $company->telefoonnummer = $company->user->telefoonnummer;

        


    

        return view('bedrijf.profielEdit', compact('company', 'vacatures', 'employees', 'bedrijfsprofiel', 'galleries', 'projects'));
    }


    public function update(Request $request) {

        //De update functie is voor het updaten van de bedrijfsprofiel


        //Kijk of de bedrijfsprofiel al bestaat op basis van de company_id
        $company_id = Auth::user()->company->id;

        //We nemen de bedrijfsprofiel van het bedrijf op basis van de company_id
        $bedrijfsprofiel = CompanyProfile::where('company_id', $company_id)->first();

    
        //Kijk of er foto's zijn geüpload voor de gallerij
        if ($request->hasFile('gallerij')) {    
            $galleries = $request->file('gallerij');
            $company_profile_id = $request->company_profile_id;

            //Loop door elk bestand
            foreach ($galleries as $gallery) {
                // Valideer elk geüploade bestand
                $request->validate($this->Galleryrules());
                // Sla elk bestand op in de map public/gallerij
                $galleryName = time() . '_' . $gallery->getClientOriginalName();
                $gallery->move(public_path('gallerij'), $galleryName);
                $galleryPath = 'gallerij/' . $galleryName;
                // Voeg elk bestand toe aan de tabel gallerij
                Gallerij::create([
                    'company_profile_id' => $company_profile_id,
                    'image' => $galleryPath,
                ]);
        }
    }
       
        
        //We nemen de company_id van de ingelogde gebruiker en de informatie van het bedrijf op basis van de company_id
        $company = Company::find($company_id);

        //Kijk of de companydata voldoet aan de validatieregels
        $companyData = $request->validate($this->Companyrules());


        //Wanneer ze er aan voldoen, update de tabel company met de nieuwe data
        $company->update($companyData);

        //Kijk of de userdata voldoet aan de validatieregels
        $userData = $request->validate($this->Userrules());

        //Wanneer ze er aan voldoen, update de userdata
        $company->user->update($userData);
       

        //Kijk of de bedrijfsprofieldata voldoet aan de validatieregels
        $bedrijfsProfielData = $request->validate($this->CompanyProfilrules());


            //Kijk of er een video is geüpload
            if ($request->hasFile('bedrijfVideo')) {
            $bedrijfVideo = $request->file('bedrijfVideo');
            $bedrijfVideoName = time() . '_' . $bedrijfVideo->getClientOriginalName();
            $bedrijfVideo->move(public_path('bedrijfVideos'), $bedrijfVideoName);
            $bedrijfVideoPath = 'bedrijfVideos/' . $bedrijfVideoName;
            $bedrijfsProfielData['bedrijfVideo'] = $bedrijfVideoPath;

        }


        //Kijk of er een bedrijfsprofiel bestaat
         if($bedrijfsprofiel) {
            //Wanneer het bestaat, update de tabel bedrijfsprofiel met de nieuwe data
            $bedrijfsprofiel->update($bedrijfsProfielData);
        } else {
           //Toon dat er geen bedrijfsprofiel bestaat
            return redirect()->route('bedrijf.profiel', ['bedrijfsprofiel' => $bedrijfsprofiel])->with('error', 'Er bestaat geen bedrijfsprofiel');
        }
        
        //Toon dat de bedrijfsprofiel is geüpdatet, en stuur de gebruiker terug naar de bedrijfsprofiel pagina
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
