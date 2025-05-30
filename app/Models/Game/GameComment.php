<?php

namespace App\Models\Game;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class GameComment extends Model
{
    protected $fillable = ['game_id', 'user_id', 'comment', 'like', 'dislike'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
