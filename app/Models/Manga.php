<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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

    public function users()
    {
        return $this->belongsToMany(User::class)
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
}
