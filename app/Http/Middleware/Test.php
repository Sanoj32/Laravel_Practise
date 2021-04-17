<?php

namespace App\Http\Middleware;

use Closure;

class Test
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
        if (auth()->user()->name == "Sanoj Raj Shrestha") {
            echo "All checks passed and redirected ";
        } else {
            echo "Checks failed! You are unauthorized";
        }
        return $next($request);
    }
}
