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
use \PHPExif\Reader\Reader;

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

        // Update user
        \Auth::user()->update($input);

        $cropSucceeded = true;

        if (!is_null($input['avatar'])) $cropSucceeded = $this->cropAvatar();

        if ($cropSucceeded) {
            return redirect()->action('UsersController@edit')
                ->with('message', 'Your profile has been updated.');
        } else {
            return redirect()->action('UsersController@edit')
                ->withErrors(['error', 'Image type not supported! Please try a different image.']);
        }
	}

    /**
     * Crops avatar image to square and corrects orientation.
     *
     * @return void
     */
    private function cropAvatar() {

        // Image manipulation class part of codesleeve/laravel-stapler.
        $imagine = new Imagine();

        // Gets full path of uploaded avatar, creates Imagine object to manipulate image.
        $avatarPath = \Auth::user()->avatar->url();
        $image =  $imagine->open(public_path() . $avatarPath);

        // Reads EXIF data with a wrapper around native exif_read_data() PHP function.
        $reader = Reader::factory(Reader::TYPE_NATIVE);
        $exifData = $reader->getExifFromFile(public_path() . $avatarPath)->getRawData();

        $width = NULL;
        $height = NULL;

        if (array_key_exists('ExifImageWidth', $exifData) && array_key_exists('ExifImageLength')) {
            $width = $exifData['ExifImageWidth'];
            $height = $exifData['ExifImageLength'];
        }

        // Sometimes the image will not have all EXIF data. Instead, it might
        // have an automatically computed width and height.
        else if (array_key_exists('COMPUTED', $exifData)) {
            $width = $exifData['COMPUTED']['Width'];
            $height = $exifData['COMPUTED']['Height'];
        }

        // If the image has no height or width values, then redirect back to
        // settings page with an error message.
        else {
            return false;
        }

        // Crops off top and  bottom for tall images.
        if ($height > $width) {
            $start = ($height - $width) / 2;
            $image->crop(new Point(0, $start), new Box($width, $width));
        }

        // Crops off sides for wide images.
        else {
            $start = ($width - $height) / 2;
            $image->crop(new Point($start, 0), new Box($height, $height));
        }

        // In case image does not have all EXIF data, including orientation.
        // Setting EXIF orientation to 1 stores the image as it is originally
        // oriented.
        if (!array_key_exists('Orientation', $exifData)) $exifData['Orientation'] = 1;

        // Adjusts orientation depending on EXIF orientation data.
        switch($exifData['Orientation']) {

            // Rotates image if it is upside down.
            case 3:
                $image->rotate(180);
                break;

            // Rotates image 90 degrees to the right.
            case 6:
                $image->rotate(90);
                break;

            // Rotates image 90 degrees to the left.
            case 8:
                $image->rotate(-90);
                break;
        }

        // Replaces original avatar and ensures previous image is deleted.
        File::delete(public_path() . $avatarPath);
        $image->save(public_path() . $avatarPath);

        return true;
    }
}
