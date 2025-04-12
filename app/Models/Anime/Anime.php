<?php

namespace App\Models\Anime;

use App\Models\User;
use App\Models\Genre;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anime extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'image',
        'synopsis',
        'classification_id',
        'episodes',
        'season',
        'season_count',
        'ova_special_count',
        'movie_count',
        'anime_type_id',
        'release_date',
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'release_date' => 'date:d/m/Y',
        ];
    }


    protected function releaseDate(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => isDate($value)
        );
    }

    protected function synopsis(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => isMarkdown($value)
        );
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(AnimeUser::class)
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'anime_genre');
    }

    public function ratings()
    {
        return $this->hasMany(AnimeRating::class);
    }

    public function comments()
    {
        return $this->hasMany(AnimeComment::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    public function anime_type()
    {
        return $this->belongsTo(AnimeType::class, 'anime_type_id');
    }
}
