<?php

class AdminPostsController extends \PostsController
{

    public function store()
    {
        $post = new Post;

        $post->author_id = API::user()->id;
        $post->category_id = Input::get('category_id');
        $post->title = Input::get('title');
        $post->content = Input::get('content');

        if (!$post->save()) {
            $error = $post->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Failed to create new post.', $error);
        }

        return Post::find($post->id);
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
        $post->category = Input::get('category_id');
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
