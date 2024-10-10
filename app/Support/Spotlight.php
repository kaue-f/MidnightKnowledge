<?php

namespace App\Support;

use App\Models\Anime;
use Illuminate\Http\Request;

class Spotlight
{
    public function search(Request $request)
    {
        return collect()
            ->merge($this->animes($request->search));
    }

    public function animes(string $search = '')
    {
        return Anime::query()
            ->where('title', 'like', "%$search%")
            ->get()
            ->map(function (Anime $anime) {
                return [
                    'avatar' => $anime->image,
                    'name' => "$anime->title ($anime->category)",
                    // 'description' => ,
                    // 'link' =>"",
                ];
            });
    }
}
