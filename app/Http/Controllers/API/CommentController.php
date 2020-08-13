<?php

namespace App\Http\Controllers\API;

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
        $review->coment = $request->coment;

        $review->save();

        return response()->json([
           'message' => 'Berhasil menambahkan Komentar',
            'status' => true,
            'data' => $review,
        ]);
    }

    public function showComment()
    {
        $reviews = Review::all();
        return response()->json([
           'message' => 'Berhasil menampilkan Komentar',
           'status' => true,
           'data' => ReviewResource::collection($reviews)
        ]);
    }

}
