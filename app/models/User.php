<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

/**
 * User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Config::get('entrust::role[] $roles
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $confirmation_code
 * @property boolean $confirmed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereUsername($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value) 
 * @method static \Illuminate\Database\Query\Builder|\User wherePassword($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereConfirmationCode($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereConfirmed($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\User whereUpdatedAt($value) 
 */
class User extends ConfideUser {
    use HasRole;

}
