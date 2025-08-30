<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    /**
     * Summary of game
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Game, Platform, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function game()
    {
        return $this->belongsToMany(Game::class);
    }
}
