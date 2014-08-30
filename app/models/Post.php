<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Post Model
 *
 * @property integer $id
 * @property integer $author_id
 */

class Post extends Ardent
{

	protected $table = 'post'

	public static $relationsData = array(
		'user'=>array(self::BELONGS_TO, 'User'), 
		'category'=>array(self::HAS_MANY, 'PostCategory')

		//vvvvvvShould this be added here? or possible somewhere else like Activity?
		//'post' => array(self::BELONGS_TO,'Post', 'foreignKey'=>'post_id')
		);

/**
 *from Asana, At minimum: 
 *Author User ID
 *Post Title 
 *content
 *Post Category
 */
public static $rules = array(
	'user_id'=>'required|exist:user,id',
	'title'=> 'required',
	'content'=>'required',
	'category'=> 'required'
	);

protected $guarded = array('id');

//Setters. lmk if you want any deleted/added
//tried to match the names to the setters created in other files
public function setPostTitleAttribute($p_title)
{
	$this->attributes['title'] = ucwords(strip_tags($p_title));
}

public function setPostCategoryAttribute($p_content)
{
	$this->attributes['content'] = strip_tags($p_content);
}

public function setPostCategoryAttribute($p_cat)
{
	$this->attributes['category'] = strip_tags($p_cat);
}





}