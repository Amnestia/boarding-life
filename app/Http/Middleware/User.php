<?php

namespace App\Http\Middleware;

use Closure;

class User
{
    /**
     * Handle an incoming request to make sure the request is requested by an authenticated user
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     *
     */
    public function handle($request,Closure $next)
    {
        if(auth()->user())
        return $next($request);
        return redirect()->back();
    }
}