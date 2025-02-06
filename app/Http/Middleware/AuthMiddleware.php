<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use Auth;

class AuthMiddleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {

        if(!Auth::check()){
            $url= url()->current();
            session(['key' => $url]);
            return redirect('/user-login');
        }
 
        return $next($request);
    }
}