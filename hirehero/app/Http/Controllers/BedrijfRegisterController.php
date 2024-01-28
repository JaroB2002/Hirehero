<?php

namespace App\Http\Controllers;

use App\Models\Bedrijf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class BedrijfRegisterController extends Controller
{

    public function create() {
        
        return view('bedrijf.create');
    }


    public function store() {


        $prefix = request('prefix');
        $number = request('telefoonnummer');

        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255' ],
            'bedrijfnaam' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'. Bedrijf::class],
            'password' => ['required', 'string', 'min:8'],
            'employees' => ['required', 'string', 'max:255'],
            'telefoonnummer' => ['string','max:255'],
            'role' => ['required', 'string', 'max:255']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['telefoonnummer'] = $prefix . $number;

        Bedrijf::create($attributes);


        //
        //Stuur de gebruiker door naar de volgende pagina

        dd('Bedrijf aangemaakt');

    }
    //

   
}