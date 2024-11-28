<?php

namespace App\Models\Game;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameComment extends Model
{
    use SoftDeletes;

    protected $fillable = ['game_id', 'user_id', 'comment'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
