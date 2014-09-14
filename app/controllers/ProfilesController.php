<?php

class ProfilesController extends \BaseController
{
	/**
	 * Display a listing of profile tags
	 * 
	 * @return Response
	 */
	public function index()
	{
		return Profile::paginate(10);
	}
	
	/**
	 * Display the specified profile tag
	 *
	 * @param int $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			return Profile::findOrFail($id);
		} catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
		}	
	}
	
	/**
	 * Update the specified profile tag in storage
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function update(){
		try{
		    $profile = Profile::findOrFail(Auth::id());
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

		$profile->bio = Input::get('bio');
		$profile->college = Input::get('college');
		$profile->updateUniques();
		return $profile;
	}
			
}	