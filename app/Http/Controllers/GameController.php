<?php

namespace App\Http\Controllers;

use App\Livewire\Forms\GameDTO;
use App\Models\Game\Game;
use App\Services\ContentService;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public ContentService $contentService;

    public function __construct()
    {
        $this->contentService = app(ContentService::class);
    }

    public function create(GameDTO $gameDTO)
    {
        $game = Game::create([
            'title' => $gameDTO->title,
            'synopsis' => $gameDTO->synopsis,
            'classification_id' => $gameDTO->classification,
            'duration' => $gameDTO->duration,
            'release_date' => $gameDTO->release_date,
            'developed_by' => $gameDTO->developed_by,
            'user_id' => Auth::id(),
        ]);

        $this->contentService->saveCover('games', $game, $gameDTO->image);
        $this->contentService->attachGenres($game, $gameDTO->genres);
        $this->attachPlatformsToGame($game, $gameDTO->platforms);

        if (!isNullOrEmpty($game)) {
            $gameDTO->resetForm();
            return notyf()->success("Game $game->title foi adicionado ao acervo Midnight Knowledge.");
        }
        return notyf()->error("Não foi possível cadastrar o game inserido. Verifique os dados e tente novamente.");
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
