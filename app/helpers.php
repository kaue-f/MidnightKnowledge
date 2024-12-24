<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

if (!function_exists('imageNoneUser')) {
    function imageNoneUser(): string
    {
        return asset('images/none-user.jpg');
    }
}

if (!function_exists('isNullOrEmpty')) {
    function isNullOrEmpty($value): bool
    {
        return empty($value) || !isset($value);
    }
}

if (!function_exists('hasValue')) {
    function hasValue($value): string
    {
        return isNullOrEmpty($value)
            ? 'N/A'
            : $value;
    }
}

if (!function_exists('hasDate')) {
    function hasDate($value): string
    {
        return isNullOrEmpty($value)
            ? 'N/A'
            : Carbon::parse($value)->translatedFormat('d F Y');
    }
}

if (!function_exists('saveCover')) {
    function saveCover($category, $content, $image)
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
}

if (!function_exists('attachGenres')) {
    function attachGenres($content, array $genres)
    {
        if (!isNullOrEmpty($genres))
            $content->genres()->attach($genres);
    }
}
