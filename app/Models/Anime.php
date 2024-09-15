<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anime extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'genres',
        'synopsis',
        'classification',
        'episodes',
        'season',
        'release_date',
        'status',
        'rating',
        'favorite',
        'comment',
        'user_id',
    ];

    protected $hidden = [
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'release_date' => 'date:d/m/Y',
        ];
    }
}
