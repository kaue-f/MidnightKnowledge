<?php

namespace App\Actions;

class AttachGenresAction
{
    public function execute($content, array $genres)
    {
        if (isNullOrEmpty($genres))
            return;

        if (!$content->genres()->syncWithoutDetaching($genres))
            notyf()->warning("Não foi possível anexar os gêneros.");
    }
}
