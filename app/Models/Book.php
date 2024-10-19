<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';

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
        'release_date',
        'published_by',
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'release_date' => 'date:d/m/Y',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('library', 'status_id', 'favorite')
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

    public function ratings()
    {
        return $this->hasMany(BookRating::class);
    }

    public function comments()
    {
        return $this->hasMany(BookComment::class);
    }
}
