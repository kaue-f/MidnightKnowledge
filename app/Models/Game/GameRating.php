<?php

namespace App\Models\Game;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class GameRating extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = ['game_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Game.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Game, GameRating>
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, GameRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
