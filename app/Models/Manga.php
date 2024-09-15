<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manga extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'genre',
        'classification',
        'synopsis',
        'chapter',
        'volume',
        'author',
        'publication_date',
        'status',
        'rating',
        'favorite',
        'comment',
        'published_by',
        'user_id',
    ];

    protected $hidden = [
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'publication_date' => 'date:d/m/Y',
        ];
    }
}
