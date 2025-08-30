<?php

namespace App\Models\Serie;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SerieRating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['serie_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Serie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Serie, SerieRating>
     */
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, SerieRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
