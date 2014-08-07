<?php

/*
 * The Event class contains a record of a single event and its properties
 *
 * [X]Event ID (event_id)
 * [X]Event creator(user_id)
 * [X]Event Description (string)
 * [X]Location of event (string)
 * [X]Meeting Location (string)
 * [X]Time (float,  in minutes 1440 total)
 * [X]Event signup closing time (float, in minutes 1440 total)
 * [X]Attendances (user_id array)
 * [X]Created at, updated time stamp (float, in minutes 1440 total)
 * [X]Soft Deletion (uhh idk)
 */

use LarvelBook\Ardent\Ardent;

class Event extends Ardent{

  public $timestamps = false;

  protected $table = 'event_log';

/**
  * Sets event_id
  * @param $event_id
  */
  public function setEventId($event_id){
    $this->event_id;
  }

/**
  * Returns the user the event was created from
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
  public function setCreator($user_id){
    return $this->belongsTo('User');
  }
  
/**
  * Sets the event chair user
  *
  * @return $user_id
  */
  public function setChairAttribute($user_id){
    return $this->attributes['event_chair'] = $user_id;
  }
/**
  * Sets location of event
  * @param $location_event
  */
  public function setEventLocationAttribute($location_event){
    $this->attributes['location_event'] = strip_tags($location_event);
  }

/**
  * Sets location of meeting up on campus
  * @param $location_meet
  */
  public function setMeetingLocationAttribute($location_meet){
    $this->attributes['location_meet'] = strip_tags($location_meet);
  }

/**
  * Sets description of event
  * @param $description
  */
  public function setDescription($description){
    $this->description;
  }

/**
  * Sets event time
  * @param $event_time
  */
  public function setEventTimeAttribute($event_time){
    $this->attributes['event_time'] = floatval($event_time);
  }

/**
  * Sets event signup closing time
  * @param $closed_time
  */
  public function setCloseTimeAttribute($closed_time){
    $this->attributes['closed_time'] = floatval($closed_time);
  }

/**
  * Sets event created at time
  */
  public function setCreatedAtTime(){
    $this->createdAtTime = time();
  }

/**
  * Sets event updated at time
  */
  public function setUpdatedAtTime(){
    $this->updatedAtTime = time();
  }

/**
  * Returns event_id
  * @return $event_id
  */
  public function getEventId(){
    return $this->event_id;
  }
  
/**
  * Returns event location
  * @return $location_event
  */
  public function getEventLocationAttribute(){
    return $this->location_event;
  }

/**
  * Returns event meetup on campus
  * @return $location_meet
  */
  public function gettMeetingLocationAttribute(){
    return $this->location_meet;
  }

/**
  * Returns event description
  * @return $description
  */
  public function getDescription(){
    return $this->description;
  }

/**
  * Returns time of event
  * @return $event_time
  */
  public function getEventTimeAttribute(){
    return $this->$event_time;
  }

/**
  * Returns event sign up closed
  * @return $closed_time
  */
  public function getCloseTimeAttribute(){
    return $this->closed_time;
  }

/**
  * Returns time event was created
  * @return $createdAtTime
  */
  public function setcreatedAtTime(){
    return $this->createdAtTime;
  }

/**
  * Returns time event was updated
  * @return $updatedAtTime
  */
  public function updatedAtTime(){
    return $this->updatedAtTime;
  }
  /*<!-Needs Soft Deletion>*/

/**
  * Delete Events
  * Set all values to null
  */
  public function delete(){
    $this->delete();
  }
?>
