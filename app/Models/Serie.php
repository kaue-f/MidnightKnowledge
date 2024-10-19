<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serie extends Model
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

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'serie_genre');
    }
    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'serie_user');
    }

    public function ratings()
    {
        return $this->hasMany(SerieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(SerieComment::class);
    }
}
