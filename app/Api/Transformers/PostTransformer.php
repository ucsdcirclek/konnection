<?php

namespace App\Api\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    public function transform(Post $post)
    {
        return array(
            'id' => (int) $post->id,
            'author_id' => (int) $post->author_id,
            'category_id' => (int) $post->category_id,
            'title' => $post->title,
            'content' => $post->content,
            'created_at' => $post->created_at->toDateTimeString()
        );
    }
}
