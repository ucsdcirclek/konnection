<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller {

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $user = \Auth::user();
        return view('pages.settings.account', compact('user'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateUserRequest $req)
	{
        // Only take acceptable input
		$input = $req->only('avatar', 'password', 'email', 'first_name', 'last_name');

        // Update user
        \Auth::user()->update($input);

        return redirect()->action('UsersController@edit')
            ->with('message', 'Your profile has been updated.');
	}

}
