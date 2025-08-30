<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;

class BookTranslation extends Model
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
