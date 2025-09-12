<?php

namespace App\Enums;

enum LanguageEnum: string
{
    case PT_BR = 'pt_BR';
    case EN = 'en';

    /**
     * Get the array representation of the enum.
     *
     * @return array
     */
    public static function array(): array
    {
        return array_combine(
            array_map(fn($language) => $language->value, self::cases()),
            array_map(fn($language) => [
                'label' => $language->label(),
                'flag' => $language->flag()
            ], self::cases())
        );
    }

    /**
     * Get the label for the language.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PT_BR => __('enums.LanguageEnum.label.pt_BR'),
            self::EN => __('enums.LanguageEnum.label.en'),
        };
    }

    public function flag()
    {
        return match ($this) {
            self::PT_BR => '/images/languages/pt_BR.svg',
            self::EN => '/images/languages/en.svg',
        };
    }
}
