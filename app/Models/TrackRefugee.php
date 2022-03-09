<?php

namespace App\Models;

use App\Models\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;

class TrackRefugee extends Model
{
    use
    UuidGenerator,
    HasStates,
    HasFactory;

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
