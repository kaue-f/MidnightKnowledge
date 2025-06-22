<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Library;
use App\Livewire\Pages\Welcome;
use App\Livewire\Pages\Settings;
use App\Livewire\Pages\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfLoggedIn;
use App\Livewire\Pages\Books\Index as Books;
use App\Livewire\Pages\Games\Index as Games;
use App\Livewire\Pages\Animes\Index as Animes;
use App\Livewire\Pages\Books\Show as ShowBook;
use App\Livewire\Pages\Games\Show as ShowGame;
use App\Livewire\Pages\Movies\Index as Movies;
use App\Livewire\Pages\Series\Index as Series;
use App\Livewire\Pages\Animes\Show as ShowAnime;
use App\Livewire\Pages\Movies\Show as ShowMovie;
use App\Livewire\Pages\Series\Show as ShowSerie;

Route::get('/{welcome}', Welcome::class)->name('welcome')
    ->whereIn('welcome', ['login', 'sign'])
    ->middleware(CheckIfLoggedIn::class);

Route::get('/', Home::class)->name('home');

Route::get('/animes', Animes::class)->name('animes');
Route::get('/anime/{anime}/{title}', ShowAnime::class)->name('show.anime');

Route::get('/books', Books::class)->name('books');
Route::get('/book/{book}/{title}', ShowBook::class)->name('show.book');

Route::get('/games', Games::class)->name('games');
Route::get('/game/{game}/{title}', ShowGame::class)->name('show.game');

Route::get('/movies', Movies::class)->name('movies');
Route::get('/movie/{movie}/{title}', ShowMovie::class)->name('show.movie');

Route::get('/series', Series::class)->name('series');
Route::get('/serie/{serie}/{title}', ShowSerie::class)->name('show.serie');


Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/library', Library::class)->name('library');
    Route::get('/user/profile', UserProfile::class)->name('user.profile');
    Route::get('/settings', Settings::class)->name('settings');
});
