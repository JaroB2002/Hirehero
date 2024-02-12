<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    //

    public function create(Request $request)
    {
        $review = new Review;
        $review->student_id = $request->student_id;
        $review->company_id = $request->company_id;
        $review->rating = $request->rating; //Rating van 1 tot 5
        $review->review = $request->review;
        $review->created_at = now();

        $review->save();

        return response()->json([
            'message' => 'Review created successfully'
        ], 201);

    }



    public function show(Request $request)
    {
      //Toon alle reviews van de company_id
        $reviews = Review::where('company_id', $request->company_id)->get();

        //Toon de profielfoto, naam en achternaam van de student die de review heeft geschreven

        foreach ($reviews as $review) {
            $review->student;

        }

        //Toon de voornaam, familienaam van de student aan de hand van de student_id en de usertable

        $student = User::where('id', $review->student_id)->first();

        $review->student->voornaam = $student->voornaam;
        $review->student->familienaam = $student->familienaam;
        $review->student->profielfoto = $student->profielfoto;

        $averageRating = Review::where('company_id', $request->company_id)->avg('rating');

        
        return view('bedrijf/profiel', [ 'reviews' => $reviews], ['averageRating' => $averageRating]);



    }

}
