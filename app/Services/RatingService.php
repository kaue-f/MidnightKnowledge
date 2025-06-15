<?php

namespace App\Services;

use App\Models\User;
use App\Enums\ContentType;

class RatingService
{
    public function getContentRating($content, ?User $user)
    {
        $avg = round($content->ratings()->avg('rating'), 2) ?? 0;

        $value = optional(
            $content->ratings()
                ->where('user_id', $user->id)
                ->first()
        )->rating
            ?? $avg;

        return [
            'avg' => $avg,
            'value' => (int) $value,
        ];
    }

    public function getRatingChartData($content, ContentType $contentType)
    {
        return $contentType->getModelRatings()
            ->selectRaw('rating, count(rating) as count')
            ->where("{$contentType->value}_id", $content->id)
            ->groupBy('rating')
            ->get();
    }

    public function contentRating($content, User $user, int $value, ContentType $contentType)
    {
        $content->ratings()
            ->where([
                "{$contentType->value}_id" => $content->id,
                'user_id' => $user->id
            ])
            ->upsert(
                [
                    "{$contentType->value}_id" => $content->id,
                    'user_id' => $user->id,
                    'rating' => $value
                ],
                uniqueBy: ["{$contentType->value}_id", 'user_id'],
                update: ['rating']
            );

        return $content->ratings()->avg('rating');
    }
}
