<?php

class EventCategoriesController extends \BaseController
{
    public function index()
    {
        return EventCategory::paginate(10);
    }

    public function store()
    {
        $event_cat = new EventCategory;

        if (!$event_cat->save()) {
            $error = $event_cat->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Failed to create new event category.', $error);
        }

        return EventCategory::find($event_cat->id);
    }

    public function show($id)
    {
        try {
            return EventCategory::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e)
            { 
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
            }
    }

    public function update($id)
    {
        try {
            $event_cat = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) 
            {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
            }

        $event_cat->name = Input::get('name');
        $event_cat->description = Input::get('description');
        $event_cat->updateUniques();
        return $event_cat;
    }


    public function destroy($id)
    {
        try {
            $event_cat = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e)
            {
                throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
            }

        $event_cat->delete();

        return Response::make(null, 204);
    }

}