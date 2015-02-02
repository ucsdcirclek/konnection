<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Post Model
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $category_id
 * @property string $title
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereUpdatedAt($value)
 * @property integer $author_id
 * @method static \Illuminate\Database\Query\Builder|\Post whereAuthorId($value)
 */
class Post extends Ardent
{

    public static $relationsData = array(
        'author' => array(self::BELONGS_TO, 'User', 'foreign_key' => 'author_id'),
        'category' => array(self::BELONGS_TO, 'PostCategory', 'foreign_key' => 'category_id')
    );

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


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords(strip_tags($value));
    }

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = $value;
    }

}
