<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //

    public function index() {
        //Toon alle projecten

        $projects = Project::all();

        return view('project.index', ['projects' => $projects]);
    }

    public function show($projectName) {
        //Toon een specifiek project
        //Hier gebruik ik where in plaats van find omdat ik een string gebruik in plaats van een id
        $project = Project::where('projectName',$projectName)->first(); 

        //Toon de voornaaam en familienaam van de auteur van het project, op basis van de user_id, die ik uit de tabel users haal






        return view('project.show', ['project' => $project]);
    }

    public function create() {
        //Toon het formulier om een nieuw project aan te maken
        return view('project.create');
    }

    public function store(Request $request) {
        //Sla het nieuwe project op in de database

        //De auteur van het project is de huidige gebruiker 
        //De naam van de auteur is de voornaam en familienaam van de huidige gebruiker


         $author = Auth::user()->voornaam . ' ' . Auth::user()->familienaam;

         //Het bedrijf waarvoor de gebruiker werkt is het bedrijf van de huidige gebruiker
            $company_id = Auth::user()->company->id;


        $request->validate($this->projectRules());


        $project = new Project();
        $project->projectName = $request->projectName;
        $project->projectDescription = $request->projectDescription;
        $project->introduction = $request->introduction;
        $project->tags = $request->tags;
        $project->conclusion = $request->conclusion;
        $project->projectLink = $request->projectLink;
        $project->thumbnail = $request->thumbnail->store('thumbnails');
        $project->projectImage = $request->projectImage->store('projectImages');
        $project->projectLink = $request->projectLink;
        
        $project->company_id = $company_id;
        $project->author = $author;

        $project->save();

        return redirect()->route('project.index');
    }

    public function projectRules() {
        //Regels voor het aanmaken van een project

        return [
            'projectName' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'projectImage'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'projectDescription' => 'required|string|max:1000',
            'introduction' => 'required|string|max:1000',
            'tags' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'conclusion' => 'required|string|max:1000',
            'projectLink' => 'sometimes|url|max:255|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'

        ];

    }



    
}
