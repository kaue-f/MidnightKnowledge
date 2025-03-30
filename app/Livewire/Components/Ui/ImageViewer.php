<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ImageViewer extends Component
{
    public $image = "";
    public string $title = "";
    public function render()
    {
        return view('livewire.components.ui.image-viewer');
    }

    public function download()
    {
        return Storage::download($this->image);
    }
}
