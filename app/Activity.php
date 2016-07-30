<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Activity
 *
 * One entry of activity is recorded each time a member executes an action (e.g. attends an event)
 */
class Activity extends Model {

    use SoftDeletes;

    protected $table = 'activity_log';

    protected $guarded = array('id');

    /**
     * Relationships
     */

    /**
     * Event assigned with the activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * Owner of activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cerf()
    {
        return $this->belongsTo('App\Cerf');
    }

    /**
     * Mutators
     */

    /**
     * Sets service hours
     *
     * @param $value
     */
    public function setServiceHoursAttribute($value)
    {
        $this->attributes['service_hours'] = floatval($value);
    }

    /**
     * Set admin hours
     *
     * @param $value
     */
    public function setAdminHoursAttribute($value)
    {
        $this->attributes['admin_hours'] = floatval($value);
    }

    /**
     * Set social hours
     *
     * @param $value
     */
    public function setFellowshipHoursAttribute($value)
    {
        $this->attributes['social_hours'] = floatval($value);
    }

    /**
     * Set mileage
     *
     * @param $value
     */
    public function setMileageAttribute($value)
    {
        $this->attributes['mileage'] = floatval($value);
    }

    /**
     * Set activity notes/comments
     *
     * @param $value
     */
    public function setNotesAttribute($value)
    {
        $this->attributes['notes'] = strip_tags($value);
    }

    public function setApproved()
    {
        $this->attributes['approved'] = true;
    }

}
