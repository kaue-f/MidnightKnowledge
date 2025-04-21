<?php

namespace App\Actions\Library;

use App\Models\User;
use App\Enums\ContentType;

class RateAction
{
    public function execute($content, ?User $user, int $value, ContentType $type)
    {
        $content->ratings()
            ->where([
                ["{$type->value}_id", $content->id],
                ['user_id', $user->id],
            ])
            ->upsert(
                [
                    "{$type->value}_id" => $content->id,
                    'user_id' => $user->id,
                    'rating' => $value
                ],
                uniqueBy: ["{$type->value}_id", 'user_id'],
                update: ['rating']
            );
    }
}
