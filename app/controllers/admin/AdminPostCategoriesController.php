<?php

class AdminPostCategoriesController extends \PostCategoriesController
{

    public function store()
    {
        $post_cat = new PostCategory;

        if (!$post_cat->save()) {
            $error = $post_cat->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Failed to create new post.', $error);
        }

        return PostCategory::find($post_cat->id);
    }

    public function update($id)
    {
        try {
            $post_cat = PostCategory::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $post_cat->title = Input::get('title');
        $post_cat->description = Input::get('description');
        $post_cat->updateUniques();

        return $post_cat;
    }


    public function destroy($id)
    {
        try {
            $post_cat = PostCategory::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $post_cat->delete();

        return Response::make(null, 204);
    }

}