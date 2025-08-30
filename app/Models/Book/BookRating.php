<?php

namespace App\Models\Book;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BookRating extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = ['book_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Book.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Book, BookRating>
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, BookRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
