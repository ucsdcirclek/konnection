<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KiwanisAttendee extends Model {

    use SoftDeletes;

    protected $guarded = ['id'];

    // Relationships.

    /**
     * Kiwanis Family Club attendance records belong to a CERF.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cerf() {
        return $this->belongsTo('App\Cerf');
    }
}
