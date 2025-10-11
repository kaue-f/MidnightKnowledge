<?php

namespace App\Models\Manga;

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

class Manga extends Model
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
        'chapter',
        'volume',
        'author',
        'release_date',
        'published_by',
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
     * Scope a query to only include approved manga.
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
    * Scope a query to only include pending manga.
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
     * Scope a query to only include reproved manga.
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
     * Summary of userLibrary
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserLibrary, Manga>
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
     * Define the relationship with MangaRating.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<MangaRating>
     */
    public function ratings()
    {
        return $this->hasMany(MangaRating::class);
    }

    /**
     * Define the relationship with MangaComment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<MangaComment>
     */
    public function comments()
    {
        return $this->hasMany(MangaComment::class);
    }

    /**
     * Summary of classification
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Classification, Manga>
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    /**
     * Summary of genres
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Genre, Manga>
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'manga_genre');
    }

    /**
     * Define the relationship with MangaType.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MangaType>
     */
    public function type()
    {
        return $this->belongsTo(MangaType::class, 'manga_type_id');
    }

    /**
     * Summary of relatedContents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<ContentRelation, Manga>
     */
    public function relatedContents()
    {
        return $this->morphMany(ContentRelation::class, 'source');
    }
}
