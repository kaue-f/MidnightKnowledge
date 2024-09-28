<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory, HasUuids, Notifiable, SoftDeletes;

    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
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
        ];
    }

    public function animes()
    {
        return $this->belongsToMany(Anime::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function games()
    {
        return $this->belongsToMany(Game::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function mangas()
    {
        return $this->belongsToMany(Manga::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }
}
