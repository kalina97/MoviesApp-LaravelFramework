<?php

namespace App\Http\Middleware;

use Closure;

class CheckIsAuth
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
        if(!$request->session()->has('korisnik')){
            return redirect("/register")->with('poruka','Unauthorized Access!');
        } else {
            return $next($request);
        }


    }
}
