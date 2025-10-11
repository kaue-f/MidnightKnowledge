<?php

namespace App\Helpers;

use Illuminate\Support\Arr;

class EnumHelper
{
    /**
     * Converts enum cases to an array of ['id' => value, 'name' => label].
     *
     * @param mixed $enum Enum class (backed enum).
     * @param string $parameter Method/property to use for 'name' (default: 'label').
     * @param callable|null $callback Optional filter callback for cases.
     * @return array Array of ['id' => value, 'name' => label] for each enum case.
     */
    public static function array($enum, string $parameter = 'label', ?callable $callback = null): array
    {
        return array_map(function ($case) use ($parameter, $callback) {

            if ($callback && ! $callback($case))
                return null;

            return [
                'id' => $case->value,
                'name' => $case->$parameter()
            ];
        }, array_filter($enum::cases(), $callback));
    }

    /**
     * Converts enum cases to a simple associative array of value => label.
     *
     * @param mixed $enum Enum class (backed enum).
     * @param string $parameter Method/property to use for label (default: 'label').
     * @return array Associative array of value => label for each enum case.
     */
    public static function arraySimple($enum, string $parameter = 'label'): array
    {
        return Arr::sort(array_combine(
            array_map(fn($e) => $e->value, $enum::cases()),
            array_map(fn($e) => $e->$parameter(), $enum::cases()),
        ));
    }

    /**
     * Converts enum cases to an array of labels.
     * 
     * @param mixed $enum Enum class (backed enum).
     * @return array Array of labels for each enum case.
     */
    public static function arrayLabels($enum)
    {
        $array = array_map(fn($e) => $e->label(), $enum::cases());
        return Arr::sort($array);
    }
}
