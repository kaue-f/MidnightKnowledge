<?php

use App\Livewire\Pages\Home;
use Illuminate\Http\Request;
use App\Actions\LogoutAction;
use App\Livewire\Pages\Signup;
use App\Livewire\Pages\Welcome;
use App\Livewire\Pages\Auth\Library;
use App\Livewire\Pages\Auth\Profile;
use App\Livewire\Pages\Auth\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfLoggedIn;
use App\Livewire\Pages\Auth\Notifications;
use App\Livewire\Pages\Books\Index as Books;
use App\Livewire\Pages\Games\Index as Games;
use App\Livewire\Pages\Animes\Index as Animes;
use App\Livewire\Pages\Books\Show as ShowBook;
use App\Livewire\Pages\Games\Show as ShowGame;
use App\Livewire\Pages\Movies\Index as Movies;
use App\Livewire\Pages\Series\Index as Series;
use App\Livewire\Components\Auth\ResetPassword;
use App\Livewire\Components\Auth\ForgotPassword;
use App\Livewire\Pages\Animes\Show as ShowAnime;
use App\Livewire\Pages\Movies\Show as ShowMovie;
use App\Livewire\Pages\Series\Show as ShowSerie;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::middleware(CheckIfLoggedIn::class)->group(function () {
    Route::get('/login', Welcome::class)->name('welcome');
    Route::get('/signup', Signup::class)->name('signup');
});

Route::post('/logout', LogoutAction::class)
    ->middleware('auth')->name('logout');

Route::get('/privacy-policy', fn() => view('pages.privacy-policy'))->name('privacy');
Route::get('/terms-of-use', fn() => view('pages.terms-of-use'))->name('terms');

Route::get('', Home::class)->name('home');
Route::get('animes', Animes::class)->name('animes.index');
Route::get('anime/{anime}/{title}', ShowAnime::class)->name('show.anime');
Route::get('books', Books::class)->name('books.index');
Route::get('book/{book}/{title}', ShowBook::class)->name('show.book');
Route::get('games', Games::class)->name('games.index');
Route::get('game/{game}/{title}', ShowGame::class)->name('show.game');
Route::get('movies', Movies::class)->name('movies.index');
Route::get('movie/{movie}/{title}', ShowMovie::class)->name('show.movie');
Route::get('series', Series::class)->name('series.index');
Route::get('serie/{serie}/{title}', ShowSerie::class)->name('show.serie');

Route::middleware(['auth', 'auth.session', 'verified'])->group(function () {
    Route::prefix('my')->group(function () {
        Route::get('library', Library::class)->name('my.library');
        Route::get('notifications', Notifications::class)->name('my.notifications');
        Route::get('profile', Profile::class)->name('my.profile');
        Route::get('settings', Settings::class)->name('my.settings');
    });
});

Route::get('/email/verify', fn() => view('components.auth.verify-email'))
    ->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    flash()->success(trans('components/auth/verify-email.checked'));
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    flash()->success(trans('components/auth/verify-email.sent_link'));
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', ForgotPassword::class)
    ->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', ResetPassword::class)
    ->middleware('guest')->name('password.reset');
