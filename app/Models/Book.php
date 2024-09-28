<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'classification_id',
        'synopsis',
        'chapter',
        'pages',
        'volume',
        'series',
        'author',
        'publication_date',
        'rating',
        'favorite',
        'comment',
        'published_by',
    ];

    protected function casts(): array
    {
        return [
            'publication_date' => 'date:d/m/Y',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'book_user');
    }
}
