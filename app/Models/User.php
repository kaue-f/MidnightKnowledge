<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Book\Book;
use App\Models\Game\Game;
use App\Models\Anime\Anime;
use App\Models\Manga\Manga;
use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
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
