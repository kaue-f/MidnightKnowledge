<?php

use App\Livewire\Pages\GameDetails;
use App\Livewire\Pages\Games;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/', Home::class)->name('home');
Route::get('/welcome', Welcome::class)->name('welcome');
Route::get('/games', Games::class)->name('games');
Route::get('/game/{game}', GameDetails::class)->name('game.details');
