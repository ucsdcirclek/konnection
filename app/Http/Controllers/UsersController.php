<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

use Imagine\Image\Point;
use Imagine\Image\Box;
use Imagine\Gd\Imagine;

use File;
use Intervention\Image\Facades\Image;
use \PHPExif\Reader\Reader;

use Hash;

class UsersController extends Controller {

    /**
     * Returns HTML markup for search results in users search form.
     *
     * @return \Illuminate\View\View
     */
    public function search()
    {
        $input = Input::get('input');

        // Populates search results of users with first and last names similar to user input.
        $user_results = User::where('first_name', 'LIKE', '%' . $input . '%')
                            ->orWhere('last_name', 'LIKE', '%' . $input . '%')
                            ->get();

        return view('search.users', compact('user_results'));
    }

    public function current() {

        // TODO Make users API for AJAX requests instead of using controller methods
        if (\Request::ajax()) {
            $user = \Auth::user();
            return json_encode($user);
        }
    }

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

        // Removes null and empty strings to prevent empty passwords from being hashed and put into the database.
        $filtered_input = array_filter($input);

        if (array_key_exists('password', $filtered_input))
            $filtered_input['password'] = Hash::make($req->password);

        if (array_key_exists('avatar', $filtered_input)) {
            $image = $this->cropAvatar();

            if (!$image)
                redirect()->action('UsersController@edit')
                          ->withErrors(['error', 'Something went wrong! Image was too big or format was not supported. Please try another image.']);
        }

        // Update user
        \Auth::user()->update($filtered_input);
        return redirect()->action('UsersController@edit')->with('message', 'Your profile has been updated.');
	}

    /**
     * Crops avatar image to square and corrects orientation.
     *
     * @return void
     */
    private function cropAvatar() {

        // Gets full path of uploaded avatar, creates Imagine object to manipulate image.
        $avatarPath = \Auth::user()->avatar->url();
        $image = Image::make(public_path() . $avatarPath);

        $image->fit(300);

        $image->save(public_path() . $avatarPath);

        return $image;
    }
}
