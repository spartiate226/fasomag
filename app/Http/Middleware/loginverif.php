<?php

namespace App\Http\Middleware;

use Closure;

class loginverif
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
        /*if(!Auth::User()->check()){
            return redirect('login');
        }*/
        return $next($request);
    }
}
