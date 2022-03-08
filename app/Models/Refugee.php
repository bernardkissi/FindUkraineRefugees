<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Refugee extends Model
{
    use HasFactory;

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
