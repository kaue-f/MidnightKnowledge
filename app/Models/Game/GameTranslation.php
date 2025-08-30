<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Model;

class GameTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var 
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'synopsis'];
}
