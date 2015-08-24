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

    /**
     * An event category has many events.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }

    /**
     * An event category has many associated event tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany('App\EventTag', 'category_id');
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
