<?php

namespace App\Livewire\Components;

use App\Enums\Status;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReviewCharts extends Component
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

    public function mount()
    {
        $this->getChartsStatus();
        $this->chartRatings = $this->getChartsRatings();
    }

    public function getChartsStatus()
    {
        $query = DB::table("{$this->type->value}_user")
            ->where("{$this->type->value}_id", $this->content->id);

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
        $arrRatings = DB::table("{$this->type->value}_ratings")
            ->selectRaw('rating, count(rating) as count')
            ->where("{$this->type->value}_id", $this->content->id)
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
}
