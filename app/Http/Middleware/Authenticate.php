<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Authenticate extends Middleware
{
   /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //return route('login')
            if($request->routeIs('admin.*')){
                session()->flash('fail','Please Sign into your account');
                return route('login',['fail'=>true,'returnURL'=>URL::current()]);
            }
            if($request->routeIs('alumni-tracer-study.*')){
                return route('alumni-tracer-study.sign-in');
            }
        }
    }
} 
