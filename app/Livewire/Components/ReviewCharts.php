<?php

namespace App\Livewire\Components;

use App\Enums\Status;
use Livewire\Component;
use App\Models\UserLibrary;
use Illuminate\Support\Arr;
use App\Services\RatingService;

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
        $this->chartRatings = $this->loadRatingChart();
    }

    public function getChartsStatus()
    {
        $query = UserLibrary::query()
            ->where([
                ['content_id', $this->content->id],
                ['content_type', $this->type],
            ]);

        $this->chartStatus['FAVORITE'] = $query->where('favorite', true)
            ->sum('favorite');

        $arrStatus = $query->selectRaw('status, count(status) as count')
            ->groupBy('status', 'favorite')
            ->get();

        foreach ($arrStatus as $value) {
            match ($value->getRawOriginal('status')) {
                Status::PROGRESSO->value => Arr::set($this->chartStatus, Status::PROGRESSO->name, $value->count),
                Status::LISTA->value =>  Arr::set($this->chartStatus, Status::LISTA->name, $value->count),
                Status::FINALIZADO->value => Arr::set($this->chartStatus, Status::FINALIZADO->name, $value->count),
                Status::PAUSADO->value =>  Arr::set($this->chartStatus, Status::PAUSADO->name, $value->count),
                Status::DROPADO->value =>  Arr::set($this->chartStatus, Status::DROPADO->name, $value->count),
            };
        }
    }

    public function loadRatingChart()
    {
        $arrRatings = app(RatingService::class)->getRatingChartData($this->content, $this->type);

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
