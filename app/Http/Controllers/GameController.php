<?php

namespace App\Http\Controllers;

use App\Models\Game\Game;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function create(array $gameDTO)
    {
        $game = Game::create([
            'title' => $gameDTO['title'],
            'synopsis' => $gameDTO['synopsis'],
            'classification_id' => $gameDTO['classification'],
            'duration' => $gameDTO['duration'],
            'release_date' => $gameDTO['release_date'],
            'developed_by' => $gameDTO['developed_by'],
            'user_id' => Auth::id(),
        ]);

        saveCover('games', $game, $gameDTO['image']);
        attachGenres($game, $gameDTO['genres']);
        $this->attachPlatformsToGame($game, $gameDTO['platforms']);

        if (!isNullOrEmpty($game)) {
            return notyf()->success("Game $game->title foi adicionado ao acervo Midnight Knowledge.");
        }
        return notyf()->erro("Não foi possível cadastrar o game inserido. Verifique os dados e tente novamente.");
    }

    public function attachPlatformsToGame(Game $game, array $platforms)
    {
        if (!isNullOrEmpty($platforms)) {
            foreach ($platforms as $plataform) {
                $game->platforms()->create([
                    'plataform' => $plataform
                ]);
            }
        }
    }
}