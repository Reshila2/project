<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facedes\App;

class SetLocale
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
        $locale=session('locale');
        App::setLocale($locale);
        dd($locale);
        echo $locale;
        return $next($request);
    }
}
