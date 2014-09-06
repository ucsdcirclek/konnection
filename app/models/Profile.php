<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Profile Model
 *
 */

class Profile extends Ardent
{

	public static $relationsData = array(
		'user'=>array(self::BELONGS_TO, 'User'), 
		);

/**
 *from Asana, At minimum: 
 *User Id
 *Bio
 *College
 */
public static $rules = array(
	'bio'=> 'required',
	'college'=>'required'
	);

protected $guarded = array('id');

public function setBioAttribute($graphy)
{
	$this->attributes['bio'] = strip_tags($graphy);
}

public function setCollegeAttribute($warren)
{
	$this->attributes['college'] = ucwords(strip_tags($warren));
}







}