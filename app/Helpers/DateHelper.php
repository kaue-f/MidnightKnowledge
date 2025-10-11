<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;

class DateHelper
{
    /**
     * Format date to a human-readable format.
     *
     * @param \DateTime $date
     * @param string $format
     * @return string
     */
    public static function formatDate(\DateTime $date, string $format = 'd F Y'): string
    {
        return Str::headline(
            Carbon::parse($date)
                ->translatedFormat($format)
        );
    }

    /**
     * Format time to "Xh Ym" format.
     *
     * @param \DateTime $time
     * @return string
     */
    public static function formatTime(\DateTime $time): string
    {
        $time = Carbon::parse($time);
        $hours = $time->format('G');
        $minutes = $time->format('i');

        return "{$hours}h {$minutes}m";
    }
}
