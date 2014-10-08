<?php

use LaravelBook\Ardent\Ardent;

/**
 * GuestRegistration
 *
 * @property integer $id
 * @property integer $event_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property boolean $driver_status
 * @property integer $passengers
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereEventId($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereFirstName($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereLastName($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration wherePhone($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereDriverStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration wherePassengers($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\GuestRegistration whereUpdatedAt($value) 
 */
class GuestRegistration extends Ardent {
    public static $relationsData = array(
        'event' => array(self::BELONGS_TO, 'CalendarEvent', 'foreignKey' => 'event_id', 'table' => 'events')
    );

    public static $rules = array(
        'event_id' => 'required|exists:events,id',
        'driver_status' => 'boolean',
        'passengers' => 'numeric' //number of people driver can take
    );

    protected $guarded = array('id');
}
