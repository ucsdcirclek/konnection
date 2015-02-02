<?php

class SlidesController extends \BaseController
{

    public function index()
    {
        return Slide::all();
    }

    public function show($id)
    {
        try {
            return Slide::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
