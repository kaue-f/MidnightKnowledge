<?php

namespace App\Actions;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class SaveCoverAction
{
    public function execute($content, $image, $category)
    {
        try {
            $path = "covers/$category";

            if (!Storage::exists($path))
                Storage::makeDirectory($path);

            $image = Image::read($image);
            $path = "$path/$content->id.webp";

            Storage::put($path, $image->toWebp(80));

            $content->update(['image' => $path]);
        } catch (\Throwable $th) {
            notyf()->warning("Não foi possível salvar imagem de capa.");
        }
    }
}
