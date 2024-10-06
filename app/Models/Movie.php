<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'synopsis',
        'classification_id',
        'duration',
        'release_date',
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

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'movie_user');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    public function ratings()
    {
        return $this->hasMany(MovieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }
}
