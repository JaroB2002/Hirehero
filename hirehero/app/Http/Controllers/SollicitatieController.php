<?php

namespace App\Http\Controllers;

use App\Models\Vacature;
use App\Models\Sollicitatie;
use function Ramsey\Uuid\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SollicitatieController extends Controller
{
    //

    public function create(Request $request)
    {
        $sollicitatie = new Sollicitatie;
        $sollicitatie->student_id = $request->student_id;
        $sollicitatie->company_id = $request->company_id;
        $sollicitatie->vacature_id = $request->vacature_id;
        $sollicitatie->status = $request->status;
        $sollicitatie->feedback = $request->feedback;

        $sollicitatie->save();

        return response()->json([
            'message' => 'Sollicitatie created successfully'
        ], 201);

    }

    public function index(Request $request)
    {
        //vind de vacature_id, die staat in de url 


        //De vacature Id staat in de url, haal de sollicitaties op die bij de vacature horen
        
    

        $sollicitaties = Sollicitatie::where('vacature_id', $request->vacature_id)->paginate(5);




        //verdeel de sollicitaties in verschillende pagina's
        
        return view('sollicitatie.index', ['sollicitaties' => $sollicitaties]);
    }

    public function updateStatus(Request $request)

    {
        //Vind de sollicitaties op basis van de vacature_id
        $vacature_id = $request->vacature_id;
        $status = $request->status;

        $sollicitaties = Sollicitatie::where('vacature_id', $vacature_id)->get();

        //Update de status van de sollicitaties

        foreach($sollicitaties as $sollicitatie)
        {
            $sollicitatie->update([
                'status' => $status
            ]);
        }

        return redirect('/bedrijf/vacature/' . $vacature_id . '/sollicitaties')->with('success', 'Vacature status is aangepast');

        
    }

}
