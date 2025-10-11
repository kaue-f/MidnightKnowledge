<?php

namespace App\Models\Anime;

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

class Anime extends Model
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
     * @var array<int, string>
     */
    protected $fillable = [
        'cover_id',
        'cover_url',
        'classification_id',
        'episodes',
        'season',
        'season_count',
        'ova_special_count',
        'movie_count',
        'anime_type_id',
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
     * @var array
     */
    protected function casts(): array
    {
        return [
            'release_date' => 'date:d/m/Y',
            'status' => ReviewStateEnum::class,
        ];
    }

    /**
     * Scope a query to only include approved anime.
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
    * Scope a query to only include pending anime.
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
     * Scope a query to only include reproved anime.
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
     * Accessor for the cover URL.
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
     * Accessor for the synopsis.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function synopsis(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => StrHelper::formatMarkdown($value)
        );
    }

    /** Define the relationship with UserLibrary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
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
     * Summary of genres
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Genre, Anime, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'anime_genre');
    }

    /**
     * Define the relationship with AnimeRating.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<AnimeRating>
     */
    public function ratings()
    {
        return $this->hasMany(AnimeRating::class);
    }

    /**
     * Define the relationship with AnimeComment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<AnimeComment>
     */
    public function comments()
    {
        return $this->hasMany(AnimeComment::class);
    }

    /**
     * Define the relationship with Classification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Classification>
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    /**
     * Define the relationship with AnimeType.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<AnimeType>
     */
    public function anime_type()
    {
        return $this->belongsTo(AnimeType::class, 'anime_type_id');
    }

    /**
     * Summary of relatedContents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<ContentRelation, Anime>
     */
    public function relatedContents()
    {
        return $this->morphMany(ContentRelation::class, 'source');
    }
}
