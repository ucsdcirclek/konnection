<?php

class PostsController extends \BaseController
{

    public function index()
    {
        return Post::paginate(10);
    }

    public function store()
    {
        $post = new Post;

        if (!$post->save()) {
            $error = $post->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Failed to create new post.', $error);
        }

        return Post::find($post->id);
    }
    public function show($id)
    {
        try {
            return Post::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

    public function update($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->category = Input::get('category');
        $post->updateUniques();
        return $post;
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $post->delete();

        return Response::make(null, 204);
    }

}