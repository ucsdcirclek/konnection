<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Post Category Model
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\PostCategory whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\PostCategory whereTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\PostCategory whereDescription($value) 
 */
class PostCategory extends Ardent
{

    public static $relationsData = array(
        'posts' => array(self::HAS_MANY, 'Post')
    );

    public static $rules = array(
        'title' => 'required',
		'description'=> 'required'
    );

    protected $guarded = array('id');

    public function setTitleAttribute($c_title)
    {
        $this->attributes['title'] = ucwords(strip_tags($c_title));
    }

    public function setDescriptionAttribute($c_description)
    {
        $this->attributes['description'] = strip_tags($c_description);
    }

}
