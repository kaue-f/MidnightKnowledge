<?php

if (!function_exists('isNullOrEmpty')) {
    function isNullOrEmpty($var): bool
    {
        return empty($var) || !isset($var);
    }
}

if (!function_exists('phonePattern')) {
    function phonePattern($ddd, $phone): string
    {
        return $ddd . " " . $phone;
    }
}
