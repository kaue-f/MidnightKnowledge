<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'classification_id',
        'duration',
        'release_date',
        'rating',
        'favorite',
        'comment',
        'developed_by',
        'plataform',
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
            ->withPivot('status_id', 'rating', 'favorite', 'comment')
            ->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'games_genre');
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'games_user');
    }
}
