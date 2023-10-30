<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fights_events extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'result',
        'fighter_blue_id',
        'fighter_red_id',
        'divisions_id',
        'events_id'
    ];
}
