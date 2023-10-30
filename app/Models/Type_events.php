<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_events extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name_type_events'
    ];
}
