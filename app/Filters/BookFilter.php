<?php

namespace App\Filters;

use Illuminate\Support\Facades\DB;

class BookFilter
{
    public function apply($query, array $filters)
    {
        return $query->when(
            $filters['author'],
            fn($query) =>
            $query->whereIn('author', $filters['author'])
        )
            ->when(
                $filters['format'],
                function ($query) use ($filters) {
                    (method_exists($query, 'getModel'))
                        ? $query->whereHas(
                            'formats',
                            fn($q) =>
                            $q->whereIn('formats.id', $filters['format'])
                        )
                        : $query->join('book_formats as bf', 'bf.book_id', '=', 'tb.id')
                        ->whereIn('bf.format_id', $filters['format']);
                }
            )
            ->when(
                $filters['published'],
                fn($query) =>
                $query->whereIn('published_by', $filters['published'])
            )
            ->when(
                $filters['serie'],
                fn($query) =>
                $query->whereIn(DB::raw('TRIM(series)'), $filters['serie'])
            );
    }
}
