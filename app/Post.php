<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * Simplified blog system
 */
class Post extends Model
{

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
