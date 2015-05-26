<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventCategory
 *
 * Categories to organize events
 */
class EventCategory extends Model
{

    use SoftDeletes;

    protected $guarded = array('id');

    /**
     * Relationships
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }

    /**
     * Mutators
     */

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
