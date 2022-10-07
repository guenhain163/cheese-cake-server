<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */

    public function handle($request, Closure $next, ...$guards)
    {
        if (auth()->user() && auth()->user()->isGuest()) {
            auth()->logout();
        }
        $this->authenticate($request, $guards);

        return $next($request);
    }

    protected function getUrlRedirect()
    {
        $url = url('/');
        if (url()->current() != url()->previous()) {
            $url = url()->previous();
        }

        $url = $url . '?login=1&redirectTo=' . url()->current();
        return $url;
    }

    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
        if (!$request->isJson()) {
            return $this->getUrlRedirect();
        }
    }
}
