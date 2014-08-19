<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;




 //Event Repository 
class EventRegistration extends Ardent    
{

    use SoftDeletingTrait;

    public static $relationsData = array(
        'user' => array(self::HAS_ONE, 'User'),
    );



    /**
    *So I was unsure what to set the properties for some of the ones that could be asked as boolean
    *statements, so I kinda just kept them numeric and figured we could do 0 and 1 for the values when the logic portion comes. 
    *Also I tested the boolval() for when passing in elements for the setters and i would get errors.
    */
    public static $parameters = array(
        'idEvent' =>  'required|exists:events,id',
        'idReg'  =>  'required|exists:registrations,id',
        'idUser' => 'required|exists:users,id',
        'guest_status' => 'numeric',
        'driver_status' => 'numeric',
        'passenger_number' => 'numeric', //number of people driver can take
        'photographer_status' => 'numeric',
        'chair_status' => 'numeric',
    );

    protected $guarded = array('id');

   
    public function user()
    {
        return $this->belongsTo('User');
    }

    
    public function getGuestStatus()
    {
        return $this->guest_status;
    }

  
    public function setGuestStatus($gue_st)
    {
        $this->attributes['guest_status'] = floatval($gue_st);
    }

    
    public function getDriverStatus()
    {
        return $this->driver_status;
    }

  
    public function setDriverStatus($dri_ver)
    {
        $this->attributes['driver_status'] = floatval($dri_ver);
    }

    public function getPassengerNumber()
    {
        return $this->passenger_number;
    }

    public function setPassengerNumber($pass_enger)
    {
        $this->attributes['passenger_number'] = floatval($pass_enger);
    }


   
    public function getPhotographerStatus()
    {
        return $this->photographer_status;
    }

   
    public function setPhotographerStatus($pho_to)
    {
        $this->attributes['photographer_status'] = floatval($pho_to);
    }

   
    public function getChairStatus()
    {
        return $this->chair_status;
    }

   
    public function setChairStatus($chair)
    {
        $this->attributes['chair_status'] = floatval($chair);
    }

   //Time Stamp
    /*
    public function getTimeStamp()
    {
        return $this->date('Y-m-d');
    }*/

   
  

  

}