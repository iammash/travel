<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Agent
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
        if(Auth::check())
        {   
            
            if(Auth::user()->isAgent() == true)
            {  
                return $next($request);
            }else{
                return redirect('/');
            }

        }
        return redirect('/agent');
    }
}
