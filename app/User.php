<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, StaplerableInterface {

	use Authenticatable, CanResetPassword, EloquentTrait, EntrustUserTrait;

    public static function boot()
    {
        parent::boot();

        // Hack for Entrust because it doesn't have a boot method
        static::deleting(function($user) {
            if (!method_exists(Config::get('auth.model'), 'bootSoftDeletingTrait')) {
                $user->roles()->sync([]);
            }

            return true;
        });

        static::bootStapler();
    }

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('avatar', [
            'styles' => [
                'medium' => '200x200',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id', 'confirmation_code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token', 'confirmation_code'];

    protected $with = array('roles');

    /**
     * Relationships
     */

    /**
     * User's activity log
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

    /**
     * Events the user has created
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events_created()
    {
        return $this->hasMany('App\Event');
    }

    /**
     * Events user has registered for
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function event_registrations()
    {
        return $this->hasMany('App\EventRegistrations');
    }

    /**
     * User's profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * Posts the user has created
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
