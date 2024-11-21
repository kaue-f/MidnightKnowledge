<?php

namespace App\Support;

use App\Model\Anime\Anime;
use App\Model\Book\Book;
use App\Model\Game\Game;
use App\Model\Manga\Manga;
use App\Model\Movie\Movie;
use App\Model\Serie\Serie;
use Illuminate\Http\Request;

class Spotlight
{
    public function search(Request $request)
    {
        return collect()
            ->merge($this->animes($request->search))
            ->merge($this->books($request->search))
            ->merge($this->games($request->search))
            ->merge($this->mangas($request->search))
            ->merge($this->movies($request->search))
            ->merge($this->series($request->search));
    }

    public function  animes(string $search = '')
    {
        return Anime::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Anime $anime) {
                $rating = $anime->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($anime->image),
                    'name' => "$anime->title ⭐$rating",
                    'description' => $anime->synopsis,
                    'link' => "/anime/$anime->id",
                ];
            });
    }

    public function books(string $search = '')
    {
        return Book::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Book $book) {
                $rating = $book->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($book->image),
                    'name' => "$book->title ⭐$rating",
                    'description' => $book->synopsis,
                    'link' => "/book/$book->id",
                ];
            });
    }

    public function games(string $search = '')
    {
        return Game::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Game $game) {
                $rating = $game->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($game->image),
                    'name' => "$game->title ⭐$rating",
                    'description' => $game->synopsis,
                    'link' => "/game/$game->id",
                ];
            });
    }

    public function mangas(string $search = '')
    {
        return Manga::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Manga $manga) {
                $rating = $manga->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($manga->image),
                    'name' => "$manga->title ⭐$rating",
                    'description' => $manga->synopsis,
                    'link' => "/manga/$manga->id",
                ];
            });
    }

    public function movies(string $search = '')
    {
        return Movie::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Movie $movie) {
                $rating = $movie->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($movie->image),
                    'name' => "$movie->title ⭐$rating",
                    'description' => $movie->synopsis,
                    'link' => "/movie/$movie->id",
                ];
            });
    }

    public function series(string $search = '')
    {
        return Serie::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Serie $serie) {
                $rating = $serie->ratings()->avg('rating') ?? 0;
                return [
                    'avatar' =>  asset($serie->image),
                    'name' => "$serie->title ⭐$rating",
                    'description' => $serie->synopsis,
                    'link' => "/serie/$serie->id",
                ];
            });
    }
}
