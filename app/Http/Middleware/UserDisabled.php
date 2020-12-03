<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserDisabled
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
        if (Auth::user()->status == 0) {

            return response()->json(['success' => false, 'data' => 'disabled'], 400);
        }

        return $next($request);
    }
}
