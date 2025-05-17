<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Format extends Model
{
    use SoftDeletes;

    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
}
