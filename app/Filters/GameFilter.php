<?php

namespace App\Filters;

class GameFilter
{
    public function apply($query, array $filters)
    {
        return $query->when(
            $filters['plataform'],
            function ($query) use ($filters) {
                (method_exists($query, 'getModel'))
                    ? $query->whereHas(
                        'platforms',
                        fn($q) =>
                        $q->whereIn('platforms.id', $filters['plataform'])
                    )
                    : $query->join('game_platforms as gp', 'gp.game_id', '=', 'tb.id')
                    ->whereIn('gp.platform_id', $filters['plataform']);
            }
        )
            ->when(
                $filters['developer'],
                fn($query) =>
                $query->whereIn('developed_by', $filters['developer'])
            );
    }
}
