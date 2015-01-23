<?php

class PostCategoriesController extends \BaseController
{

    public function index()
    {
        return PostCategory::all();
    }

    public function show($id)
    {
        try {
            return PostCategory::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}