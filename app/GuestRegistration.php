<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GuestRegistration
 *
 * When a guest registers, a GuestRegistration model is created.
 */
class GuestRegistration extends Model {

    protected $guarded = array('id');

    /**
     * Relationships
     */
    /**
     * Event registrations belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
