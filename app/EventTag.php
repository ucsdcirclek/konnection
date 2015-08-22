<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventTag
 *
 * Tags assigned to events. Usually based off CNH district tags.
 */
class EventTag extends Model
{

    use SoftDeletes;

    protected $guarded = array('id');


    /**
     * Relationships
     */

    /**
     * Events belonging to tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany('App\Event', 'events_assigned_tags', 'tag_id', 'event_id');
    }


    /**
     * Accessors & Mutators
     */

    /**
     * Returns tag name
     *
     * @param $value
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    /**
     * Sets name of tag
     *
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strip_tags($value));
    }

    /**
     * Returns abbreviation of tag name
     *
     * @param $value
     */
    public function getAbbreviationAttribute($value)
    {
        return strtoupper($value);
    }

    /**
     * Sets name of tag
     *
     * @param $value
     */
    public function setAbbreviationAttribute($value)
    {
        $this->attributes['abbreviation'] = strtoupper($value);
    }

    /**
     * Sets description of tag
     *
     * @param $value
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strip_tags($value);
    }

}
