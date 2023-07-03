<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'rute_id',
        'photo_url',
    ];

    // public function rute()
    // {
    //     return $this->belongsTo(Rute::class, 'rute_id');
    // }
}
