<?php

namespace App\Models\Movie;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class MovieRating extends Model
{
    protected $fillable = ['movie_id', 'user_id', 'rating'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
