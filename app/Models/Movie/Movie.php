<?php

namespace App\Models\Movie;

use App\Models\Genre;
use App\Models\Report;
use App\Helpers\StrHelper;
use App\Helpers\DateHelper;
use App\Models\UserLibrary;
use App\Enums\ReviewStateEnum;
use App\Models\Classification;
use App\Models\ContentRelation;
use App\Models\UserNotification;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasContentReviews;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory, HasUlids, SoftDeletes, Translatable, HasContentReviews;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cover_id',
        'cover_url',
        'classification_id',
        'duration',
        'release_date',
        'user_id',
        'status'
    ];

    /**
     * Summary of translatable
     * @var array
     */
    public $translatedAttributes = ['title', 'synopsis'];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'release_date' => 'date:d/m/Y',
            'status' => ReviewStateEnum::class,
        ];
    }

    /**
     * Scope a query to only include approved movie.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    #[Scope]
    protected function approved(Builder $query): void
    {
        $query->where('status', ReviewStateEnum::APPROVED)
            ->orWhere('status', ReviewStateEnum::AUTO_APPROVED);
    }

    /*
    * Scope a query to only include pending movie.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @return void
    */
    #[Scope]
    protected function pending(Builder $query): void
    {
        $query->where('status', ReviewStateEnum::PENDING);
    }

    /**
     * Scope a query to only include reproved movie.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    #[Scope]
    protected function reproved(Builder $query): void
    {
        $query->where('status', ReviewStateEnum::REPROVED);
    }

    /**
     * Summary of releaseDate
     * @return Attribute
     */
    protected function releaseDate(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => DateHelper::formatDate($value)
        );
    }

    /**
     * Summary of synopsis
     * @return Attribute
     */
    protected function synopsis(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => StrHelper::formatMarkdown($value)
        );
    }

    /**
     * Summary of duration
     * @return Attribute
     */
    protected function duration(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => DateHelper::formatTime($value)
        );
    }

    /**
     * Define the relationship with UserLibrary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserLibrary, Movie>
     */
    public function userLibrary()
    {
        return $this->morphMany(UserLibrary::class, 'content');
    }

    /**
     * Define the relationship with UserNotification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserNotification>
     */
    public function related()
    {
        return $this->morphMany(UserNotification::class, 'related');
    }

    /**
     * Define the relationship with Report.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<Report>
     */
    public function reported()
    {
        return $this->morphMany(Report::class, 'reported');
    }

    /**
     * Define the relationship with Genre.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Genre, Movie>
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    /**
     * Define the relationship with MovieRating.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<MovieRating>
     */
    public function ratings()
    {
        return $this->hasMany(MovieRating::class);
    }

    /**
     * Define the relationship with MovieComment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<MovieComment>
     */
    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }

    /**
     * Define the relationship with Classification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Classification, Movie>
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    /**
     * Summary of relatedContents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<ContentRelation, Movie>
     */
    public function relatedContents()
    {
        return $this->morphMany(ContentRelation::class, 'source');
    }
}
