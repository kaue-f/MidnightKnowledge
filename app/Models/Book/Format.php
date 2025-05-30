<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
}
