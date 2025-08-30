<?php

namespace App\Models\Manga;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class MangaComment extends Model
{
    use HasUlids;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['manga_id', 'user_id', 'comment', 'like', 'dislike'];

    /**
     * Summary of manga
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Manga, MangaComment>
     */
    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, MangaComment>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
