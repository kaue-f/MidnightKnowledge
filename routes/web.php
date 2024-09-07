<?php

use App\Livewire\Page\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('welcome');
});

Route::get('/', Welcome::class)->name('welcome');