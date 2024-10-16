<?php

namespace App\Support;

use App\Models\Game;
use App\Models\Anime;
use Illuminate\Http\Request;

class Spotlight
{
    public function search(Request $request)
    {
        return collect()
            // ->merge($this->animes($request->search))
            ->merge($this->games($request->search));
    }

    public function games(string $search = '')
    {
        return Game::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Game $game) {
                return [
                    'avatar' => $game->image,
                    'name' => "$game->title ($game->plataform)",
                    'description' => $game->synopsis,
                    // 'link' =>"",
                ];
            });
    }
}
