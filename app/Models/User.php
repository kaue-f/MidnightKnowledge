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
        'username',
        'name',
        'email',
        'image',
        'password',
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
            'password' => 'hashed',
        ];
    }


    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function mangas()
    {
        return $this->belongsToMany(Manga::class, 'manga_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class, 'serie_user')
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }
}
