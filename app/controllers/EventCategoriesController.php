<?php

class EventCategoriesController extends \BaseController
{
    public function index()
    {
        return EventCategory::paginate(10);
    }

    public function show($id)
    {
        try {
            return EventCategory::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
