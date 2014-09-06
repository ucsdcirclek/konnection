<?php

class ProfileController extends \BaseController
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
	 * Store a newly created profile in storage
	 *
	 * @return Response
	 */
	public function store()
    {
        $profile = new Profile;

        if (!$profile->save()) {
            $error = $profile->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new profile.', $error);
        }

        return Profile::find($profile->id);
    }
	
	/**
	 * Update the specified profile tag in storage
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function update($id){
		try{
		    $profile = Profile::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

		$profile->bio = Input::get('bio');
		$profile->college = Input::get('college');
		$profile->updateUniques();
		return $profile;
	}
	
	/**
	 *  Remove the specified profile tag from storage
	 *
	 * @param int $id
	 * @return Response
	 */
	public function destroy($id){
		try{	
			$profile = Profile::findOrFail($id);
		} catch (Illuminate\Database\Eloquent\ModelNotFoundException $e){
			throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
		}
		
		$profile->delete();
		return Response::make(null,204);
	}
			
}	