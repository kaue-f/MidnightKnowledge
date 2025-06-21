<?php

namespace App\Services;

use App\Models\User;
use App\Enums\ContentType;
use App\Models\UserLibrary;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LibraryService
{
    public function getUserContent($content, User $user, ContentType $content_type)
    {
        $userContent = UserLibrary::select('favorite', 'library', 'status')
            ->where([
                'user_id' => $user->id,
                'content_id' => $content->id,
                'content_type' => $content_type->value
            ])
            ->first();

        return optional($userContent)->toArray()
            ?? [
                'favorite' => false,
                'library' => false,
                'status' => ''
            ];
    }

    public function handleLibraryContent($content, User $user, bool $library, string $status = "")
    {
        try {
            $inLibrary = $content->userLibrary()
                ->withTrashed()
                ->where('user_id', $user->id)
                ->first();

            if (!$inLibrary) {
                $content->userLibrary()->create([
                    'user_id' => $user->id,
                    'status' => $status
                ]);

                return flash()->info("<strong>{$content->title}</strong> foi adicionado a sua biblioteca.");
            }

            if (!$library) {
                $inLibrary->removeContent();
                return flash()->info("<strong>{$content->title}</strong> foi removido da sua biblioteca.");
            }

            $inLibrary->restoreContent();

            $inLibrary->update([
                'status' => $status
            ]);

            return flash()->info("<strong>{$content->title}</strong> foi adicionado a sua biblioteca.");
        } catch (\Throwable $th) {
            return  flash()->error("Não foi possível atualizar <strong>{$content->title}</strong> na sua biblioteca. Tente novamente mais tarde.");
        }
    }

    public function toggleFavoriteStatus($content, User $user, bool $favorite)
    {
        try {
            $content->userLibrary()
                ->where('user_id', $user->id)
                ->update([
                    'favorite' => $favorite
                ]);

            $action = ($favorite) ? 'adicionado aos' : ' removido dos';

            return flash()->info("<strong>{$content->title}</strong> foi {$action} favoritos.");
        } catch (\Throwable $th) {
            return  flash()->error("Não foi possível atualizar <strong>{$content->title}</strong> na sua biblioteca. Tente novamente mais tarde.");
        }
    }

    public function getUserLibraryContent(User $user, array $types, string $search, ?bool $favorite, array $filters, array $sortBy, int $page)
    {
        $selectedTypes = $this->resolveTypesToQuery($types, $filters);

        $queries = $selectedTypes
            ->map(fn(ContentType $type) => $this->buildContentQuery($user, $type, $search, $favorite, $filters))
            ->filter()
            ->values();

        if ($queries->isEmpty())
            return collect()->paginate($page);

        $first = $queries->shift();
        $fullQuery = $queries->reduce(fn($carry, $query) => $carry->unionAll($query), $first);

        return DB::table(DB::raw("({$fullQuery->toSql()}) as all_content"))
            ->mergeBindings($fullQuery)
            ->orderBy(...array_values($sortBy))
            ->paginate($page);
    }

    private function buildContentQuery(User $user, ContentType $type,  string $search, ?bool $favorite, array $filters)
    {
        $table = Str::plural($type->value);

        $ratingsQuery = DB::table("{$type->value}_ratings")
            ->select("{$type->value}_id", DB::raw('ROUND(AVG(rating),2) as avg_rating'))
            ->groupBy("{$type->value}_id");

        return DB::table('user_libraries as ul')
            ->join("{$table} as tb", 'tb.id', '=', 'ul.content_id')
            ->where([
                'ul.user_id' => $user->id,
                'ul.content_type' => $type->value
            ])
            ->leftJoinSub($ratingsQuery, 'r', function ($join) use ($type) {
                $join->on("r.{$type->value}_id", '=', 'ul.content_id');
            })
            ->leftJoin('classifications as l', 'l.id', '=', 'tb.classification_id')
            ->when($search, function ($query) use ($search) {
                $query->whereLike('tb.title', "%$search%");
            })
            ->when($filters['genre'], function ($query) use ($filters, $type) {
                $query->join("{$type->value}_genre as g", "g.{$type->value}_id", '=', 'ul.content_id')
                    ->whereIn('g.genre_id', $this->formatGenresArray($filters['genre']));
            })
            ->when($filters['classification'], function ($query) use ($filters) {
                $query->whereIn('classification_id', $filters['classification']);
            })
            ->when($filters['status'], function ($query) use ($filters) {
                $query->whereIn('ul.status', $filters['status']);
            })
            ->when($favorite, function ($query) use ($favorite) {
                $query->where('ul.favorite', $favorite);
            })
            ->tap(fn($query) => $type->applyFilters($query, $filters[$type->value] ?? []))
            ->select([
                'tb.id',
                'tb.title',
                'tb.image',
                'l.classification',
                'l.image as classification_image',
                'ul.favorite',
                'ul.status',
                'r.avg_rating',
                DB::raw("'{$type->value}' as type"),
                'tb.created_at',
                'tb.release_date',
                'ul.created_at as created_at_library',
            ])
            ->distinct();
    }

    private function resolveTypesToQuery(array $types, array $filters)
    {
        $validTypes = collect($types)
            ->map(fn($type) => ContentType::tryFrom($type))
            ->filter()
            ->values();

        $specificFilters = $validTypes->filter(
            fn(ContentType $type) =>
            isset($filters[$type->value]) && collect($filters[$type->value])->filter()->isNotEmpty()
        );

        return $specificFilters->isNotEmpty()
            ? $specificFilters
            : $validTypes;
    }

    public function formatGenresArray($arr): array
    {
        return collect($arr)
            ->flatMap(
                fn($item) => is_string($item) && str_contains($item, ',')
                    ? explode(',', $item)
                    : [$item]
            )
            ->map(fn($id) => (int) $id)
            ->unique()
            ->values()
            ->all();
    }
}
