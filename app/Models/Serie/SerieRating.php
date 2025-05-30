<?php

namespace App\Models\Serie;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SerieRating extends Model
{
    protected $fillable = ['serie_id', 'user_id', 'rating'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
