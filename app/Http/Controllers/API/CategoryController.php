<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $categorys = Category::all();
        return response()->json([
            'message' => 'Berhasil Menampilkan Category',
            'status' => true,
            'data' => CategoryResource::collection($categorys),
        ]);
    }
}
