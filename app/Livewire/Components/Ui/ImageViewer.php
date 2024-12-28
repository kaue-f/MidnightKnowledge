<?php

namespace App\Livewire\Components\Ui;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ImageViewer extends Component
{
    public string $image = "";
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
