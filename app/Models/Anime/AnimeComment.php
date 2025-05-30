<?php

namespace App\Models\Anime;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AnimeComment extends Model
{
    protected $fillable = ['anime_id', 'user_id', 'comment', 'like', 'dislike'];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
