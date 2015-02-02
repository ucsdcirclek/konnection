<?php

class AdminSlidesController extends \SlidesController
{

    public function store()
    {
        $slide = new Slide;

        $slide->title = Input::get('title');
        $slide->body = Input::get('body');
        $slide->link = Input::get('link');
        $slide->priority = Input::get('priority');

        if (!$slide->save()) {
            $error = $slide->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Failed to create new slide.', $error);
        }

        return Slide::find($slide->id);
    }

    public function update($id)
    {
        try {
            $slide = Slide::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $slide->title = Input::get('title');
        $slide->body = Input::get('body');
        $slide->link = Input::get('link');
        $slide->priority = Input::get('priority');
        $slide->updateUniques();

        return $slide;
    }

    public function destroy($id)
    {
        try {
            $slide = Slide::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $slide->delete();

        return Response::make(null, 204);
    }

}
