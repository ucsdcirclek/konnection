<?php

class AdminUsersController extends \BaseController
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
     * PUT /users/{id}
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
     * DELETE /users/{id}
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
}
