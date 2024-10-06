<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnimeRating extends Model
{
    use SoftDeletes;

    protected $fillable = ['anime_id', 'user_id', 'rating'];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
