<?php

namespace App\Models\Game;

use App\Models\User;
use App\Models\Genre;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'image',
        'classification_id',
        'duration',
        'release_date',
        'developed_by',
        'synopsis',
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'release_date' => 'date',
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
            ->using(GameUser::class)
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'game_genre');
    }

    public function ratings()
    {
        return $this->hasMany(GameRating::class);
    }

    public function comments()
    {
        return $this->hasMany(GameComment::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'game_platforms');
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }
}
