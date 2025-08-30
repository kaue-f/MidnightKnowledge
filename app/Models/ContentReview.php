<?php

namespace App\Models;

use App\Enums\ReviewStateEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class ContentReview extends Model
{
    use HasUlids;

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
        'content_type',
        'content_id',
        'status',
        'reviewer_id',
        'review',
        'reviewed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'reviewed_at' => 'datetime',
            'status' => ReviewStateEnum::class,
        ];
    }

    /**
     * Get the content that is being reviewed.
     */
    public function content()
    {
        return $this->morphTo();
    }

    /**
     * Get the reviewer that wrote the review.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, ContentReview>
     */
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}
