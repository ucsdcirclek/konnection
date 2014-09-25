<?php

class PostCategoryTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(PostCategory $post_category)
    {
        return array(
            'id' => (int)$post_category->id,
            'title' => $post_category->title,
            'description' => $post_category->description
        );
    }

}
