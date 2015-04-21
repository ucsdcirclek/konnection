<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GuestRegistration
 *
 * When a guest registers, a GuestRegistration model is created.
 */
class GuestRegistration extends Model {
    public static $relationsData = array(
        'event' => array(self::BELONGS_TO, 'CalendarEvent', 'foreignKey' => 'event_id', 'table' => 'events')
    );

    public static $rules = array(
        'event_id' => 'required|exists:events,id',
        'driver_status' => 'boolean',
        'passengers' => 'numeric' //number of people driver can take
    );

    protected $guarded = array('id');

    /**
     * Relationships
     */
    /**
     * Event registrations belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
