<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ApiPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (Auth::user()->can($permission)) {

            return $next($request);
        }
        
        return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
    }
}
