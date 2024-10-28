<?php

namespace App\Model\Serie;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SerieRating extends Model
{
    use SoftDeletes;

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
