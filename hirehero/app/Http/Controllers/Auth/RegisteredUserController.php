<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Models\Company;

use App\Models\Student;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



class RegisteredUserController extends Controller
{
    /**
     * 
     */

    public function create(): View

    {

        // Kijk welke route de gebruiker volgt, als de gebruiker de student route volgt, dan wordt de student view getoond, als de gebruiker de bedrijf route volgt, dan wordt de bedrijf view getoond
        if (request()->routeIs('student.create')) {
            return view('student.create');
        } else {
            return view('bedrijf.create');
        }


    }

    public function store(Request $request) : RedirectResponse  {

        //Kijk welke route de gebruiker volgt, als de gebruiker de student route volgt, dan wordt de student view getoond, als de gebruiker de bedrijf route volgt, dan wordt de bedrijf view getoond
            // Valideer de input van de gebruiker   
            $prefix = request('prefix');
            $number = request('number');



            $attributes = request()->validate([
              'voornaam'=> 'required|string|max:255',
                'familienaam'=> 'required|string|max:255',
                'email'=> 'required|string|email|max:255|unique:users',
                'telefoonnummer'=> 'numeric|digits_between:9,12',
                'password'=> ['required', 'confirmed', Rules\Password::defaults()],
                'role'=> ['required', 'string']
            ]);

            $attributes['telefoonnummer'] = $prefix . $number;

            //start een session voor de gebruiker
            //$request->session()->put('user', $attributes);
            $user = User::create($attributes);

            //Kijk wat de role is van de persoon da net is aangemaakt

            if ($attributes['role'] == 'student') {

                $studentData = request()->validate([
                    'school' => 'required|string|max:255',
                    'opleiding'=> 'required|string|max:255',
                   
                ]);
                $studentData['user_id'] = $user->id;

                //Voeg de nieuwe input toe aan de student in de session
                session(['student' => $studentData]);


                //stuur de student door naar de volgende pagina
                return redirect()->route('student.create2');
            } 
            
            else {
                
                //Krijg data uit de session

                $companyData = request()->validate([
                    'bedrijfnaam'=> 'required|string|max:255',
                    'employees' => 'required|string|max:255',
                ]);

                $companyData['user_id'] = $user->id;

                $company = Company::create($companyData);
                //Maak een bedrijfsprofiel aan

                CompanyProfile::create([
                    'company_id' => $company->id,
                    'bedrijfVoorstelling'=> 'Vul hier een korte voorstelling van je bedrijf in',
                    'bedrijfVideo'=> '',
                    'bio'=> 'Vul hier een korte bio van je bedrijf in',
                    'doel'=> 'Vul hier het doel van je bedrijf in',
                ]);

                event(new Registered($user));


                return redirect(RouteServiceProvider::BEDRIJF);


            
               //stuur de bedrijf door naar de volgende pagina
            }

}


    public function create2(): View
    {
        return view('student.create2');
    }

    public function store2(Request $request)  {


        
        //Valideer de input van de gebruiker
        $attributes = request()->validate([
            'interesse'=> 'required|string|max:255',
            'interesse2'=> 'required|string|max:255',
            'desinteresse1'=> 'required|string|max:255',
            'desinteresse2'=> 'required|string|max:255',
            'stageBegin'=> 'required|string|max:255',
            'stageEinde'=> 'required|string|max:255',
            'cv'=> ['nullable', 'file', 'mimes:pdf', 'max:2048']
        ]);
         
        //De attribuut CV wordt enkel opgeslagen als CV niet null is
        if(request()->hasFile('cv') == true) 
        {
            $attributes['cv'] = request()->file('cv')->store('cv');
        }
        else
        {
            $attributes['cv'] = "";
        }
        //Haal de user en student uit de session

        //Voeg de nieuwe input toe aan de student in de session
       $data = session('student');
        $data = array_merge($data, $attributes);
        session(['student' => $data]);
    

        //Stuur de student door naar de volgende pagina

        return redirect()->route('student.create3');



    
    }

    public function create3(): View
    {
        return view('student.create3');
    }

    public function store3(Request $request) : RedirectResponse {
        //Valideer de input van de gebruiker
        $attributes = request()->validate([
            'persoonlijkheid' => ['required', 'array','min:5', 'max:5'],

            'persoonlijkheid.*' => ['required', 'string', 'max:255']
        ]);

        $persoonlijkheidString = implode(' ', $attributes['persoonlijkheid']);
        session(['characterdata' => ['persoonlijkheid' => $persoonlijkheidString]]);
        $data1 = session('student');
        $data2 = session('characterdata');

        $studentData = array_merge($data1, $data2);
        $student = Student::create($studentData);
        
        event(new Registered($student));

        return redirect(RouteServiceProvider::STUDENT);




       
    }



   
}

?>