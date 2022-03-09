<?php

declare(strict_types=1);

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UuidGenerator
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->identifier = (string) Str::uuid4();
        });
    }
}
