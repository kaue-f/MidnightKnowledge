<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GamePlatform extends Model
{
    use SoftDeletes;

    protected $fillable = ['game_id', 'plataform'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
