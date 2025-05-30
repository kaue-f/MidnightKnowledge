<?php

namespace App\Models\Book;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BookComment extends Model
{
    protected $fillable = ['book_id', 'user_id', 'comment', 'like', 'dislike'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
