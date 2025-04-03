<?php

namespace App\Models\Manga;

use App\Models\User;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manga extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'image',
        'classification_id',
        'synopsis',
        'chapter',
        'volume',
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
            ->using(MangaUser::class)
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function ratings()
    {
        return $this->hasMany(MangaRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MangaComment::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    public function type()
    {
        return $this->belongsTo(MangaType::class, 'manga_type_id');
    }
}
