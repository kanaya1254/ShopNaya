<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Redirect;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$level): Response
    {
        if (in_array($request->user()->level,$level)){
            return $next($request);
        }
        if (Auth::user()->level == "admin"){
            return Redirect::to('dashboard');
        }elseif (Auth::user()->level == "member"){
            return Redirect::to('beranda');
        }else{
            return view('login');
        }
    }
}
