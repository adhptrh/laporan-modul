<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        $creds = request(["username","password"]);
        if ($token = Auth::attempt($creds)) {
            return $this->respondWithToken($token);
        }
        return $this->respondUnauthorized();
    }

    public function me()
    {
        return response()->json(Auth::user());
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(["message"=>"Successfully logged out"]);
    }

    public function resetPassword()
    {
        $valid = Validator::make(request()->all(),
        [
            "old_password"=>"required",
            "new_password"=>"required",
        ]);

        if ($valid->fails())
        {
            return $this->respondInvalidData();
        }

        $password = request(["new_password","old_password"]);
        $user = Auth::user();
        
        if (Hash::check($password["old_password"], $user->password))
        {
            $user->password = Hash::make($password["new_password"]);
            $user->save();
            Auth::logout();
            return response()->json([
                "message"=>"reset success, user logged out"
            ]);
        }
        return response()->json([
            "message"=>"old password did not match"
        ]);

    }

    public function respondWithToken($token)
    {
        return response()->json([
            "access_token"=>$token,
            "token_type"=>"bearer",
            "expires_in"=>auth()->factory()->getTTL()*60
        ]);
    }
}
