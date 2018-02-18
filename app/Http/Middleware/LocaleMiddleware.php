<?php

namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $current_locale = session('language');
        if($current_locale == ''){
            app()->setLocale('en');
        }
        app()->setLocale($current_locale);
        session('language',$current_locale);

        return $next($request);
    }}
