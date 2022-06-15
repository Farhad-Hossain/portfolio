<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        if ( !Auth::user() || Auth::user()->role != 1 ) {
            return redirect()->route('welcome_page')->with('error', 'You have no permissions to access.');
        }
        return $next($request);
    }
}
