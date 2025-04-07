<?php

namespace App\Services;

use App\Models\User;
use App\Models\Game\Game;
use App\Enums\ContentType;
use App\Actions\SaveCoverAction;
use App\Livewire\Forms\GameForm;
use App\Services\Cache\GameCache;
use App\Actions\AttachGenresAction;

class GameManagementService
{
    public function create(GameForm $gameForm, User $user)
    {
        $game = Game::create([
            'title' => $gameForm->title,
            'synopsis' => $gameForm->synopsis,
            'classification_id' => $gameForm->classification,
            'duration' => $gameForm->duration,
            'release_date' => $gameForm->release_date,
            'developed_by' => $gameForm->developed_by,
            'user_id' => $user->id,
        ]);

        if (!isNullOrEmpty($gameForm->platforms))
            $game->platforms()->syncWithoutDetaching($gameForm->platforms);

        app(AttachGenresAction::class)->execute($game, $gameForm->genres);
        app(SaveCoverAction::class)->execute($game, $gameForm->image,  ContentType::GAME->value);

        if (!isNullOrEmpty($game)) {
            app(GameCache::class)->clearDevelopers();
            $gameForm->resetForm();
            return notyf()->success("Game $game->title foi adicionado ao acervo Midnight Knowledge.");
        }

        return notyf()->warning("Não foi possível cadastrar o game desejado. Verifique os dados e tente novamente.");
    }
}
