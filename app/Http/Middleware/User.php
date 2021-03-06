<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class User
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
        //return $next($request);

        if(!Auth::check()){
          return redirect()->route('login');
        }
        if(Auth::user()->role == 'user'){
          return redirect()->route('user');
        }
        if(Auth::user()->role == 'admin'){
          return redirect()->route('admin');
        }
    }
}
