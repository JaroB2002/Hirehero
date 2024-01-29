<?php

/*namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class StudentRegisterController extends Controller
{

    public function create() {
        
        return view('student.create');
    }


    public function store() {

        //Valideer het formulier
        $prefix = request('prefix');
        $number = request('telefoonnummer');

        
       $attributes =  request()->validate([
        //Voornaam mag geen @ of andere rare tekens bevatten
        //telefoonnummer mag 0 zijn, mag geen letters bevatten, en het is een combinatie van de inhoud van 'prefix' en wat er in het telefoonnummer veld stond

            'voornaam' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u' ],
            'familienaam' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'telefoonnummer' => ['string','max:255', 'regex:/^[0-9]+$/u' ],
            'school' => ['required', 'string', 'max:255'],
            'opleiding' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string', 'max:255']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['telefoonnummer'] = $prefix . $number;

        //sla alle waarden op in een session
        //auth()->login($student);
      session(['step1_data' => $attributes]);

        //
        //Stuur de gebruiker door naar de volgende pagina

        return redirect()->route('student.update');

        
    }
    //

    public function edit() {

        

        //laat data van session dd
        return view('student.update');
    }

    public function update() {
        //Datum mag niet in het verleden liggen
        //cv mag leeg zijn


        //valideer het formulier

        $attributes = request()->validate([
            'interesse' => ['required', 'string', 'max:255'],
            'interesse2' => ['required', 'string', 'max:255'],
            'desinteresse1' => ['required', 'string', 'max:255'],
            'desinteresse2' => ['required', 'string', 'max:255'],
            'stageBegin' => ['required', 'date', 'max:255', 'after:today'],
            'stageEinde' => ['required', 'date', 'max:255', 'after:stageBegin'],
            'cv' => [ 'string', 'max:255', 'mimes:pdf,doc,docx', 'max:2048', 'nullable']
        ]);
        session(['step2_data' => $attributes]);


        //sla alle waarden op in een session



        //sla het op in de database
        //Sla de data van de beide sessions op in de database

        $data = session('step1_data');
        $data2 = session('step2_data');

        $data = array_merge($data, $data2);

        //put this data in a session
        session(['student_data' => $data]);

        //auth()->login($student);

        return redirect()->route('student.persoonlijk');

    }

    public function persoonlijk() {
        //laat data van session dd
        return view('student.persoonlijk');
    }

    public function storepersoonlijk() {

        //Ze moeten 5 kiezen

        //Kijk of er max 5 zijn aangevinkt

        $attributes = request()->validate([
            'persoonlijkheid' => ['required', 'array','min:5', 'max:5'],
            'persoonlijkheid.*' => ['required', 'string', 'max:255']
        ]);

        $persoonlijkheidString = json_encode($attributes['persoonlijkheid']);
        session(['characterdata' => ['persoonlijkheid' => $persoonlijkheidString]]);
        $data1 = session('student_data');
        $data2 = session('characterdata');

        $data = array_merge($data1, $data2);

        //put this data in a session

        //Sla het in de databank op

        User::create($data);
    }
}*/
