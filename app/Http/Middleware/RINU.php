<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RINU
{
 
    public function handle($request, Closure $next,$guard=NULL)
    {
        if(\Auth::guard($guard)->check())
            return $next($request);
        return redirect('/login');
    }
}
