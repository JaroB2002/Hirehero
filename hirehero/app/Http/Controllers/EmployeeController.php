<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    //
    /*
    public function create() {
        return view('');
    }*/

    public function index() {

        //Krijg de user id van de ingelogde gebruiker

        $user_id = auth()->user()->id;

        //Krijg de employee id van de ingelogde gebruiker

         Employee::where('user_id', $user_id)->first()->id;

        //Krijg de company id van de ingelogde gebruiker

        $company_id = Employee::where('user_id', $user_id)->first()->company_id;

        //Krijg de company van de ingelogde gebruiker

        $company = Company::where('id', $company_id)->first();

        return view('employee.index', ['company' => $company]);



    }

    


}
