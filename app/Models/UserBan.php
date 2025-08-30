<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class UserBan extends Model
{
    use HasUlids;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'email',
        'reason',
        'details',
        'ban_expires_at',
        'active',
        'revoked_at',
        'banned_by_id',
        'revoked_by_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ban_expires_at' => 'datetime',
            'active' => 'boolean',
            'revoked_at' => 'datetime',
        ];
    }
}
