<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cerf extends Model {

    use SoftDeletes;

    // Explicitly states table name. Otherwise, Laravel pluralizes to "cerves."
    protected $table = 'cerfs';
}
