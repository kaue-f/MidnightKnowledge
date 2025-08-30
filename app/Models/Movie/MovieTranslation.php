<?php

namespace App\Models\Movie;

use Illuminate\Database\Eloquent\Model;

class MovieTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var 
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'synopsis'];
}
