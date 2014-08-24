<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * Tags assigned to Events
 *
 * @property integer $id
 * @property string $name
 * @property string $abbreviation
 * @property string $description
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereAbbreviation($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\EventTag whereUpdatedAt($value)
 */
class EventTag extends Ardent
{

    use SoftDeletingTrait;

    public $autoHydrateEntityFromInput = true;

    public static $relationsData = array(
        'events' => array(
            self::BELONGS_TO_MANY,
            'CalendarEvent',
            'table' => 'events_assigned_tags',
            'pivotKeys' => array('event_id', 'tag_id')
        ),
    );

    public static $rules = array(
        'name' => 'required',
        'abbreviation' => 'required|max:3|alpha_num'
    );

    protected $guarded = array('id');

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
