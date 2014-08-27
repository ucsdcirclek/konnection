<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * EventCategory
 *
 * @property-write mixed $name
 * @property-write mixed $description
 * @property integer $id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereName($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereDescription($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereDeletedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventCategory whereUpdatedAt($value) 
 */
class EventCategory extends Ardent
{

    use SoftDeletingTrait;

    public static $relationsData = array(
        'events' => array(self::HAS_MANY, 'Event')
    );

    public static $rules = array(
        'name' => 'required',
        'description' => 'required'
    );

    protected $guarded = array('id');

    /**
     * Set name and remove HTML
     *
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strip_tags($value));
    }

    /**
     * Set description and remove HTML
     *
     * @param $value
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strip_tags($value);
    }
}
