<?php
namespace App\Mongo;

class CalendarEvent extends \Moloquent
{
    protected $collection = 'events';

    protected $connection = 'mongodb';

    protected $guarded = array();

    public $timestamps = false;
}
