<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function profile()
    {
            $user = User::where('id', Auth::user()->id)->first();
            return response()->json([
                'message' => 'successfully get user is login',
                'status' => true,
                'data' => new UserResource($user)
            ]);

    }

}
