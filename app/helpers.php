<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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

if (!function_exists('isTime')) {
    function isTime($value): string
    {
        if (isNullOrEmpty($value))
            return 'N/A';

        $time = Carbon::parse($value);

        return "{$time->format('G')}h {$time->format('i')}m";
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
