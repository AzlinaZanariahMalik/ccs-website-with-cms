<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        return $response->header('Cache-Control','nocache','no-store','max-age=0','must-revalidate')
                        ->header('Pragma','no-cache')
                        ->header('Expires','Fri, 07 Apr 2000 00:00:00 GMT'); //prevent back history upon login or logout
    }
}
