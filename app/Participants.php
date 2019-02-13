<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Participants extends Model
{
    use Notifiable;
    protected $fillable = [
        'team', 'event', 'user', 'username1', 'username2', 'username3', 'username4', 'username5'
    ];
}
