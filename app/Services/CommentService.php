<?php

namespace App\Services;

use App\Models\User;
use App\Enums\ContentType;
use App\Models\Book\BookComment;
use App\Models\Game\GameComment;
use App\Models\Anime\AnimeComment;
use App\Models\Manga\MangaComment;
use App\Models\Movie\MovieComment;
use App\Models\Serie\SerieComment;

class CommentService
{
    public function create($comment, $content, $type, User $user)
    {
        $arr = [
            "{$type->value}_id" => $content->id,
            'user_id' => $user->id,
            'comment' => $comment
        ];

        $post = match ($type) {
            ContentType::ANIME => AnimeComment::create($arr),
            ContentType::BOOK => BookComment::create($arr),
            ContentType::GAME => GameComment::create($arr),
            ContentType::MANGA => MangaComment::create($arr),
            ContentType::MOVIE => MovieComment::create($arr),
            ContentType::SERIE => SerieComment::create($arr),
        };

        return (!isNullOrEmpty($post))
            ? notyf()->success("Comentário publicado com sucesso.")
            : notyf()->warning("Falha na publicação da comentário. Tente novamente mais tarde.");
    }

    public function get($content, $type)
    {
        $posts = match ($type) {
            ContentType::ANIME => AnimeComment::where("{$type->value}_id", $content->id),
            ContentType::BOOK => BookComment::where("{$type->value}_id", $content->id),
            ContentType::GAME => GameComment::where("{$type->value}_id", $content->id),
            ContentType::MANGA => MangaComment::where("{$type->value}_id", $content->id),
            ContentType::MOVIE => MovieComment::where("{$type->value}_id", $content->id),
            ContentType::SERIE => SerieComment::where("{$type->value}_id", $content->id),
        };

        return $posts->with('user:nickname,image,id')
            ->orderByDesc('created_at')
            ->get();
    }
}
