<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class BedrijfController extends Controller
{
    public function index() {
        // Krijg de userId van de ingelogde gebruiker

        $userId = Auth::id();

        //Zoek de companyId op basis van de userId 
        //Dit staat in de Companies tabel

       $companyId = Company::where('user_id', $userId)->first()->id;

        //Krijg alle info van het bedrijf op basis van de companyId

        $company = Company::find($companyId);

        //Krijg de bedrijfnaam

        $companyName = $company->bedrijfnaam;
        $companyEmployees = $company->employees;
        //Zet dit in de session, om zo te printen

        session(['companyName' => $companyName]);
        session(['companyEmployees' => $companyEmployees]);


        
        //Zet de bedrijfnaam en de werknemers in een array en stuur deze naar de view

        return view('bedrijf.index', compact('companyName', 'companyEmployees'));

       

    }

    public function create() {

        return view('bedrijf.team');


    }

    public function storeEmployee() : RedirectResponse
        {

            //Kijk wat de huidige bedrijfId is

            $userId = Auth::id();

            $companyId = Company::where('user_id', $userId)->first()->id;

            //Maak een nieuwe werknemer aan

            $prefix = request('prefix');
            $number = request('number');



            $attributes = request()->validate([
                'voornaam' => 'required|string|max:255',
                'familienaam' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'telefoonnummer' => 'required|string|max:255',
                'role' => 'required|string|max:255',                
            ]);

            $attributes['telefoonnummer'] = $prefix . $number;


            $user = User::create($attributes);

            $employeeData = request()->validate([
                'functie' => 'required|string|max:255',
            ]);

            $employeeData['user_id'] = $user->id;

            $employeeData['company_id'] = $companyId;

           Employee::create($employeeData);

            //stuur een mail naar de werknemer

            event(new Registered($user));



            

            return redirect(RouteServiceProvider::BEDRIJF);


        }

    public function show() {

        
        //Kijk of er een user id is
        $userId = Auth::id();

        //Zoek de companyid Op basis van de userId
        $companyId = Company::where('user_id', $userId)->first()->id;

        //Zoek de werknemers op basis van de company id met alles van de tabel users

        $employees = Employee::where('company_id', $companyId);

        $employeesInfo = $employees->join('users', 'employees.user_id', '=', 'users.id')->get();

        //Ik wil de voornaam en achternaam in de dd zien

        


        return view('bedrijf.show', compact('employeesInfo'));       







        





    }

        
    }
