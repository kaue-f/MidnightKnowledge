<?php

if (!function_exists('isNullOrEmpty')) {
    function isNullOrEmpty($var): bool
    {
        return empty($var) || !isset($var);
    }
}

if (!function_exists('hasValue')) {
    function hasValue($var): string
    {
        return isNullOrEmpty($var)
            ? 'N/A'
            : $var;
    }
}

if (!function_exists('hasDate')) {
    function hasDate($var): string
    {
        return isNullOrEmpty($var)
            ? 'N/A'
            : date_format($var, 'd F Y');
    }
}
