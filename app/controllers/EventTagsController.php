<?php

class EventTagsController extends \BaseController {

    /**
     * Display a listing of event tags
     *
     * @return Response
     */
    public function index()
    {
        return EventTag::paginate(10);
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
            return EventTag::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
