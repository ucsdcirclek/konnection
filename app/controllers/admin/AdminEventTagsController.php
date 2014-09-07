<?php

class AdminEventTagsController extends \EventTagsController {

    /**
     * Store a newly created event tag in storage.
     *
     * @return Response
     */
    public function store()
    {
        $event_tag = new EventTag;

        if (!$event_tag->save()) {
            $error = $event_tag->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new event.', $error);
        }

        return EventTag::find($event_tag->id);
    }

    /**
     * Update the specified event tag in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        try {
            $event_tag = EventTag::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $event_tag->name = Input::get('name');
        $event_tag->abbreviation = Input::get('abbreviation');
        $event_tag->description = Input::get('description');
        $event_tag->updateUniques();

        return $event_tag;
    }

    /**
     * Remove the specified event tag from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $event_tag = EventTag::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $event_tag->delete();

        return Response::make(null, 204);
    }

}
