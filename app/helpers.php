<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

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
            : "N/A";
    }
}
