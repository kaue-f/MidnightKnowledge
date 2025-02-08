<?php

namespace App\Enums;

enum ContentType: string
{
    case ANIME = 'anime';
    case BOOK = 'book';
    case GAME = 'game';
    case MANGA = 'manga';
    case MOVIE = 'movie';
    case SERIES = 'series';
    case MOVIE_SERIES = 'movie_series';
}
