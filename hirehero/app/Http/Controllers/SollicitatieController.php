<?php

namespace App\Http\Controllers;

use App\Models\Sollicitatie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Ramsey\Uuid\v1;

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
        $vacature_id = $request->vacature_id;
    $sollicitaties = Sollicitatie::where('vacature_id', $vacature_id)->get();

    //Toon de naam van de student en de titel van de vacature
    $sollicitaties->load('student', 'vacature');

    return view('sollicitatie.index', [
        'sollicitaties' => Sollicitatie::orderBy('created_at', 'asc')->paginate(5)]
    );

        
    }

    public function updateStatus()

    {
        //je kan de id uit het formulier halen

        $id = request('sollicitatie_id');

        //Zoek de vacature op basis van de id

        $vacature = Sollicitatie::find($id);

        ///Kijk wat er wordt meegegeven in de request
        $status = request('status');
        //Update de status van de vacature

        $vacature->update([
            'status' => $status
        ]);


        return redirect(route('sollicitatie.index'))->with('success', 'Vacature status is aangepast');

        
    }

}
