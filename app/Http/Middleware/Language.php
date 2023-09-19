<?php

namespace App\Http\Middleware;

use Closure;


class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))) {
            app()->setLocale(Session()->get('applocale'));
        }
        else {
            app()->setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
