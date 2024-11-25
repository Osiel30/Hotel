<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetCurrentSection
{
    public function handle(Request $request, Closure $next, $section)
    {
        view()->share('currentSection', $section);
        return $next($request);
    }
}
