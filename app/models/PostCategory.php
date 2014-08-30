<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Post Category Model
 *
 * @property integer $id
 *
 */

class PostCategory extends Ardent
{
	public static $relationsData = array(
		//'user'=>array(self::BELONGS_TO, 'User'),
		'post'=>array(self::HAS_MANY, 'Post')
		);

/**
 *from Asana, At minimum: 
 *Category Title and Description
 */
public static $rules = array(
	'title'=> 'required'
	'description'=> 'required'
	);

protected $guarded = array('id');

public function setCategoryTitleAttribute($c_title)
{
	$this->attributes['title']=ucwords(strip_tags($c_title));
}

public function setCategoryDescriptionAttribute($c_description)
{
	$this->attributes['description']=strip_tags($c_description);
}

}