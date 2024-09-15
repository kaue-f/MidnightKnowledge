<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'genre',
        'classification',
        'duration',
        'release_date',
        'status',
        'rating',
        'favorite',
        'comment',
        'developed_by',
        'plataform',
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
