<?php
namespace App\Mongo;

class User extends \Moloquent
{
    protected $connection = 'mongodb';

    protected $guarded = array();
    public $timestamps = false;
}
