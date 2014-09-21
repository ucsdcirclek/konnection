<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * The CalendarEvent class contains a record of a single event and its properties
 *
 * @property integer $id
 * @property integer $creator_id
 * @property string $description
 * @property string $event_location
 * @property string $meeting_location
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property \Carbon\Carbon $close_time
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereCreatorId($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereEventLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereMeetingLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereStartTime($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereCloseTime($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CalendarEvent whereUpdatedAt($value)
 */
class CalendarEvent extends Ardent
{

    use SoftDeletingTrait;

    protected $table = 'events';

    protected $dates = array(
        'start_time',
        'end_time',
        'close_time'
    );

    public $autoHydrateEntityFromInput = true;

    public static $relationsData = array(
        'category' => array(self::BELONGS_TO, 'EventCategory'),
        'registrations' => array(self::HAS_MANY, 'EventRegistration', 'foreignKey' => 'event_id'),
        'activities' => array(self::HAS_MANY, 'Activity'),
        'tags' => array(
            self::BELONGS_TO_MANY,
            'EventTag',
            'table' => 'events_assigned_tags',
            'pivotKeys' => array('tag_id', 'event_id')
        ),
        'creator' => array(
            self::BELONGS_TO,
            'User',
            'foreign_key' => 'creator_id'
        ),
    );

    public static $rules = array(
        'creator_id' => 'required|exists:users,id'
    );

    protected $guarded = array('id');

    /**
     * Sets title of event
     * @param $title
     */
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = strip_tags($title);
    }

    /**
     * Sets description of event
     * @param $description
     */
    public function setDescriptionAttribute($description)
    {
        $this->attributes['description'] = strip_tags($description);
    }

    /**
     * Sets location of event
     * @param $location_event
     */
    public function setEventLocationAttribute($event_location)
    {
        $this->attributes['event_location'] = strip_tags($event_location);
    }

    /**
     * Sets meeting location
     * @param $location_meet
     */
    public function setMeetingLocationAttribute($meeting_location)
    {
        $this->attributes['meeting_location'] = strip_tags($meeting_location);
    }

    public function getTransformer()
    {
        return new EventTransformer;
    }
}
