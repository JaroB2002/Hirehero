<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Vacature;
use App\Models\Sollicitatie;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

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

        $vacature_id = $request->vacature_id;

        //De vacature Id staat in de url, haal de sollicitaties op die bij de vacature horen
        $sollicitaties = Sollicitatie::with('student')->where('vacature_id',$vacature_id)->get();
        
        

        //Krijg de minimum skills van de vacature
        $vacature = Vacature::where('id', $request->vacature_id)->first();
        $persoonlijkheden = $vacature->persoonlijkheid;

        //Persoonlijkheden worden opgeslagen in de database als een string, zet deze om naar een array

        $persoonlijkheden = explode(' ', $persoonlijkheden);
        $persoonlijkheden = array_map('strtolower', $persoonlijkheden);

        $overeenkomstenArray = [];



        //Krijg de studenten die gesolliciteerd hebben

        foreach($sollicitaties as $sollicitatie)
        {   
            //Krijg de persoonlijkheden van de sollicitant
            $sollicitatiePersoonlijkheid = $sollicitatie->student->persoonlijkheid;

            //Sla de persoonlijkheden op in een array
            $sollicitatiePersoonlijkheid = explode(',', $sollicitatiePersoonlijkheid);

            //Zet de persoonlijkheden om naar lowercase

            $sollicitatiePersoonlijkheid = array_map('strtolower', $sollicitatiePersoonlijkheid);

            //Krijg de overeenkomsten tussen de vacature en de sollicitant

            $overeenkomsten = array_intersect($persoonlijkheden, $sollicitatiePersoonlijkheid);

            //Sla de overeenkomsten op in een array

            $overeenkomstenArray[] = count($overeenkomsten);


        }        


        //Sorteer de sollicitaties op basis van de overeenkomsten

        
        $sollicitaties = collect($sollicitaties)->sortByDesc('overeenkomsten');

        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $sollicitaties->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $sollicitaties = new LengthAwarePaginator($currentItems, count($sollicitaties), $perPage, $currentPage, ['path' => $request->url(), 'query' => $request->query()]);




     

        
        return view('sollicitatie.index', ['sollicitaties' => $sollicitaties], ['vacature' => $vacature]);
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
