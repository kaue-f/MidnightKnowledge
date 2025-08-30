<?php

namespace App\Models\Anime;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AnimeRating extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = ['anime_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Anime.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Anime, AnimeRating>
     */
    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, AnimeRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
