<?php

namespace App\Http\Middleware;

use App\Support\Google2FAAuthenticator;
use Closure;

class LoginSecurityMiddleware
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
        // dd($request);
        $authenticator = app(Google2FAAuthenticator::class)->boot($request);
       

        if ($authenticator->isAuthenticated()) {
            // dd('yes');
            //  return $authenticator->makeRequestOneTimePasswordResponse();
            return $next($request);
        }
        // dd('no')

        return $authenticator->makeRequestOneTimePasswordResponse();
    }
}
