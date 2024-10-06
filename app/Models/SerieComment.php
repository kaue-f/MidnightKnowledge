<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SerieComment extends Model
{
    use SoftDeletes;

    protected $fillable = ['serie_id', 'user_id', 'comment'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
