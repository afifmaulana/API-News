<?php

namespace App\Http\Controllers\API;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'showArticleCategory']);
    }

    public function index()
    {
        $articles = Article::all();
        return response()->json([
            'message' => 'Berhasil Menampilkan Artikel',
            'status' => true,
            'data' => ArticleResource::collection($articles),
        ]);
    }


    public function store(Request $request)
    {
        $rules = Validator::make($request->all(),[
            'title' => 'required',
            'content_article' => 'required',
            'image' => 'file|required|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($rules->fails()) {
            return response()->json([
                'message' => $rules->errors(),
                'status' => false,
                'data' => (object)[]
            ]);
        }


        $image_article = $request->file('image');
        $path = time(). $image_article->getClientOriginalExtension();
        $destinationPath = 'uploads/articles' . $path;
        Storage::disk('s3')->put($destinationPath, file_get_contents($image_article));

        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->content = $request->content_article;
        $article->image = Storage::disk('s3')->url($destinationPath, $path);

        $article->save();

        return response()->json([
            'message' => 'Berhasil Menambahkan Artikel',
            'status' => true,
            'data' => $article
        ]);
    }

    public function updateArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->content = $request->content_article;

        $article->update();

        return response()->json([
            'message' => 'Berhasil Mengubah Artikel',
            'status' => true,
            'data' => $article
        ]);
    }

    public function updateImage(Request $request, $id)
    {
//        dd($request->all());
        $image_article = $request->file('image');
        $path = time(). $image_article->getClientOriginalExtension();
        $destinationPath = 'uploads/articles' . $path;
        Storage::disk('s3')->put($destinationPath, file_get_contents($image_article));;

        $article = Article::find($id);
        $article->image = Storage::disk('s3')->url($destinationPath, $path);

        $article->update();

        return response()->json([
            'message' => 'Berhasil Mengubah Artikel',
            'status' => true,
            'data' => $article
        ]);
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->status = false;
        $article->update();

        return response()->json([
            'message' => 'Berhasil Menghapus Artikel',
            'status' => true,
            'data' => $article
        ]);
    }

    public function showArticleUser()
    {
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Artikel',
            'status' => true,
            'data' => ArticleResource::collection($articles),
        ]);
    }

    public function showArticleCategory($category_id)
    {
        $articles = Article::where('category_id', $category_id)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Artikel',
            'status' => true,
            'data' => ArticleResource::collection($articles),
        ]);
    }


}
