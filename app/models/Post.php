<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Post Model
 *
 */

class Post extends Ardent
{

	public static $relationsData = array(
		'user'=>array(self::BELONGS_TO, 'User'), 
		'category'=>array(self::BELONGS_TO, 'PostCategory')
		);

/**
 *from Asana, At minimum: 
 *Author User ID
 *Post Title 
 *content
 *Post Category
 */
public static $rules = array(
	'user_id'=>'required|exist:users,id',
	'title'=> 'required',
	'content'=>'required',
	'category'=> 'required|exist:categories'
	);

protected $guarded = array('id');


public function setTitleAttribute($p_title)
{
	$this->attributes['title'] = ucwords(strip_tags($p_title));
}

public function setContentAttribute($p_content)
{
	$this->attributes['content'] = $p_content;
}

public function setCategoryAttribute($p_cat)
{
	$this->attributes['category'] = strip_tags($p_cat);
}


}