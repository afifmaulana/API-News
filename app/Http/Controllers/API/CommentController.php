<?php

namespace App\Http\Controllers\API;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('showComment');
    }

    public function comment(Request $request)
    {
        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->article_id = $request->article_id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;

        $review->save();

        return response()->json([
           'message' => 'Berhasil menambahkan Komentar',
            'status' => true,
            'data' => $review,
        ]);
    }

    public function showComment($article_id)
    {
        $reviews = Review::where('article_id', $article_id)->get();
        return response()->json([
           'message' => 'Berhasil menampilkan Komentar',
           'status' => true,
           'data' => ReviewResource::collection($reviews)
        ]);
    }

    public function CommentInComment(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->review_id = $request->review_id;
        $comment->comment = $request->comment;

        $comment->save();

        return response()->json([
           'message' => 'Berhasil Membalas Komentar',
            'status' => true,
            'data' => $comment
        ]);
    }

}
