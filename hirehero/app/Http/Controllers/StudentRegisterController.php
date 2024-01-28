<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Student::class],
            'telefoonnummer' => ['string','max:255'],
            'school' => ['required', 'string', 'max:255'],
            'opleiding' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string', 'max:255']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['telefoonnummer'] = $prefix . $number;


        Student::create($attributes);

        //sla alle waarden op in een session
        //auth()->login($student);
        session(['step1_data' => $attributes]);

        //
        //Stuur de gebruiker door naar de volgende pagina

        return redirect()->route('student.info');

        


        



    }
    //

    public function info() {

        

        //laat data van session dd
        return view('student.info');
    }
}
