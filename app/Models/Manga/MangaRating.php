<?php

namespace App\Models\Manga;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class MangaRating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['manga_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Manga.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Manga, MangaRating>
     */
    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, MangaRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
