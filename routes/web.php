<?php

use App\Http\Middleware\CheckIfLoggedIn;
use App\Livewire\Pages\GameDetails;
use App\Livewire\Pages\Games;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\UserProfile;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/', Home::class)->name('home');

Route::get('/{welcome}', Welcome::class)->name('welcome')
    ->whereIn('welcome', ['login', 'sign'])
    ->middleware(CheckIfLoggedIn::class);

Route::get('/games', Games::class)->name('games');
Route::get('/game/{game}/{title}', GameDetails::class)->name('game.details');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/user/profile', UserProfile::class)->name('user.profile');
});
