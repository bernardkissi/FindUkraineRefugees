<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackRefugee extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'number',
        'refugee_name',
        'refugee_number',
        'notified',
        'notifiedAt',
    ];

    protected $table = 'track_refugees';
}
