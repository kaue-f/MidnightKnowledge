<?php

namespace App\Models\Serie;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SerieUser extends Pivot
{
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Status::getDescription($value)
        );
    }

    protected function favorite(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ?? false
        );
    }

    protected function library(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ?? false
        );
    }
}
