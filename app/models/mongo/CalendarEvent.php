<?php
namespace App\Mongo;

class CalendarEvent extends \Moloquent
{
    protected $collection = 'events';

    protected $connection = 'mongodb';
}
