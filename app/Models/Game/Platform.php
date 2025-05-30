<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public function game()
    {
        return $this->belongsToMany(Game::class);
    }
}
