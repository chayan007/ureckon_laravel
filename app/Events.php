<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Events extends Model
{
    use Notifiable;

    protected $fillable = ['id', 'event'];
}
