<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkUserMiddleware
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
        // dd('you are in Middleware');

        if($request->roll == 1){
            return redirect()->route('books');
         }
        elseif ($request->roll == 2) {
            return redirect('/api/customer');
        }
        else {
            return redirect('/');
        }
         return $next($request);
    }
}
