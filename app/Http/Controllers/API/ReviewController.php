<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function ReviewStore(Request $request)
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

    public function ReviewUpdate(Request $request, $id)
    {
        $review = Review::find($id);
        $review->user_id = Auth::user()->id;
//        $review->article_id = $request->article_id;
//        $review->rating = $request->rating;
        $review->comment = $request->comment;

        $review->update();

        return response()->json([
            'message' => 'Berhasil Mengubah Komentar',
            'status' => true,
            'data' => $review
        ]);
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return response()->json([
            'message' => 'Berhasil Menghapus Komentar',
            'status' => true,
            'data' => (object)[]
        ]);
    }


}
