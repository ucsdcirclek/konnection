<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Profile Model
 *
 * @property-write mixed $bio
 * @property-write mixed $college
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Profile whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Profile whereCollege($value)
 * @method static \Illuminate\Database\Query\Builder|\Profile whereBio($value)
 * @method static \Illuminate\Database\Query\Builder|\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Profile whereUpdatedAt($value)
 * @property integer $id
 * @method static \Illuminate\Database\Query\Builder|\Profile whereId($value)
 */
class Profile extends Ardent
{

    public static $relationsData = array(
        'user' => array(self::BELONGS_TO, 'User', 'foreignKey' => 'id')
    );

    protected $guarded = array('id');

    public function setBioAttribute($value)
    {
        $this->attributes['bio'] = strip_tags($value);
    }

    public function setCollegeAttribute($value)
    {
        $this->attributes['college'] = ucwords(strip_tags($value));
    }


}