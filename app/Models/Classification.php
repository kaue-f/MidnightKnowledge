<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classification extends Model
{
    use HasFactory;

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
     * Get the label for the classification.
     * 
     * @return string
     */
    protected function label(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getTranslation('label')
        );
    }

    /**
     * Get the description for the classification.
     * 
     * @return string
     */

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getTranslation('description')
        );
    }

    /**
     * Get the translation the classification
     * 
     * @param mixed $field
     */
    private function getTranslation($field)
    {
        $key = "classifications.{$field}.{$this->name}";
        $translation = __($key);

        if ($translation !== $key)
            return  $translation;

        return ($field == 'label') ? $this->name : "";
    }
}
