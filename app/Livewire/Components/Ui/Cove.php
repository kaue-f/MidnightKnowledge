<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;

class Cove extends Component
{
    public $item;
    public $keyValue;
    public function render()
    {
        return view('livewire.components.ui.cove');
    }

    public function mount($item)
    {
        $this->item = $item;
    }
}
