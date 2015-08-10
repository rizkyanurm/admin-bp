<?php

namespace Bimaproteksi\Http\Middleware;

use Closure;
use Auth;

class SimpleAuthMiddleware
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
        // return $next($request);
        return Auth::onceBasic('username') ?: $next($request);
    }
}
