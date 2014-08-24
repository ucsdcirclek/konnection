<?php

class UsersController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */
    public function index()
    {
        return User::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     * POST /user
     *
     * @return \LaravelBook\Ardent\Ardent|\LaravelBook\Ardent\Collection
     * @throws Dingo\Api\Exception\StoreResourceFailedException
     */
    public function store()
    {
        $user = new User;

        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Input::get('password');

        // The password confirmation will be removed from model
        // before saving. This field will be used in Ardent's
        // auto validation.
        $user->password_confirmation = Input::get('password_confirmation');

        // Save if valid. Password field will be hashed before save
        $user->save();

        if (!$user->getKey()) {
            // Get validation errors (see Ardent package)
            $error = $user->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $error);
        }

        // Redirect with success message, You may replace "Lang::get(..." for your custom message.
        return User::find($user->id);
    }

    /**
     * Display the specified resource.
     * GET /user/{id}
     *
     * @param  int $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function show($id)
    {
        try {
            return User::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     * PUT /user/{id}
     *
     * @param  int $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function update($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $user->username = Input::get('username');
        $user->email = Input::get('email');

        $user->updateUniques();

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /user/{id}
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $user->delete();

        return Response::make(null, 204);
    }

    /**
     * Attempt to confirm account with code
     *
     * @param    string $code
     * @return \Illuminate\Http\Response
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function confirm($code)
    {
        if (!Confide::confirm($code)) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException('Wrong confirmation code!');
        }

        return Response::make(null, 204);
    }

    /**
     * Attempt to send change password link to the given email
     *
     * @return \Illuminate\Http\Response
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function forgot_password()
    {
        if (!Confide::forgotPassword(Input::get('email'))) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException('User not found!');
        }

        return Response::make(null, 204);
    }

    /**
     * Attempt change password of the user
     *
     * @return \Illuminate\Http\Response
     * @throws Symfony\Component\HttpKernel\Exception\ConflictHttpException
     */
    public function reset_password()
    {
        $input = array(
            'token' => Input::get('token'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
        );

        // By passing an array with the token, password and confirmation
        if (!Confide::resetPassword($input)) {
            throw new Symfony\Component\HttpKernel\Exception\ConflictHttpException('There was an issue with your
            password!');
        }

        return Response::make(null, 204);
    }

    /**
     * Attempt to do login
     *
     */
    public function login()
    {
        $input = array(
            'email' => Input::get('email'), // May be the username too
            'username' => Input::get('email'), // so we have to pass both
            'password' => Input::get('password'),
            'remember' => Input::get('remember'),
        );

        // If you wish to only allow login from confirmed users, call logAttempt
        // with the second parameter as true.
        // logAttempt will check if the 'email' perhaps is the username.
        // Get the value from the config file instead of changing the controller
        if (Confide::logAttempt($input, Config::get('confide::signup_confirm'))) {
            // Redirect the user to the URL they were trying to access before
            // caught by the authentication filter IE Redirect::guest('user/login').
            // Otherwise fallback to '/'
            // Fix pull #145
            return Response::make(null, 204);
        } else {
            $user = new User;

            // Check if there was too many login attempts
            if (Confide::isThrottled($input)) {
                throw new Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException(Lang::get(
                    'confide::confide.alerts.too_many_attempts'
                ));
            } elseif ($user->checkUserExists($input) and !$user->isConfirmed($input)) {
                throw new Symfony\Component\HttpKernel\Exception\ConflictHttpException(Lang::get(
                    'confide::confide.alerts.not_confirmed'
                ));
            } else {
                throw new Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException(Lang::get(
                    'confide::confide.alerts.wrong_credentials'
                ));
            }
        }
    }

    /**
     * Log the user out of the application.
     *
     */
    public function logout()
    {
        Confide::logout();

        return Response::make(null, 204);
    }
}
