<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/**
 * EventRegistration
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $event_id
 * @property boolean $chair_status
 * @property boolean $guest_status
 * @property boolean $photographer_status
 * @property boolean $driver_status
 * @property integer $passengers
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereUserId($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereEventId($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereChairStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereGuestStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration wherePhotographerStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereDriverStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration wherePassengers($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereDeletedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\EventRegistration whereUpdatedAt($value) 
 */
class EventRegistration extends Ardent
{

    use SoftDeletingTrait;

    public static $relationsData = array(
        'user' => array(self::BELONGS_TO, 'User'),
        'event' => array(self::BELONGS_TO, 'Event')
    );

    public static $rules = array(
        'user_id' => 'required|exists:users,id',
        'event_id' => 'required|exists:events,id',
        'chair_status' => 'boolean',
        'guest_status' => 'boolean',
        'photographer_status' => 'boolean',
        'driver_status' => 'boolean',
        'passengers' => 'numeric' //number of people driver can take
    );

    protected $guarded = array('id');
}
