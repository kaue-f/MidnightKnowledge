<?php

namespace App\Models\Cartoon;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CartoonComment extends Model
{
    protected $fillable = ['cartoon_id', 'user_id', 'comment', 'like', 'dislike'];

    public function cartoon()
    {
        return $this->belongsTo(Cartoon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
