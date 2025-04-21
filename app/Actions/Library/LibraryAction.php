<?php

namespace App\Actions\Library;

use App\Models\User;

class LibraryAction
{
    public function execute($content, ?User $user, bool $library, string $status = '')
    {
        try {
            $inLibrary = $content->users()
                ->wherePivot('user_id', $user->id)
                ->first();

            $content->users()->syncWithoutDetaching([
                $user->id => [
                    'library' => $library,
                    'status' => $status
                ]
            ]);

            if ($inLibrary)
                return notyf()->info("<strong>{$content->title}</strong> foi atualizado na sua biblioteca.");

            return ($library)
                ? notyf()->info("<strong>{$content->title}</strong> foi adicionado a sua biblioteca.")
                : notyf()->info("<strong>{$content->title}</strong> foi removido da sua biblioteca.");
        } catch (\Throwable $th) {
            return ($library)
                ? notyf()->error("Não foi possível adicionar <strong>{$content->title}</strong> a sua biblioteca. Tente novamente mais tarde.")
                : notyf()->error("Não foi possível remover <strong>{$content->title}</strong> de sua biblioteca. Tente novamente mais tarde.");
        }
    }
}
