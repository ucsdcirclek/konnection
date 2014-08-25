<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class EventCategory extends Ardent    
{

    use SoftDeletingTrait;

    public static $relationsData = array(
        'events' => array(self::BELONGS_TO_MANY,'Event')
    );

    public static $rules = array(
       'name' => 'required',
       'description' => 'required'

       //Did you say this wasn't needed or that should only be 'required?'
       //'event_id' => 'required'
      
    );

    protected $guarded = array('id');

    //Let me know what to add, Is the below commented out code below what you want
    //for accessors? or just no accessors in this file? 

/*
    public function getEventID()
    {
        return ucwords(this->'event_id')
    }
*/


}


    
    
   
   
    
