<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class SortBy extends Component
{
    #[Modelable]
    public array $sortBy;
    public string $assortment = 'title|asc';

    public function render()
    {
        return view('livewire.components.ui.sort-by');
    }

    public function orderSortBy()
    {
        [$column, $direction] = explode('|', $this->assortment);
        if ($column == $this->sortBy['column'])
            return $this->sortBy = ['column' => $column, 'direction' => ($this->sortBy['direction'] == 'desc') ? 'asc' : 'desc'];

        return $this->sortBy = ['column' => $column, 'direction' => $direction];
    }
}
