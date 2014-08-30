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
        $user->save();

        if (!$user->id) {
            $error = $user->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $error);
        }

        return User::find($user->id);
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
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
     * PUT /users
     *
     * @param  int $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function update()
    {
        try {
            $user = User::findOrFail(Auth::id());
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
     * DELETE /users/{id}
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function destroy()
    {
        try {
            $user = User::findOrFail(API::user()->id());
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
     * Handle a POST request to remind a user of their password.
     *
     * @return Response
     */
    public function remind()
    {
        switch ($response = Password::remind(Input::only('email'))) {
            case Password::INVALID_USER:
                throw new Symfony\Component\HttpKernel\Exception\ConflictHttpException('There was an issue with your
            password!');

            case Password::REMINDER_SENT:
                return Response::make(null, 204);
        }
    }

    /**
     * Handle a POST request to reset a user's password.
     *
     * @return Response
     */
    public function reset()
    {
        $credentials = Input::only(
            'email',
            'password',
            'password_confirmation',
            'token'
        );

        $response = Password::reset(
            $credentials,
            function ($user, $password) {
                $user->password = Hash::make($password);

                $user->save();
            }
        );

        switch ($response) {
            case Password::INVALID_PASSWORD:
            case Password::INVALID_TOKEN:
            case Password::INVALID_USER:
                throw new Symfony\Component\HttpKernel\Exception\ConflictHttpException('There was an issue with your
            password!');

            case Password::PASSWORD_RESET:
                return Response::make(null, 204);
        }
    }
}
