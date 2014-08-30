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
		//vvvvvvShould this be added here? or possible somewhere else like Activity?
		//'profile' => array(self::BELONGS_TO,'Profile', 'foreignKey'=>'profile_id')
		);

/**
 *from Asana, At minimum: 
 *User Id
 *Bio
 *College
 */
public static $rules = array(
	//was a bit confused when asan said this would replace user id.
	'user_id'=>'required|exist:user,id',
	'bio'=> 'required',
	'college'=>'required'
	);

protected $guarded = array('id');

//Setters. lmk if you want any deleted/added
//tried to match the names to the setters created in other files
public function setBioAttribute($graphy)
{
	$this->attributes['bio'] = strip_tags($graphy);
}

public function setCollegeAttribute($warren)
{
	$this->attributes['college'] = ucwords(strip_tags($warren));
}







}