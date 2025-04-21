<?php

namespace App\Actions\Library;

use App\Models\User;

class FavoriteAction
{
    public function execute($content, ?User $user, bool $favorite)
    {
        try {
            $content->users()->syncWithoutDetaching([
                $user->id => [
                    'favorite' => $favorite,
                ]
            ]);

            return ($favorite)
                ? notyf()->info("<strong>{$content->title}</strong> foi adicionado aos favoritos.")
                : notyf()->info("<strong>{$content->title}</strong> foi removido dos favoritos.");
        } catch (\Throwable $th) {
            return ($favorite)
                ? notyf()->error("Não foi possível adicionar <strong>{$content->title}</strong> a sua biblioteca. Tente novamente mais tarde.")
                : notyf()->error("Não foi possível remover <strong>{$content->title}</strong> de sua biblioteca. Tente novamente mais tarde.");
        }
    }
}
