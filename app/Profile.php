<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 *
 * User profiles
 */
class Profile extends Model
{

    protected $guarded = array('id');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * Relationships
     */

    /**
     * Owner of profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    /**
     * Accessors & Mutators
     */

    /**
     * Strips HTML tags from bio
     *
     * @param $value
     */
    public function setBioAttribute($value)
    {
        $this->attributes['bio'] = strip_tags($value);
    }

    /**
     * Strips HTML tags from college and capitalizes the first letter of each word
     *
     * @param $value
     */
    public function setCollegeAttribute($value)
    {
        $this->attributes['college'] = ucwords(strip_tags($value));
    }


}