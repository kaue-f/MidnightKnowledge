<?php

namespace App\Models\Anime;

use Illuminate\Database\Eloquent\Model;

class AnimeType extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the label for the anime type.
     * 
     * @return string
     */

    public function label()
    {
        $translation = __("animeTypes.label.{$this->name}");

        return $translation !== "animeTypes.label.{$this->name}"
            ? $this->name
            : __("animeTypes.label.{$this->name}");
    }

    /**
     * Get the description for the anime type.
     * 
     * @return string
     */
    public function description()
    {
        $tranlsation = __("animeTypes.description.{$this->name}");

        return $tranlsation !== "animeTypes.description.{$this->name}"
            ? $this->name
            : __("animeTypes.description.{$this->name}");
    }
}
