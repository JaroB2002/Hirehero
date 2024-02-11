<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    //

    public function create(Request $request)
    {
        $like = new Like;
        $like->user_id = $request->user_id;
        $like->review_id = $request->review_id;
        $like->like = $request->like;
        $like->created_at = now();

        $like->save();

        return response()->json([
            'message' => 'Like created successfully'
        ], 201);

    }

    public function show(Request $request)
    {
        $likes = Like::where('review_id', $request->review_id)->get();

        //Zowel student als bedrijf kunnen likes zien
        //Je kan de user_id van de review ophalen en dan de user_id van de student of bedrijf
        //Kijk naar de role van de user en haal de naam van de user op

        foreach($likes as $like)
        {
            $like->load('user');
        }

        //Load betekent dat je de user_id van de like kan ophalen en dan de naam van de user

       return response()->json([
            'likes' => $likes
        ], 200);

        
    }

    
}
