<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UserLibrary extends Model
{
    use HasUuids, SoftDeletes;

    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'content_id',
        'content_type',
        'library',
        'favorite',
        'status',
    ];


    protected function casts(): array
    {
        return [
            'library' => 'boolean',
            'favorite' => 'boolean',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function content()
    {
        return $this->morphTo();
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Status::tryFrom($value)->getDescription()
        );
    }

    public function removeContent()
    {
        $this->library = false;

        if ($this->save())
            return $this->delete();
    }

    public function restoreContent()
    {
        if ($this->trashed()) {
            $this->restore();
            $this->library = true;
            $this->save();
        }
    }
}
