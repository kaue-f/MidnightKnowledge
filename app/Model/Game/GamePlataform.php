<?php

namespace App\Model\Game;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GamePlataform extends Model
{
    use SoftDeletes;

    protected $fillable = ['game_id', 'plataform', 'comment'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
