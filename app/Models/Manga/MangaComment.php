<?php

namespace App\Models\Manga;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class MangaComment extends Model
{
    protected $fillable = ['manga_id', 'user_id', 'comment', 'like', 'dislike'];

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
