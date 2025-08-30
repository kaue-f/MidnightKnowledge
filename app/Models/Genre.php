<?php

namespace App\Models;

use App\Models\Book\Book;
use App\Models\Game\Game;
use App\Models\Anime\Anime;
use App\Models\Manga\Manga;
use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use App\Enums\ContentTypeEnum;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var 
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'category' => ContentTypeEnum::class,
        ];
    }

    /**
     * Summary of animes
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Anime, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_genre');
    }

    /**
     * Summary of books
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Book, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_genre');
    }

    /**
     * Summary of games
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Game, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_genre');
    }

    /**
     * Summary of mangas
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Manga, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function mangas()
    {
        return $this->belongsToMany(Manga::class, 'manga_genre');
    }

    /**
     * Summary of movies
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Movie, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_genre');
    }

    /**
     * Summary of series
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Serie, Genre, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function series()
    {
        return $this->belongsToMany(Serie::class, 'serie_genre');
    }

    /**
     * Get the label for the genre.
     * 
     * @return array|string|null
     */
    public function label()
    {
        $translation = __("genres.{$this->category}.label.{$this->genre}");

        return $translation !== "genres.{$this->category}.label.{$this->genre}"
            ? $this->genre
            : __("genres.{$this->category}.label.{$this->genre}");
    }

    /**
     * Get the description for the genre.
     * 
     * @return array|string|null
     */
    public function description()
    {
        $translation = __("genres.{$this->category}.description.{$this->genre}");

        return $translation !== "genres.{$this->category}.description.{$this->genre}"
            ? ""
            : __("genres.{$this->category}.description.{$this->genre}");
    }
}
