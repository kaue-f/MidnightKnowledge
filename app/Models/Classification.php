<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
     * Get the label for the classification.
     * 
     * @return string
     */
    public function label()
    {
        $translation = __("classifications.label.{$this->name}");

        return $translation !== "classifications.label.{$this->name}"
            ? $this->name
            : __("classifications.label.{$this->name}");
    }

    /**
     * Get the description for the classification.
     * 
     * @return string
     */

    public function description()
    {
        $translation = __("classifications.description.{$this->name}");

        return $translation !== "classifications.description.{$this->name}"
            ? $this->name
            : __("classifications.description.{$this->name}");
    }
}
