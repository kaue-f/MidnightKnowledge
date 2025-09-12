<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class UserProfile extends Model
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
        'avatar',
        'cover_id',
        'cover_url',
        'bio',
        'birthday',
        'theme',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'birthday' => 'date:Y-m-d',
        ];
    }

    /**
     * Get the birthday attribute as a formatted string.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function birthday(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => isDate($value)
        );
    }

    /**
     * Get the user that owns the profile.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, UserProfile>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
