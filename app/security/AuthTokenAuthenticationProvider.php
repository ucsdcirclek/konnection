<?php

use Dingo\Api\Auth\Provider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tappleby\AuthToken\AuthTokenManager;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

/**
 * Class AuthTokenAuthenticationProvider
 *
 * Credits to adosaiguas: https://github.com/tappleby/laravel-auth-token/issues/31
 */
class AuthTokenAuthenticationProvider extends Provider {
    /**
     * AuthToken authentication manager.
     *
     * @var \Tappleby\AuthToken\AuthTokenManager
     */
    protected $auth;

    /**
     * Create a new AuthTokenAuthenticationProvider instance.
     *
     * @param  \Tappleby\AuthToken\AuthTokenManager  $auth
     * @return void
     */
    public function __construct(AuthTokenManager $auth)
    {
        $this->auth = $auth;
    }

    protected function getAuthToken($request) {
        $token = $request->header('X-Auth-Token');

        if(empty($token)) {
            $token = $request->input('auth_token');
        }

        return $token;
    }

    /**
     * Authenticate request with Auth Token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Routing\Route  $route
     * @return mixed
     */
    public function authenticate(Request $request, Route $route)
    {
        $token = $this->getAuthToken($request);
        $driver = $this->auth->driver();
        $user = $driver->validate($token);

        if (!$user) {
            throw new UnauthorizedHttpException('AuthToken', 'Invalid authentication credentials.');
        }

        Auth::setUser($user);

        return $user;
    }

    /**
     * Get the providers authorization method.
     *
     * @return string
     */
    public function getAuthorizationMethod()
    {
        return 'auth_token';
    }
}
