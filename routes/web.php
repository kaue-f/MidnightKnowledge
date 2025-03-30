<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Games;
use App\Livewire\Pages\Welcome;
use App\Livewire\Pages\GameView;
use App\Livewire\Pages\Settings;
use App\Livewire\Pages\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfLoggedIn;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/', Home::class)->name('home');

Route::get('/{welcome}', Welcome::class)->name('welcome')
    ->whereIn('welcome', ['login', 'sign'])
    ->middleware(CheckIfLoggedIn::class);

Route::get('/games', Games::class)->name('games');
Route::get('/game/{game}/{title}', GameView::class)->name('game.view');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/user/profile', UserProfile::class)->name('user.profile');
    Route::get('/settings', Settings::class)->name('settings');
});
