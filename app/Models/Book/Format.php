<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Format extends Model
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
     * Summary of book
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Book, Format, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function book()
    {
        return $this->belongsToMany(Book::class);
    }

    /**
     * Get the label for the format.
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
     * Get the description for the format.
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
        $key = "bookFormats.{$field}.{$this->name}";
        $translation = __($key);

        if ($translation !== $key)
            return  $translation;

        return ($field == 'label') ? $this->name : "";
    }
}
