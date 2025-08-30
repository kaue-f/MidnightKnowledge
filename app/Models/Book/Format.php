<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

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
    public function label()
    {
        $translation = __("bookFormats.label.{$this->name}");

        return $translation !== "bookFormats.label.{$this->name}"
            ? $this->name
            : __("bookFormats.label.{$this->name}");
    }

    /**
     * Get the description for the format.
     *
     * @return string
     */
    public function description()
    {
        $translation = __("bookFormats.description.{$this->name}");

        return $translation !== "bookFormats.description.{$this->name}"
            ? $this->name
            : __("bookFormats.description.{$this->name}");
    }
}
