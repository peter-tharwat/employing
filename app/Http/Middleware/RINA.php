<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RINA
{
 
    public function handle($request, Closure $next,$guard=NULL)
    {
        if(\Auth::guard($guard)->check()&&\Auth::user()->is_admin=="1")
            return $next($request);
        return redirect('/login');
    }
}
