<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends APIController
{
    public function authenticate(Request $request)
    {
        // Grabs credentials from the request.
        $credentials = $request->only('email', 'password');

        try {
            // Attempts to verify the credentials and create a token for the user.
            if (! $token = JWTAuth::attempt($credentials))
                return response()->json(['error' => 'invalid_credentials'], 401);
        } catch (JWTException $e) {
            // Throws error if something went wrong while attempting to encode the token.
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}
