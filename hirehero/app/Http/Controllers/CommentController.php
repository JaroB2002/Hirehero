<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //

    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->student_id = $request->student_id;
        $comment->review_id = $request->review_id;
        $comment->comment = $request->comment;
        $comment->created_at = now();

        $comment->save();

        return response()->json([
            'message' => 'Comment created successfully'
        ], 201);

    }

    public function show(Request $request)
    {
        $comments = Comment::where('review_id', $request->review_id)->get();

        //Zowel student als bedrijf kunnen comments zien
        //Je kan de user_id van de review ophalen en dan de user_id van de student of bedrijf
        //Kijk naar de role van de user en haal de naam van de user op

        foreach($comments as $comment)
        {
            $comment->load('user');
        }

        //Load betekent dat je de user_id van de comment kan ophalen en dan de naam van de user

       return response()->json([
            'comments' => $comments
        ], 200);

        

}

    public function delete(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();

        return response()->json([
            'message' => 'Comment deleted successfully'
        ], 200);
    }


}
