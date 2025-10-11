<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class StrHelper
{
    /**
     * Convert a string to a human-readable headline format.
     *
     * @param string $value
     * @return string
     */
    public static function formatMarkdown($value): string
    {
        return (isNullOrEmpty($value))
            ? 'N/A'
            : nl2br(rtrim(
                Str::markdown($value),
                "\n"
            ));
    }
}
