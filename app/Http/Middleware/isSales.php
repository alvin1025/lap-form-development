<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isSales
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (auth()->user()->division == 'COMMERCE YARN & GREIGE' || auth()->user()->division ==  'FABRIC SALES') {
                return $next($request);
            } else {
                return redirect('/dashboard')->with('error',"You don't have sales access.");
            }
        } else {
            return redirect('/dashboard')->with('error',"You have to login first.");
        }
    }
}
