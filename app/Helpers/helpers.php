<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Services\User\NotificationService;

if (!function_exists('noneImage')) {
    function noneImage(): string
    {
        return asset('images/midnight/midnight-picture-guest.png');
    }
}

if (!function_exists('isNullOrEmpty')) {
    function isNullOrEmpty($value): bool
    {
        return empty($value) || !isset($value);
    }
}

if (!function_exists('isDate')) {
    function isDate($value): string
    {
        return isNullOrEmpty($value)
            ? 'N/A'
            : Str::headline(Carbon::parse($value)->translatedFormat('d F Y'));
    }
}

if (!function_exists('orderSortBy')) {
    function orderSortBy($sortBy, $assortment): array
    {
        [$column, $direction] = explode('|', $assortment);

        return ($column == $sortBy['column'])
            ? ['column' => $column, 'direction' => ($sortBy['direction'] == 'desc') ? 'asc' : 'desc']
            : ['column' => $column, 'direction' => $direction];
    }
}

if (!function_exists('isMarkdown')) {
    function isMarkdown($value): string
    {
        return (! isNullOrEmpty($value))
            ? nl2br(rtrim(Str::markdown($value), "\n"))
            : 'N/A';
    }
}

if (!function_exists('isLogged')) {
    function isLogged($component): bool
    {
        if (Auth::check())
            return true;

        $component->js('document.getElementById("noLogged").showModal()');
        return false;
    }
}

if (!function_exists('whichLibrary')) {
    function whichLibrary($url, $arr): array
    {
        return $url === '/library'
            ? array_merge($arr, ['label' => 'Biblioteca', 'link' => $url, 'icon' => 'lucide.library-big'])
            : $arr;
    }
}

if (!function_exists('notify')) {
    function notify(User $user): NotificationService
    {
        return new NotificationService($user);
    }
}
