<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8',
            'no_hp'     => 'required|numeric',
            'username'  => 'required|unique:users',

        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create user
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'role'      => 'user',
            'username'  => $request->username,
            'no_hp'     => $request->no_hp,

        ]);

        //return response JSON user is created
        if($user) {
            return response()->json([
                'success' => true,
                'user'    => $user,
            ], 201);
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'     => 'required',
            'password'  => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //get credentials from request
        $credentials = $request->only('username', 'password');

        //if auth failed
        if(!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Username atau Password Anda salah'
            ], 401);
        }

        //if auth success
        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api')->user(),
            'token'   => $token
        ], 200);

    }

    public function logout()
    {
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if($removeToken) {
            //return response JSON
            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!',
            ]);
        }
    }
}
