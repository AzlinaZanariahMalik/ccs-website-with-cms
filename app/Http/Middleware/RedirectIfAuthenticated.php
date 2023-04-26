<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param string|null ...$guards 
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        // if (Auth::guard('web')->check())
        //{
        //    if($this->auth->user()){
        //           return redirect()->route('admin.home');
        //    }
        //}
        //elseif (Auth::guard('alu')->check())
        //{
        //    if($this->auth->user()){
        //        return redirect()->route('alumni.home');
         //}
        //}
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);
                //if($this->auth->user()){
                //    return redirect()->route('admin.home');
                //}
                if($guard === 'alu'){
                    return redirect()->route('alumni-tracer-study.home');
                }
                    return redirect()->route('admin.home'); 
              
                
            } 
        }

        return $next($request);
    }
}
