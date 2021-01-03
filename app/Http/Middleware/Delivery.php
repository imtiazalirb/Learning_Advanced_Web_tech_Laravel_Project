<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Delivery
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        //role 1 = admin
        if(Auth::user()->role == 1){
            return redirect()->route('admin');
        }

        //role 2 = employee
        if(Auth::user()->role == 2){
            return redirect()->route('employee');
        }

        //role 3 = customer
        if(Auth::user()->role == 3){
            return redirect()->route('customer');
        }

        //role 4 = delivery
        if(Auth::user()->role == 4){
            return $next($request);
        }
    }
}
