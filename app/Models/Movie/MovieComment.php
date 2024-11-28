<?php

namespace App\Models\Movie;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieComment extends Model
{
    use SoftDeletes;

    protected $fillable = ['movie_id', 'user_id', 'comment'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
