<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class ContentLibraryService
{
    public function library($content, bool $library, string $status = "")
    {
        try {
            $content->users()->syncWithoutDetaching([
                Auth::id() => [
                    'library' => $library,
                    'status' => $status,
                ],
            ]);

            return ($library)
                ? notyf()->info("{$content->title} foi adicionado a sua biblioteca.")
                : notyf()->info("{$content->title} foi removido da sua biblioteca.");
        } catch (\Throwable $th) {
            ($library)
                ? notyf()->warning("Não foi possível adicionar {$content->title} a sua biblioteca. Tente novamente mais tarde.")
                : notyf()->warning("Não foi possível remover {$content->title} de sua biblioteca. Tente novamente mais tarde.");
        }
    }

    public function favorite($content, bool $favorite)
    {
        try {
            $content->users()->syncWithoutDetaching([
                Auth::id() => [
                    'favorite' => $favorite,
                ],
            ]);

            return ($favorite)
                ? notyf()->info("{$content->title} foi adicionado aos favoritos.")
                : notyf()->info("{$content->title} foi removido dos favoritos.");
        } catch (\Throwable $th) {
            ($favorite)
                ? notyf()->warning("Não foi possível adicionar {$content->title} aos favoritos. Tente novamente mais tarde.")
                : notyf()->warning("Não foi possível remover {$content->title} dos favoritos. Tente novamente mais tarde.");
        }
    }

    public function rate($content, int $value)
    {
        try {
            $content->ratings()
                ->where([
                    ['game_id', $content->id],
                    ['user_id', Auth::id()],
                ])
                ->upsert([
                    'game_id' => $content->id,
                    'user_id' => Auth::id(),
                    'rating' => $value,
                ], uniqueBy: ['game_id', 'user_id'], update: ['rating']);

            return;
        } catch (\Throwable $th) {
        }
    }
}
