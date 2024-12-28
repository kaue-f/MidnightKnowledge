<?php

use Carbon\Carbon;

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
