<?php

class PostTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(Post $post)
    {
        return array(
            'id' => (int)$post->id,
            'author_id' => (int)$post->author_id,
            'title' => $post->title,
            'content' => $post->content,
            'created_at' => $post->created_at->toISO8601String(),
            'updated_at' => $post->updated_at->toISO8601String()
        );
    }

}
