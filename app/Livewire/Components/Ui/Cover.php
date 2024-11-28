<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;

class Cover extends Component
{
    public $item;
    public $keyValue;
    public function render()
    {
        return view('livewire.components.ui.cover');
    }

    public function mount($item)
    {
        $this->item = $item;
    }
}
