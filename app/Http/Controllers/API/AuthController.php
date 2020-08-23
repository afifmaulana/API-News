<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'min:6|required'
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
        ];

        $traslate = [
            'name' => 'Nama'
        ];

        $validator = Validator::make($request->all(), $rules, $message, $traslate);
        if ($validator->fails()){
            return Response::transform($validator->errors(), true, (object)[], 400);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->api_token = Str::random(80);

        $user->save();


        return Response::transform('Berhasil Register', true, $user, 200);

    }

    public function login(Request $request)
    {

        //Validasi Form
        $rules = Validator::make($request->all(),[
            'email' => 'email|required',
            'password' => 'min:6|required'
            ]);

        if ($rules->fails())
        {
            return response()->json([
               'message' =>$rules->errors(),
                'status' =>false,
                'data'   =>(object)[]
            ], 401);
        }


        //Validasi Pada Database
        $credential = [
          'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credential))
        {
            $user = Auth::user();
            return response()->json([
                'message' => 'Berhasil Login',
                'status' => true,
                'data' => $user,
            ], 200);
        }

        return response()->json([
            'message' => 'Masukkan Email dan Password yang benar',
            'status' => false,
            'data' => (object)[]
        ], 401);
    }
}
