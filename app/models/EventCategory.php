<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * EventCategory
 *
 * @property-write mixed $name
 * @property-write mixed $description
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
