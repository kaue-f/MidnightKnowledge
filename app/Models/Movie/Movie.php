<?php

namespace App\Models\Movie;

use App\Models\Classification;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';


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
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
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

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }
}
