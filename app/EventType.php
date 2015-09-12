<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $guarded = ['id'];

    protected $table = 'calendar_event_types';
}
