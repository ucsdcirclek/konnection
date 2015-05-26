<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostCategory
 *
 * Categories to organize posts
 */
class PostCategory extends Model
{

    public $timestamps = false;

    protected $guarded = array('id');

    /**
     * Relationships
     */

    /**
     * Posts in the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }


    /**
     * Accessors & Mutators
     */

    /**
     * Capitalizes the first letter of each word in post title
     *
     * @param $c_title
     */
    public function setTitleAttribute($c_title)
    {
        $this->attributes['title'] = ucwords(strip_tags($c_title));
    }

    /**
     * Strips the HTML tags from the description
     *
     * @param $c_description
     */
    public function setDescriptionAttribute($c_description)
    {
        $this->attributes['description'] = strip_tags($c_description);
    }

}
