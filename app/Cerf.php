<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cerf extends Model
{

    use SoftDeletes;

    protected $guarded = ['id'];

    // Explicitly states table name. Otherwise, Laravel pluralizes to "cerves."
    protected $table = 'cerfs';

    // Relationships.

    /**
     * A CERF has many Kiwanis Family Club attendees.}
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kiwanisAttendees()
    {
        return $this->hasMany('App\KiwanisAttendee');
    }

    /**
     * A CERF has one associated event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * User who filled out this CERF.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reporter()
    {
        return $this->belongsTo('App\User');
    }
}

