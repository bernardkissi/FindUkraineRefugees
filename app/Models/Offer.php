<?php

namespace App\Models;

use App\Models\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\ModelStates\HasStates;

class Offer extends Model
{
    use
    HasStates,
    UuidGenerator,
    HasFactory;


    protected $fillable = [
        'title',
        'name',
        'number',
        'email',
        'country',
        'description'
    ];

    /**
     * Undocumented function
     *
     * @return BelongsToMany
     */
    public function refugees(): BelongsToMany
    {
        return $this->belongsToMany(Refugee::class);
    }
}
