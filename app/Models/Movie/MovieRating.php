<?php

namespace App\Models\Movie;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class MovieRating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['movie_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Movie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Movie, MovieRating>
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, MovieRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
