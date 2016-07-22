<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{
    
    
    public function handle($request, Closure $next)
    {
        App::setLocale(Session::get('locale', config('locale')));
        
        return $next($request);
    }
}
