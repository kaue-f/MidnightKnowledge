<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable, SoftDeletes;

    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nickname',
        'username',
        'email',
        'image',
        'password',
        'birthday',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'birthday' => 'datetime:Y-d-m',
            'password' => 'hashed',
        ];
    }

    protected function username(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => hasValue($value)
        );
    }

    protected function role(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => Role::tryFrom($value)->name
        );
    }

    protected function birthday(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => isDate($value)
        );
    }
}
