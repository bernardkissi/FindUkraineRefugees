<?php

namespace App\Models;

use App\Models\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Refugee extends Model
{
    use
    UuidGenerator,
    HasFactory;

    protected $fillable = [
        'name',
        'profile',
        'number',
        'country',
        'device'
    ];

    /**
     * Returns offers a refugee is subscribed to
     *
     * @return BelongsToMany
     */
    public function offers(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class);
    }
}
