<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ContentService
{
    public function saveCover($category, $content, $image)
    {
        try {
            $path = "covers/$category";
            if (Storage::exists($path))
                Storage::makeDirectory($path);

            $path = $image->storeAs($path, "$content->id.{$image->extension()}");
            $content->update(['image' => $path]);
        } catch (\Throwable $th) {
            notyf()->erro("Não foi possível salvar image inserida.");
        }
    }

    public   function attachGenres($content, array $genres)
    {
        if (!isNullOrEmpty($genres))
            $content->genres()->syncWithoutDetaching($genres);
    }
}
