<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function createStudent(): View
    {
        return view('student.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeStudent(Request $request) //RedirectResponse
    
    {
    
        $prefix = request('prefix');
        $number = request('telefoonnummer');

        $attributes = $request->validate([
            'voornaam' => ['required', 'string', 'max:255'],
            'familienaam' => ['required', 'string', 'max:255'],
            'telefoonnummer' => ['numeric', 'digits_between:9,10'],
            'school' => ['required', 'string', 'max:255'],
            'opleiding' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255']



        ]);

        
        $attributes['telefoonnummer'] = $prefix . $number;

        //sla alle waarden op in een session

        session(['step1_data' => $attributes]);

        return redirect()->route('student.update');



    }

    //Hier komt de functie om de student te updaten

    public function editStudent() {

        

        //laat data van session dd
        return view('student.update');
    }

    public function updateStudent() {
        //Datum mag niet in het verleden liggen
        //cv mag leeg zijn


        //valideer het formulier

        $attributes = request()->validate([
            //Interesse en desinteresse mogen niet hetzelfde zijn

            'interesse' => ['required', 'string', 'max:255', 'different:desinteresse1', 'different:desinteresse2, different:interesse2'],
            'interesse2' => ['required', 'string', 'max:255', 'different:desinteresse1', 'different:desinteresse2, different:interesse'],
            'desinteresse1' => ['required', 'string', 'max:255', 'different:interesse', 'different:interesse2, different:desinteresse2'],
            'desinteresse2' => ['required', 'string', 'max:255', 'different:interesse', 'different:interesse2, different:desinteresse1'],
            'stageBegin' => ['required', 'date', 'max:255', 'after:today'],
            'stageEinde' => ['required', 'date', 'max:255', 'after:stageBegin'],
            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:2048']
            //max 2048 betekend 2mb
        ]);

        $attributes['cv'] = request()->file('cv')->store('cv');




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

        return redirect()->route('student.persoonlijk')->with('success', 'Uw account is aangemaakt!');

    }

    public function persoonlijkStudent() {
        //laat data van session dd
        return view('student.persoonlijk');
    }

    public function storepersoonlijkStudent() : RedirectResponse {

        //Krijg het email adres uit de session

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

        //dd($data);

        //put this data in a session

        //Sla het in de databank op

        $user = User::create($data);

        event(new Registered($user));

        //Auth::login($user);

        return redirect(RouteServiceProvider::STUDENT);


    }

    public function createCompany(): View
    {
        return view('bedrijf.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeCompany(Request $request) //RedirectResponse
    
    {
    
        $prefix = request('prefix');
        $number = request('telefoonnummer');

        $attributes = $request->validate([
            'voornaam' => ['required', 'string', 'max:255'],
            'familienaam' => ['required', 'string', 'max:255'],
            'telefoonnummer' => ['numeric', 'digits_between:9,10'],
            'bedrijfnaam' => ['required', 'string', 'max:255'],
            'employees' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255']

        ]);

        
        $attributes['telefoonnummer'] = $prefix . $number;

        //sla alle waarden op in een session

        //event(new Registered($user));

        //Kijk wat de rol is van de gebruiker en stuur hem door naar de juiste pagina
   

        //Auth::login($user);

        //return redirect();

        
        $user = User::create($attributes);

        event(new Registered($user));

        //Auth::login($user);

        return redirect(RouteServiceProvider::BEDRIJF);


    }

    //





}
