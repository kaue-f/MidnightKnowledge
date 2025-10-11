<?php

namespace App\Models\Serie;

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

class Serie extends Model
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
        'episodes',
        'season',
        'season_count',
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
     * Scope a query to only include approved serie.
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
    * Scope a query to only include pending serie.
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
     * Scope a query to only include reproved serie.
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
     * Accessor for the release date attribute.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function releaseDate(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => DateHelper::formatDate($value)
        );
    }

    /**
     * Accessor for the synopsis attribute.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function synopsis(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => StrHelper::formatMarkdown($value)
        );
    }

    /**
     * Summary of userLibrary
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserLibrary, Serie>
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Genre, Serie>
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'serie_genre');
    }

    /**
     * Define the relationship with SerieRating.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<SerieRating>
     */
    public function ratings()
    {
        return $this->hasMany(SerieRating::class);
    }

    /**
     * Define the relationship with SerieComment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<SerieComment>
     */
    public function comments()
    {
        return $this->hasMany(SerieComment::class);
    }

    /**
     * Define the relationship with Classification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Classification, Serie>
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    /**
     * Summary of relatedContents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<ContentRelation, Serie>
     */
    public function relatedContents()
    {
        return $this->morphMany(ContentRelation::class, 'source');
    }
}
