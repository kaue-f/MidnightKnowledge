<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetUserLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $consent = Cookie::get('cookie_consent', false);

        $language = (Auth::check())
            ? Auth::user()->language->value
            : ($consent
                ? Cookie::get('language', config('app.locale'))
                : config('app.locale'));

        app()->setLocale($language);

        return $next($request);
    }
}
