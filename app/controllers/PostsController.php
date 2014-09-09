<?php

class PostsController extends \BaseController
{

    public function index()
    {
        return Post::paginate(10);
    }

    public function show($id)
    {
        try {
            return Post::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
