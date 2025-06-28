<?php

namespace App\Models\Cartoon;

use App\Models\Genre;
use App\Models\UserLibrary;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartoon extends Model
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
        'special_count',
        'movie_count',
        'cartoon_type_id',
        'release_date',
        'user_id',
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

    public function userLibrary()
    {
        return $this->morphMany(UserLibrary::class, 'content');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'cartoon_genre');
    }

    public function ratings()
    {
        return $this->hasMany(CartoonRating::class);
    }

    public function comments()
    {
        return $this->hasMany(CartoonComment::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    public function anime_type()
    {
        return $this->belongsTo(CartoonType::class, 'cartoon_type_id');
    }
}
