<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use  Illuminate\Support\Facades\Auth;


class MustbeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(Auth::check()){
          if(auth()->user()->username !== 'joel12345'){
            abort(404);
          }

        }else{
            abort(403, 'Unauthorized');
        }
        
        return $next($request);
    }
}
