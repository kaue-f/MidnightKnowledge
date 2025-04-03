<?php

namespace App\Models\Book;

use App\Models\User;
use App\Models\Genre;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
            ->using(BookUser::class)
            ->withPivot('library', 'status', 'favorite')
            ->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function ratings()
    {
        return $this->hasMany(BookRating::class);
    }

    public function comments()
    {
        return $this->hasMany(BookComment::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }
}
