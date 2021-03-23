<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $handle = $next($request);

        if(method_exists($handle, 'header'))
        {
            $handle->header('Access-Control-Allow-Origin' , '*')
                    ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                    ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application, X-Token-Auth');
        }else {
            
            $handle->headers->set('Access-Control-Allow-Origin' , '*');
        }
    
        return $handle;
    }
}
