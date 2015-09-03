<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class: Admin
 *
 */
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request Request Object
     * @param \Closure                 $next    Closure Object
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!\Auth::user()->hasRole('admin')) {
                        return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
