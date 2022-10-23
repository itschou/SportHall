<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InstallChecker
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

        if(config()->get('config.install') == false){
            return response()->view('utils/install');
        }else{
            return $next($request);
        }
        

    }
}
