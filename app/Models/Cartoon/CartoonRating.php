<?php

namespace App\Models\Cartoon;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CartoonRating extends Model
{
    protected $fillable = ['cartoon_id', 'user_id', 'rating'];

    public function cartoon()
    {
        return $this->belongsTo(Cartoon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
