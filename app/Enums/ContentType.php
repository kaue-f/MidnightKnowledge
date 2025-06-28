<?php

namespace App\Enums;

use App\Filters\BookFilter;
use App\Filters\GameFilter;
use App\Filters\AnimeFilter;
use App\Models\Book\BookRating;
use App\Models\Game\GameRating;
use App\Models\Book\BookComment;
use App\Models\Game\GameComment;
use App\Models\Anime\AnimeRating;
use App\Models\Manga\MangaRating;
use App\Models\Movie\MovieRating;
use App\Models\Serie\SerieRating;
use App\Models\Anime\AnimeComment;
use App\Models\Manga\MangaComment;
use App\Models\Movie\MovieComment;
use App\Models\Serie\SerieComment;
use App\Services\Caches\BookCache;
use App\Services\Caches\GameCache;
use App\Services\Caches\AnimeCache;
use App\Services\Caches\GenreCache;
use App\Models\Cartoon\CartoonRating;
use App\Models\Cartoon\CartoonComment;

enum ContentType: string
{
    case ANIME = 'anime';
    case BOOK = 'book';
    case CARTOON = 'cartoon';
    case GAME = 'game';
    case MANGA = 'manga';
    case MOVIE = 'movie';
    case SERIE = 'serie';
    case MOVIE_SERIE = 'movie_serie';

    public static function array()
    {
        return array_combine(
            array_map(fn($type) => $type->value, self::filtered()),
            array_map(fn($type) => $type->name, self::filtered())
        );
    }

    public static function morphMap(): array
    {
        return array_combine(
            array_map(fn($type) => $type->value, self::filtered()),
            array_map(fn($type) => $type->getModel(), self::filtered())
        );
    }

    public function getModel(): string
    {
        return match ($this) {
            self::ANIME => \App\Models\Anime\Anime::class,
            self::BOOK => \App\Models\Book\Book::class,
            self::GAME => \App\Models\Game\Game::class,
            self::MANGA => \App\Models\Manga\Manga::class,
            self::MOVIE => \App\Models\Movie\Movie::class,
            self::SERIE => \App\Models\Serie\Serie::class,
            self::CARTOON => \App\Models\Cartoon\Cartoon::class,
        };
    }

    public function getModelComment(): AnimeComment|BookComment|GameComment|MangaComment|MovieComment|SerieComment
    {
        return match ($this) {
            self::ANIME => app(AnimeComment::class),
            self::BOOK => app(BookComment::class),
            self::CARTOON => app(CartoonComment::class),
            self::GAME => app(GameComment::class),
            self::MANGA => app(MangaComment::class),
            self::MOVIE => app(MovieComment::class),
            self::SERIE => app(SerieComment::class),
        };
    }

    public function getModelRatings()
    {
        return match ($this) {
            self::ANIME => app(AnimeRating::class),
            self::BOOK => app(BookRating::class),
            self::CARTOON => app(CartoonRating::class),
            self::GAME => app(GameRating::class),
            self::MANGA => app(MangaRating::class),
            self::MOVIE => app(MovieRating::class),
            self::SERIE => app(SerieRating::class),
        };
    }

    public function applyFilters($query, array $filters)
    {
        return match ($this) {
            self::ANIME => app(AnimeFilter::class)->apply($query, $filters),
            self::BOOK => app(BookFilter::class)->apply($query, $filters),
            self::GAME => app(GameFilter::class)->apply($query, $filters),
            default => $query,
        };
    }

    public static function filtered()
    {
        return array_filter(self::cases(), fn($type) => $type !== self::MOVIE_SERIE);
    }

    public function getGenreCache()
    {
        return match ($this) {
            self::ANIME => app(AnimeCache::class)->getGenres(),
            self::BOOK => app(BookCache::class)->getGenres(),
            self::GAME => app(GameCache::class)->getGenres(),
            // self::MANGA => app(MangaCache::class),
            self::MOVIE_SERIE => app(GenreCache::class)->getMovieSerieGenres(),
        };
    }
}
