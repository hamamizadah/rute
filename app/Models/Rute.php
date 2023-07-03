<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
        'level',
        'length',
        'starting_elevation',
        'ending_elevation',
    ];
}
