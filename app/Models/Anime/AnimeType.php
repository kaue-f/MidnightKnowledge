<?php

namespace App\Models\Anime;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class AnimeType extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['label', 'description'];

    /**
     * Get the label for the anime type.
     * 
     * @return string
     */

    public function label(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getTranslation('label')
        );
    }

    /**
     * Get the description for the anime type.
     * 
     * @return string
     */
    public function description(): Attribute
    {
        return Attribute::make(
            get: fn(): array|string|null => $this->getTranslation('description')
        );
    }

    /**
     * Get the translation the anime
     * 
     * @param mixed $field
     */
    private function getTranslation($field)
    {
        $key = "animeTypes.{$field}.{$this->name}";
        $translation = __($key);

        if ($translation !== $key)
            return  $translation;

        return ($field == 'label') ? $this->name : "";
    }
}
