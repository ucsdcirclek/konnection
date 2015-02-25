<?php
namespace App\Mongo;

class EventRegistration extends \Moloquent
{
    protected $collection = 'events.registrations';

    protected $connection = 'mongodb';

    protected $guarded = array();

    public $timestamps = false;
}
