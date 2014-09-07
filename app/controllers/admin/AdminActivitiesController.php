<?php

class AdminActivitiesController extends \BaseController {

    /**
     * Display a listing of event tags
     *
     * @return Response
     */
    public function index()
    {
        return Activity::paginate(10);
    }

    /**
     * Store a newly created event tag in storage.
     *
     * @return Response
     */
    public function store()
    {
        $activity = new Activity;

        if (!$activity->save()) {
            $error = $activity->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new event.', $error);
        }

        return Activity::find($activity->id);
    }

    /**
     * Display the specified event tag.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try {
            return Activity::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

    /**
     * Update the specified event tag in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        try {
            $activity = Activity::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $activity->event_id = Input::get('event_id');
        $activity->service_hours = Input::get('service_hours');
        $activity->admin_hours = Input::get('admin_hours');
        $activity->social_hours = Input::get('social_hours');
        $activity->mileage = Input::get('mileage');
        $activity->notes = Input::get('notes');

        $activity->updateUniques();

        return $activity;
    }

    /**
     * Remove the specified event tag from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $activity = Activity::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $activity->delete();

        return Response::make(null, 204);
    }

}
