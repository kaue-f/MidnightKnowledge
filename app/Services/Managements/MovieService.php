<?php

namespace App\Services\Managements;

use App\Models\User;
use App\Enums\ContentType;
use App\Models\Movie\Movie;
use App\Actions\SaveCoverAction;
use App\Livewire\Forms\MovieForm;
use App\Actions\AttachGenresAction;

class MovieService
{
    public function create(MovieForm $movieForm, User $user)
    {
        $movie = Movie::create([
            'title' => $movieForm->title,
            'synopsis' => $movieForm->synopsis,
            'classification_id' => $movieForm->classification,
            'duration' => $movieForm->duration,
            'release_date' => $movieForm->release_date,
            'user_id' => $user->id,
        ]);

        app(AttachGenresAction::class)->execute($movie, $movieForm->genres);
        app(SaveCoverAction::class)->execute($movie, $movieForm->image,  ContentType::MOVIE->value);

        if (!isNullOrEmpty($movie)) {
            $movieForm->resetForm();
            return notyf()->success("Filme $movie->title foi adicionado ao acervo Midnight Knowledge.");
        }

        return notyf()->warning("Não foi possível cadastrar o filme desejado. Verifique os dados e tente novamente.");
    }
}
