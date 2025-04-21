<?php

namespace App\Enums;

use App\Models\Book\BookComment;
use App\Models\Game\GameComment;
use App\Models\Anime\AnimeComment;
use App\Models\Manga\MangaComment;
use App\Models\Movie\MovieComment;
use App\Models\Serie\SerieComment;

enum ContentType: string
{
    case ANIME = 'anime';
    case BOOK = 'book';
    case GAME = 'game';
    case MANGA = 'manga';
    case MOVIE = 'movie';
    case SERIE = 'serie';
    case MOVIE_SERIE = 'movie_serie';

    public function getModelComment(): AnimeComment|BookComment|GameComment|MangaComment|MovieComment|SerieComment
    {
        return match ($this) {
            self::ANIME => app(AnimeComment::class),
            self::BOOK => app(BookComment::class),
            self::GAME => app(GameComment::class),
            self::MANGA => app(MangaComment::class),
            self::MOVIE => app(MovieComment::class),
            self::SERIE => app(SerieComment::class),
        };
    }
}
