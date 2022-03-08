<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offer extends Model
{
    use HasFactory;


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
