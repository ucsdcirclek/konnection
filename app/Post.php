<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * Simplified blog system
 */
class Post extends Model
{

    /**
     *from Asana, At minimum:
     *Author User ID
     *Post Title
     *content
     *Post Category
     */
    public static $rules = array(
        'author_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:post_categories,id',
        'title' => 'required',
        'content' => 'required'
    );

    protected $guarded = array('id');

    /**
     * Relationships
     */

    /**
     * Author of the post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

    /**
     * Category of the post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\PostCategory', 'category_id');
    }


    /**
     * Accessors & Mutators
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords(strip_tags($value));
    }

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = $value;
    }

}
