<?php

use LaravelBook\Ardent\Ardent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class EventCategory extends Ardent    
{

    use SoftDeletingTrait;

    public static $relationsData = array(
        'user' => array(self::HAS_ONE, 'User'),
    );

    public static $rules = array(
        'idEventCat' =>  'required|exists:events,id',
        'nameEventCat'  =>  'required',
        'descrEventCat' => 'required',
      
    );

    protected $guarded = array('id');

   
    public function user()
    {
        return $this->belongsTo('User');
    }

    /
    public function getEventCategoryId()
    {
        return $this->idEventCat;
    }

  
    public function setEventCategoryId($event_cat_id)
    {
        $this->attributes['idEventCat'] = $event_cat_id;
    }

    
    public function getEventCategoryName()
    {
        return $this->nameEventCat;
    }

  
    public function setEventCategoryName($name)
    {
        $this->attributes['nameEventCat'] = $name;
    }

   
    public function getEventCategoryDescription()
    {
        return $this->descrEventCat;
    }

   
    public function setPhotographerStatus($describe)
    {
        $this->attributes['descrEventCat'] = $describe;
    }

   
   
    
