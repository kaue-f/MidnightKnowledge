<?php

namespace App\Models;

use App\Enums\LanguageEnum;
use App\Enums\ProfileVisibilityEnum;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail, CanResetPassword
{
    use HasFactory, HasUlids, Notifiable, SoftDeletes, HasRoles;

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
        'nickname',
        'username',
        'email',
        'password',
        'visibility',
        'is_adult',
        'language',
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
            'password' => 'hashed',
            'visibility' => ProfileVisibilityEnum::class,
            'language' => LanguageEnum::class,
            'is_adult' => 'boolean',
        ];
    }

    /**
     * Summary of library
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<UserLibrary, User>
     */
    public function library()
    {
        return $this->hasMany(UserLibrary::class);
    }

    /**
     * Get the profile associated with the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<UserProfile, User>
     */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * Get the follows where the user is the follower.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Follow, User>
     */
    public function follows()
    {
        return $this->hasMany(Follow::class, 'follower_id');
    }

    /**
     * Get the follows where the user is the followed.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Follow, User>
     */
    public function followed()
    {
        return $this->hasMany(Follow::class, 'followed_id');
    }

    /**
     * Get the user links associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<UserLink, User>
     */
    public function links()
    {
        return $this->hasMany(UserLink::class);
    }

    /**
     * Get the notifications for the user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<UserNotification, User>
     */
    public function notifications()
    {
        return $this->hasMany(UserNotification::class);
    }

    /**
     * Define the relationship with UserNotification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserNotification>
     */
    public function related()
    {
        return $this->morphMany(UserNotification::class, 'related');
    }

    /**
     * Define the relationship with Report.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<Report>
     */
    public function reported()
    {
        return $this->morphMany(Report::class, 'reported');
    }
}
