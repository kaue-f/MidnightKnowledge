<?php

namespace App\Models\Traits;

use App\Models\ContentReview;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasContentReviews
{
    /**
     * Get all content reviews for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function contentReviews(): MorphMany
    {
        return $this->morphMany(ContentReview::class, 'content');
    }
}
