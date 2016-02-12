<?php

namespace App\Api\Controllers;

use App\Api\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use Dingo\Api\Facade\API;

/**
 * Handles JWT authentication.
 */
class AuthController extends APIController
{
    /**
     * When this route is reached the jwt.auth middleware has already been
     * applied, so the route parses the valid token to get the user associated
     * with the JWT.
     */
    public function getAuthenticatedUser()
    {
        return JWTAuth::parseToken()->authenticate();
    }

    /**
     * Responds with 200 OK if JWT is valid. If this route is reached, then the
     * ticket must be valid because of middleware applied before this route is
     * reached.
     */
    public function validateToken() {
        return API::response()->array(['status' => 'success'])->statusCode(200);
    }

    /**
     * Generates a JWT for given user credentials.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Registers a new user and returns a token corresponding to newly created
     * user.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(UserRequest $request)
    {
        $user = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ];

        $user = User::create($user);
        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'));
    }
}
