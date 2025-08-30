<?php

namespace App\Models\Book;

use App\Models\Genre;
use App\Models\Report;
use App\Models\UserLibrary;
use App\Enums\ReviewStateEnum;
use App\Models\Classification;
use App\Models\ContentRelation;
use App\Models\UserNotification;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasContentReviews;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
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
        'chapter',
        'pages',
        'volume',
        'series',
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
     * Scope a query to only include approved book.
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
    * Scope a query to only include pending book.
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
     * Scope a query to only include reproved book.
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
     * Get the release date attribute.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function releaseDate(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => isDate($value)
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
            get: fn($value): string => isMarkdown($value)
        );
    }

    /**
     * Define the relationship with UserLibrary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<UserLibrary, Book>
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Genre, Book>
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    /**
     * Summary of ratings
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<BookRating, Book>
     */
    public function ratings()
    {
        return $this->hasMany(BookRating::class);
    }

    /**
     * Define the relationship with BookComment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<BookComment>
     */
    public function comments()
    {
        return $this->hasMany(BookComment::class);
    }

    /**
     * Define the relationship with Classification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Classification, Book>
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }

    /**
     * Define the relationship with Format.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Format, Book>
     */
    public function formats()
    {
        return $this->belongsToMany(Format::class, 'book_formats');
    }

    /**
     * Summary of relatedContents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<ContentRelation, Book>
     */
    public function relatedContents()
    {
        return $this->morphMany(ContentRelation::class, 'source');
    }
}
