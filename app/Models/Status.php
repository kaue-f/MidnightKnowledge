<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_user');
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class, 'serie_user');
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_user');
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'games_user');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_user');
    }

    public function mangas()
    {
        return $this->belongsToMany(Manga::class, 'manga_user');
    }
}
