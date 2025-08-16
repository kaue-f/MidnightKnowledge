<?php

namespace App\Livewire\Components;

use App\Enums\StatusEnum;
use Livewire\Component;
use App\Models\UserLibrary;
use Illuminate\Support\Arr;
use App\Services\RatingService;

class ReviewCharts extends Component
{
    public $content;
    public $type;
    public array $chartStatus  = [
        StatusEnum::PROGRESS->name => 0,
        StatusEnum::PLANNED->name => 0,
        StatusEnum::COMPLETED->name => 0,
        StatusEnum::PAUSED->name => 0,
        StatusEnum::DROPPED->name => 0,
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
                StatusEnum::PROGRESS->value => Arr::set($this->chartStatus, StatusEnum::PROGRESS->name, $value->count),
                StatusEnum::PLANNED->value =>  Arr::set($this->chartStatus, StatusEnum::PLANNED->name, $value->count),
                StatusEnum::COMPLETED->value => Arr::set($this->chartStatus, StatusEnum::COMPLETED->name, $value->count),
                StatusEnum::PAUSED->value =>  Arr::set($this->chartStatus, StatusEnum::PAUSED->name, $value->count),
                StatusEnum::DROPPED->value =>  Arr::set($this->chartStatus, StatusEnum::DROPPED->name, $value->count),
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
