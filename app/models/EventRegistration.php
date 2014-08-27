<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

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
