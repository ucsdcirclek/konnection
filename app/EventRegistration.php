<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventRegistration
 *
 * Users can register for an event. Each registration is created as an entry.
 */
class EventRegistration extends Model
{

    use SoftDeletes;

    protected $guarded = array('id');

    /**
     * Relationships
     */

    /**
     * User that registered
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Event the registration belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
