<?php
namespace App\Mongo;

class GuestRegistration extends \Moloquent
{
    protected $collection = 'events.registrations';

    protected $connection = 'mongodb';

    protected $guarded = array();

    public $timestamps = false;
}
