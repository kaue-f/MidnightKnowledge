<?php

namespace App\Services\Management;

use App\Models\User;
use App\Enums\ContentType;
use App\Models\Serie\Serie;
use App\Actions\SaveCoverAction;
use App\Livewire\Forms\SerieForm;
use App\Actions\AttachGenresAction;

class SerieService
{
    public function create(SerieForm $serieForm, User $user)
    {
        $serie = Serie::create([
            'title' => $serieForm->title,
            'synopsis' => $serieForm->synopsis,
            'classification_id' => $serieForm->classification,
            'episodes' => ($serieForm->episodes ?? 0) > 0 ? $serieForm->episodes : null,
            'season' => ($serieForm->season ?? 0) > 0 ? $serieForm->season : null,
            'season_count' => ($serieForm->season_count ?? 0) > 0 ? $serieForm->season_count : null,
            'release_date' => $serieForm->release_date,
            'user_id' => $user->id,
        ]);

        app(AttachGenresAction::class)->execute($serie, $serieForm->genres);
        app(SaveCoverAction::class)->execute($serie, $serieForm->image,  ContentType::SERIE->value);

        if (!isNullOrEmpty($serie)) {
            $serieForm->resetForm();
            return notyf()->success("O série <strong>{$serie->title}</strong> foi adicionado ao acervo Midnight Knowledge.");
        }

        return notyf()->warning("Não foi possível cadastrar o série desejado. Verifique os dados e tente novamente.");
    }
}
