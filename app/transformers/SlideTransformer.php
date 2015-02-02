<?php

class SlideTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(Slide $slide)
    {
        return array(
            'id' => (int)$slide->id,
            'title' => $slide->title,
            'body' => $slide->body,
            'image' => $slide->image->url(),
            'created_at' => $slide->created_at->toISO8601String(),
            'updated_at' => $slide->updated_at->toISO8601String()
        );
    }

}
