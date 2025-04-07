<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(Auth::check() && Auth::user()->Payment_Status === "pending"){
    //         return redirect()->route('stripe')->with("Warning" , "Please complete your payment to view reports.");
    //     }
    //     return $next($request);
    // }
}
