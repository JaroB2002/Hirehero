<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelectieController extends Controller
{
    //
    public function index() {
        return view('selectie.index');
    }

    public function process(Request $request) {

        //Valideer het formulier

      $request->validate([
        'selectie'=> 'required|in:student,bedrijf',
      ]);
      //Haal de geselecteerde waarde op

      $selectedValue = $request->input('selectie');

      //Sla de waarde op in de sessie

        $request->session()->put('selectie', $selectedValue);

        //Stuur de gebruiker door naar de volgende pagina

        return redirect()->route('volgende.pagina');
    }

    //Kijk of er een waarde in de sessie staat

    public function volgende(Request $request) {
        if($request->session()->has('selectie')) {
            //Haal de waarde uit de sessie

            $selectedValue = $request->session()->get('selectie');

            //Stuur de gebruiker door naar de juiste pagina

            if($selectedValue == 'student') {
                return redirect()->route('student.create');
            } else {
                return redirect()->route('bedrijf.create');
            }
        } else {
            //Stuur de gebruiker terug naar de vorige pagina

            return redirect()->route('selectie.pagina');
        }
    }



    }

