<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return Auth::onceBasic('username') ?: $next($request);
    }
}
