<?php

namespace App\Http\Controllers;

use App\Models\Bedrijf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class BedrijfRegisterController extends Controller
{

    
    //Ik ben ingelogd als bedrijf, ik wil alle informatie van mijn bedrijf kunnen zien

   public function show() {

    $user = Auth::user();

    $bedrijf = $user->bedrijf;

    return view('bedrijf.show', compact('bedrijf'));
    


   }


   
}