<?php

namespace App\Livewire\Components;

use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Chart extends Component
{
    public $content;
    public $type;
    public array $chartStatus  = [
        Status::PROGRESSO->name => 0,
        Status::LISTA->name => 0,
        Status::FINALIZADO->name => 0,
        Status::PAUSADO->name => 0,
        Status::DROPADO->name => 0,
        'FAVORITE' => 0,
    ];
    public array $chartRatings;

    public function render()
    {
        return view('livewire.components.chart');
    }

    public function mount()
    {
        $this->getChartsStatus();
        $this->chartRatings = $this->getChartsRatings();
    }

    public function getChartsStatus()
    {
        $query = $this->getQuery('status');

        $this->chartStatus['FAVORITE'] = $query->sum(DB::raw('case when favorite = 1 then 1 else 0 end'));

        $arrStatus = $query->selectRaw('status, count(status) as count')
            ->groupBy('status', 'favorite')
            ->get()->toArray();

        foreach ($arrStatus as $value) {
            match ($value->status) {
                Status::PROGRESSO->name => Arr::set($this->chartStatus, Status::PROGRESSO->name, $value->count),
                Status::LISTA->name =>  Arr::set($this->chartStatus, Status::LISTA->name, $value->count),
                Status::FINALIZADO->name => Arr::set($this->chartStatus, Status::FINALIZADO->name, $value->count),
                Status::PAUSADO->name =>  Arr::set($this->chartStatus, Status::PAUSADO->name, $value->count),
                Status::DROPADO->name =>  Arr::set($this->chartStatus, Status::DROPADO->name, $value->count),
            };
        }
    }

    public function getChartsRatings()
    {
        $query = $this->getQuery('ratings');

        $arrRatings = $query->selectRaw('rating, count(rating) as count')
            ->groupBy('rating')
            ->get()->toArray();

        $arr = array_fill(1, 10, 0);

        foreach ($arrRatings as $value) {
            if ($value->rating >= 1 && $value->rating <= 10)
                $arr[$value->rating] = $value->count;
        }

        return [
            $arr[1],
            $arr[2],
            $arr[3],
            $arr[4],
            $arr[5],
            $arr[6],
            $arr[7],
            $arr[8],
            $arr[9],
            $arr[10]
        ];
    }

    public function getQuery($targetTable)
    {
        return DB::table(match ($this->type) {
            ContentType::ANIME => ($targetTable === 'status') ? 'anime_user' : 'anime_ratings',
            ContentType::BOOK => ($targetTable === 'status') ? 'book_user' : 'book_ratings',
            ContentType::GAME => ($targetTable === 'status') ? 'game_user' : 'game_ratings',
            ContentType::MANGA => ($targetTable === 'status') ? 'manga_user' : 'manga_ratings',
            ContentType::MOVIE => ($targetTable === 'status') ? 'movie_user' : 'movie_ratings',
            ContentType::SERIES => ($targetTable === 'status') ? 'serie_user' : 'serie_ratings',
        })
            ->where(match ($this->type) {
                ContentType::ANIME => 'anime_id',
                ContentType::BOOK => 'book_id',
                ContentType::GAME => 'game_id',
                ContentType::MANGA => 'manga_id',
                ContentType::MOVIE => 'movie_id',
                ContentType::SERIES => 'serie_id',
            }, $this->content->id);
    }
}
