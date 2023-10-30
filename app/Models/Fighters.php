<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighters extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'nickname',
        'height',
        'reach',
        'age',
        'country',
        'region',
        'divisions_id',
        'teams_id'
    ];
}
