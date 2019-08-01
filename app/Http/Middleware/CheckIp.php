<?php

namespace App\Http\Middleware;

use App\Models\ErrorLogs;
use Closure;
use App\Models\IpAddress;
use App\Models\Activity;

class CheckIp
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

        // upis u bazu
        // upis u log
        if(!$request->session()->has('korisnik')) {

                $ipadresa = new IpAddress();
                $rezultat = $ipadresa->insert($request->ip());
                ErrorLogs::insertError('The user with ip_address ' . $request->ip() . ' trying unauthorized access to admin page!');

                return redirect("/register")->with('poruka','Unauthorized Access!');
        }

        return $next($request);


    }
}
