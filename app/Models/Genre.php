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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Scope;

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
            'is_adult' => 'boolean'
        ];
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['genre', 'description'];

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
    public function genre(): Attribute
    {
        return Attribute::make(
            get: fn(): array|string|null => $this->getTranslation('label')
        );
    }

    /**
     * Get the description for the genre.
     * 
     * @return array|string|null
     */
    protected  function description(): Attribute
    {
        return Attribute::make(
            get: fn(): array|string|null => $this->getTranslation('description')
        );
    }

    /**
     * Get the translation the genre
     * 
     * @param mixed $field
     */
    private function getTranslation($field)
    {
        $key = "database/genres/{$this->category->value}.{$field}.{$this->name}";
        $translation = __($key);

        if ($translation !== $key)
            return  $translation;

        return ($field == 'label') ? $this->name : "";
    }

    /**
     * Scope a query to not include adult genres.
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return void
     */
    #[Scope]
    protected function notAdult(Builder $query): void
    {
        $query->where('is_adult', false);
    }
}
