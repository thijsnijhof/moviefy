<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::check()){
            // check whether user is administrator or not, using the isAdmin function from User controller
            if(Auth::user()->isAdmin()){
                return $next($request);
            }
        }
        return redirect('/admin');
    }
}
