<?php

namespace App\Models\Cartoon;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CartoonRating extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = ['cartoon_id', 'user_id', 'rating'];

    /**
     * Define the relationship with Cartoon.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Cartoon, CartoonRating>
     */
    public function cartoon()
    {
        return $this->belongsTo(Cartoon::class);
    }

    /**
     * Define the relationship with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, CartoonRating>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
