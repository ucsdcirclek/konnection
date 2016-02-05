<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Api\Transformers\PostTransformer;

/**
 * Posts resource representation. Posts typically represent announcements, but
 * can also be used for bulletin posts.
 *
 * @Resource("Posts", uri="/posts")
 */
class PostsController extends APIController
{

    /**
     * Retrieves a list of posts, limiting response to at most ten posts.
     *
     * @Get("/posts")
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->latest()->take(10)->get();
        return $this->response->collection($posts, new PostTransformer);
    }
}
